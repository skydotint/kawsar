<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['file_upload'] = true;
		$data['error'] = '';
		$this->load->view('index', $data);
	}

	public function mini_file_upload()
	{
		$this->load->view('upload/mini_upload');
	}

	function do_upload() {
	    $this->load->library('upload');

	    // $error = array();
	    $data = array();

	    $files = $_FILES;
	    $cpt = count($_FILES['files']['name']);

	    for($i=0; $i<$cpt; $i++) {
	        $_FILES['files']['name']= $files['files']['name'][$i];
	        $_FILES['files']['type']= $files['files']['type'][$i];
	        $_FILES['files']['tmp_name']= $files['files']['tmp_name'][$i];
	        $_FILES['files']['error']= $files['files']['error'][$i];
	        $_FILES['files']['size']= $files['files']['size'][$i];    

		    $this->upload->initialize($this->set_upload_options());
		    // $this->upload->do_upload();

		    if ( ! $this->upload->do_upload('files')) {
		  		$ret['error'][] = $this->upload->display_errors();
			} else {
				$file_data = $this->upload->data();
				$ins_data = array('id'=>'', 'file_name'=>$file_data['file_name'], 'file_data'=>json_encode($file_data), 'user_id'=>$this->session->userdata('user_id'), 'upload_date'=>time());

				$this->db->insert('images', $ins_data);
				$ret['image_id'] = $this->db->insert_id();
			}
	    }

  		// echo "<pre>";
  		// print_r($error);
  		// print_r($data);
  		// echo "</pre>";

  		echo json_encode($ret);

	}

	private function set_upload_options() {
	    $config = array();
	    $user_id = $this->session->userdata('user_id');
	    $config['upload_path'] = './uploads/'.$user_id.'/input/';

	    if (!file_exists($config['upload_path'])) {
		    mkdir($config['upload_path'], 0777, true);
		}

	    $config['allowed_types'] = 'gif|jpg|jpe|jpeg|png|ai|eps|bmp|psd|tiff|tif|nef|dng|raw';
	    $config['max_size']      = '0';
	    $config['overwrite']     = FALSE;
	    return $config;
	}

	public function _do_upload()
	{
		$upload_path_url = base_url().'uploads/';
	
		echo $config['upload_path'] = FCPATH.'uploads/';
		$config['allowed_types'] = 'jpg';
		$config['max_size'] = '30000';
		
	  	$this->load->library('upload', $config);

	  	echo "<pre>";
	  	print_r($_FILES);
	  	echo "</pre>";
	  	// echo $this->input->post('files');
	  	// exit;
	  	// $error = array();
	  	$data = array();
	  	$json_array = array();
	  	$file_data = array();
	  	$error = array();
	  	echo count($_FILES);
	  	$i=0;

	  	foreach ($_FILES as $file) {
	  		// echo "<pre>";
	  		// var_dump($file);
	  		// echo "</pre>";
	  		if ( ! $this->upload->do_upload('files')) {
		  		$error[] = $this->upload->display_errors();
		  		// $this->load->view('upload', $error);
			} else {
				$data[$i] = $this->upload->data();
				/*
                // to re-size for thumbnail images un-comment and set path here and in json array	
				$config = array(
					'source_image' => $data['full_path'],
					'new_image' => $this->$upload_path_url '/thumbs',
					'maintain_ration' => true,
					'width' => 80,
					'height' => 80
				);
				
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				*/
				//set the data for the json array	
				$info->name = $data[$i]['file_name'];
		        $info->size = $data[$i]['file_size'];
				$info->type = $data[$i]['file_type'];
			    $info->url = $upload_path_url .$data[$i]['file_name'];
				// I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data[$i]['file_name']
				$info->thumbnail_url = $upload_path_url .$data[$i]['file_name'];
			    $info->delete_url = base_url().'upload/deleteImage/'.$data[$i]['file_name'];
			    $info->delete_type = 'DELETE';
				
				//this is why we put this in the constants to pass only json data
				if (IS_AJAX) {
					$json_array[$i] = json_encode(array($info));
					//this has to be the only data returned or you will get an error.
					//if you don't give this a json array it will give you a Empty file upload result error
					//it you set this without the if(IS_AJAX)...else... you get ERROR:TRUE (my experience anyway)

				// so that this will still work if javascript is not enabled
				} else {
			  		$file_data['upload_data'][$i] = $this->upload->data();
				  	// $this->load->view('admin/upload_success', $file_data);
				}
			}
	  		$i++;
	  	}

  		echo "<pre>";
  		print_r($error);
  		print_r($data);
  		print_r($file_data);
  		print_r($json_array);
  		echo "</pre>";
	}
	
	//gets the job done but you might want to add error checking and security
	public function deleteImage($file)
	{
		$success =unlink(FCPATH.'uploads/' .$file);
		//info to see if it is doing what it is supposed to	
		$info->sucess =$success;
		$info->path =base_url().'uploads/' .$file;
		$info->file =is_file(FCPATH.'uploads/' .$file);
		
		if (IS_AJAX) {
			//I don't think it matters if this is set but good for error checking in the console/firebug
			echo json_encode(array($info));
		} else {
			//here you will need to decide what you want to show for a successful delete		
			$file_data['delete_data'] = $file;
			$this->load->view('admin/delete_success', $file_data); 
		}
	}
}