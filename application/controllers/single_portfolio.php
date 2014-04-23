<?php
/**
 * Home Controller
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_Portfolio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('single_portfolio');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */