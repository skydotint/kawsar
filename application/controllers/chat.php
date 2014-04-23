<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->session->userdata('chat_sess')) {
			redirect(base_url('chat/login'));
		}
		$data['client_name'] = $this->session->userdata('client');
		$this->load->view('chat/chat', $data);
	}

	public function login()
	{
		$this->load->view('chat/chat_login');
	}

	public function do_login()
	{
		$array = array(
			'chat_sess' => time().uniqid(),
			'subject' => $this->input->post('subject'),
			'client' => $this->input->post('name'),
			'chat_client_email' => $this->input->post('email'),
			'topic'=>$this->input->post('topic')
		);
		
		$this->session->set_userdata( $array );
		redirect(base_url('chat'));

		// echo $this->session->userdata('chat_sess');
	}

	public function set_stuff()
	{
		$array = array(
			'stuff' => $this->input->post('stuff_name')
		);
		
		$this->session->set_userdata( $array );
	}

	public function save_chat()
	{
		if (!$this->session->userdata('chat_sess')) {
			redirect(base_url('chat/login'));
		}
		$chat = array(
				'chat_session_id' => $this->session->userdata('chat_sess'),
				'sender' => $this->session->userdata('client'),
				// 'send_to' => $this->session->userdata('chat_sess'),
				'msg' => $this->input->post('msg'),
				'time' => time()
			);
		$this->db->insert('chat_data', $chat);
		if (!$this->input->is_ajax_request()) {
			redirect(base_url('chat'));
		}
		echo date('h:i:s a', $chat['time']);
	}

	public function email_chat($chat_session='')
	{
		if (!$this->session->userdata('chat_sess')) {
			redirect(base_url('chat/login'));
		}
		$this->load->library('email');
		
		$this->email->from('info@clippingpathfamily.com', 'Clipping Path Family');
		$this->email->to($this->session->userdata('chat_client_email'));
		$this->email->bcc('itskawsar@gmail.com');
		$this->email->bcc('k.h.byazid@gmail.com');
		
		$this->email->subject('subject');
		$this->email->message('message');
        
        $whitelist = array('localhost');

        if(!in_array($_SERVER['SERVER_NAME'], $whitelist)){
            $this->email->send();
        }
		
		redirect(base_url());
	}

}

/* End of file chat.php */
/* Location: ./application/controllers/chat.php */