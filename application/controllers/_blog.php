<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class _Blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('blog/main');
	}

	public function single($id='')
	{
		$this->load->view('blog/single');
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */