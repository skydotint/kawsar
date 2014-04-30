<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cpf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('crud_model');
        //Do your magic here
    }

    public function index() {
        redirect(base_url());
    }

    public function contact($view = 'normal', $skey = '') {
        $data = array(
            'title' => 'Contact'
        );
        if ($view == 'normal') {
            $this->load->view('site/contact', $data);
        } elseif ($view == 'admin' && $skey == '334-6678') {
            $data['contact'] = $this->crud_model->get_data('contacts');
            $this->load->view('site/contact_admin', $data);
        } else {
            echo "hello";
        }
    }

    public function send_contact($cpf_debug = false) {
        if ($this->input->post()) {
            $contact['name'] = $this->input->post('name');
            $contact['email'] = $this->input->post('email');
            $contact['phone'] = $this->input->post('phone');
            $contact['country'] = $this->input->post('country');
            $contact['subject'] = $this->input->post('subject');
            $contact['message'] = $this->input->post('message');
            $contact['date'] = time();

            $contact_id = $this->crud_model->insert('contacts', $contact);

            if ($contact_id != false) {
                $msg = "Dear Admin,
A new customer has just placed a query. Please reply Him/her within 5 Munities.

Contact Us Details:
Name : " . $contact['name'] . "
Email : " . $contact['email'] . "
Subject : " . $contact['subject'] . "
Message : 
" . $contact['message'] . "

Regards,
CPF Engine";

                $this->load->library('email');

                $this->email->from($this->input->post('email'), $this->input->post('name'));
                $this->email->to('info@clippingpathfamily.com', 'Clipping Path Family');
                $this->email->bcc('itskawsar@gmail.com');
                $this->email->bcc('k.h.byazid@gmail.com');

                $this->email->subject('Message from Contact us: ' . $this->input->post('subject'));
                $this->email->message($msg);

                $whitelist = array('localhost');

                if (!in_array($_SERVER['SERVER_NAME'], $whitelist)) {
                    $this->email->send();
                }

                if ($cpf_debug == true) {
                    echo $this->email->print_debugger();
                }

                $this->send_confirm($this->input->post('name'), $this->input->post('email'));
            }

            $this->session->set_flashdata('send_status', '<div class="alert-success contact-success">Your contact successfully sent.</div>');

            redirect(base_url('contact'));
        }
    }

    public function send_confirm($name = '', $email = '', $cpf_debug = false) {
        if ($name != '' && $email != '') {
            $msg = "Dear " . $name . ",
Thank you for contacting to clippingpathfamily.com. Your query has been received. We will get back to you as soon as possible.
For further queries, you can simply reply to this mail.

Kind regards,
clippingpathfamily.com";


            $this->load->library('email');

            $this->email->from('info@clippingpathfamily.com', 'Clipping Path Family');
            $this->email->to($email, $name);
            $this->email->bcc('itskawsar@gmail.com');
            $this->email->bcc('k.h.byazid@gmail.com');

            $this->email->subject('Thank you for contacting to clippingpathfamily.com');
            $this->email->message($msg);

            $whitelist = array('localhost');

            if (!in_array($_SERVER['SERVER_NAME'], $whitelist)) {
                $this->email->send();
            }

            if ($cpf_debug == true) {
                echo $this->email->print_debugger();
            }
        }
    }

    public function about() {
        $data = array(
            'title' => 'About'
        );
        $this->load->view('site/about', $data);
    }

    public function help() {
        $data = array(
            'title' => 'Help'
        );
        $this->load->view('site/help', $data);
    }

    public function faq() {
        $data = array(
            'title' => 'Frequently Ask Question'
        );
        $this->load->view('site/faq', $data);
    }

    public function howitworks() {
        $data = array(
            'title' => 'How Clipping Path Family Works'
        );
        $this->load->view('site/howitworks', $data);
    }

    public function privacy_policy() {
        $data = array(
            'title' => 'Privacy & Policy'
        );
        $this->load->view('site/privacy_policy', $data);
    }

    public function tnc() {
        $data = array(
            'title' => 'Terms & Condition'
        );
        $this->load->view('site/tnc', $data);
    }

    public function partnership() {
        $data = array(
            'title' => 'Partnership'
        );
        $this->load->view('site/partnership', $data);
    }

    public function test_json() {

        // unset(site_url());
        // require(FCPATH.'blog/wp-blog-header.php');
        // $posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
        // foreach ($posts as $post) : setup_postdata( $post );
        // the_date(); echo "<br />";
        // the_title();  
        // the_excerpt();
        // endforeach;
        // $rss = new XML_RSS('http://clippingpathfamily.com/blog/feed/');
        // $rss->parse();
        // $itemArr = array_slice ( $rss->getItems(), 0, 5 );
        // print_r($itemArr);
        // return $itemArr;
        // $url = 'http://clippingpathfamily.com/blog/rss2/';
        // $url = base_url('blog/feed');
        // $doc = new DOMDocument();
        //    var_dump($doc->load($url));
        //    exit;
        //    $itemArr = array();
        //    foreach ($doc->getElementsByTagName('item') as $node) {
        //        if ($display == 0) {
        //            break;
        //        }
        //        $itemRSS = array (
        //            'title'       => $node->getElementsByTagName('title')->item(0)->nodeValue,
        //            'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
        //            'link'        => $node->getElementsByTagName('link')->item(0)->nodeValue,
        //            'pubdate'     => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
        //        );
        //        array_push($itemArr, $itemRSS);
        //        $display--;
        //    }
        //    print_r($itemArr);
        //    return $itemArr;

        $query = "Select * FROM blog_posts WHERE post_type='post' AND post_status='publish' ORDER BY id DESC LIMIT 5";

        $q = $this->db->query($query);

        $blog_list = "<ul>";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $value) {
                echo "<pre>";
                print_r($value);
                echo "</pre>";
                $blog_list .= "<li>";
                $blog_list .= '<a href="' . $value->guid . '">';
                $blog_list .= '<p class="blog-title">' . $value->post_title . '</p>';
                $blog_list .= '</a>';
                $blog_list .= '</li>';
            }
        }
        $blog_list .= '</ul>';

        //start a loop that starts $i at 0, and make increase until it's at the number of rows  
        // for($i=0; $i< $num_rows; $i++){   
        // 	//assign data to variables, $i is the row number, which increases with each run of the loop  
        // 	$blog_date = mysql_result($query_result, $i, "post_date");  
        // 	$blog_title = mysql_result($query_result, $i, "post_title");  
        // 	$blog_content = mysql_result($query_result, $i, "post_content");  
        // 	//$blog_permalink = mysql_result($query_result, $i, "guid"); //use this line for p=11 format.  
        // 	$blog_permalink = $blog_url . mysql_result($query_result, $i, "post_name"); //combine blog url, with permalink title. Use this for title format  
        // 	//format date  
        // 	$blog_date = strtotime($blog_date);  
        // 	$blog_date = strftime("%b %e", $blog_date); 
        // }
    }

}

/* End of file cpf.php */
/* Location: ./application/controllers/cpf.php */