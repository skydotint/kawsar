<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tormuz_uploads
{
  	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function upload_images($field)
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
	}

	public function remove_image($image)
	{
		# code...
	}

	public function add_comments($image)
	{
		# code...
	}

	public function edit_comments($image)
	{
		# code...
	}

	public function fatch_ftp($user_id)
	{
		# code...
	}

}

/* End of file tormuz_uploads.php */
/* Location: ./application/libraries/tormuz_uploads.php */
