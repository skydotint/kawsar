<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->helper('common_helper');
		// $this->load->helper('frontend_tools');

		$group = 'website_editor';
		if (!$this->ion_auth->in_group($group))
		{
			$this->session->set_flashdata('message', 'You must be a Website Editor to view this page');
			redirect(base_url());
		}
	}

	public function index()
	{
		$data['content_boxes'] = $this->crud_model->get_data('front_textblock', '*', 'title asc');
		$this->load->view('admin/front/textblock', $data);
	}

	public function pages($id='')
	{
		$view = '';
		if ($id=='') {
			$view = 'single';
			$data['pages'] = $this->crud_model->get_data_where('front_pages', array('id'=>$id));
		} else {
			$view = 'all';
			$data['pages'] = $this->crud_model->get_data('front_pages', '*', 'title asc');
		}
		$this->load->view('admin/front/pages/view_'.$view, $data);
	}

	public function add_block()
	{
		if ($this->input->post()) {
			// echo "<pre>";
			// print_r($this->input->post());
			// echo "</pre>";

			$ins_id = $this->crud_model->insert('front_textblock', $this->input->post());
			if ($ins_id!=FALSE) {
				redirect(base_url('admin/content_box/view/'.$ins_id));
			}
		} else {
			$this->load->view('admin/front/add_textblock');
		}
		// redirect(base_url('admin/content_box/'));
	}

	public function edit_block($id='')
	{
		if ($this->input->post()) {
			// echo "<pre>";
			// print_r($this->input->post());
			// echo "</pre>";
			// exit;
			$id = $this->input->post('id');

			$ins_id = $this->crud_model->update('front_textblock', $this->input->post(), array('id'=>$id));
			if ($ins_id!=FALSE) {
				redirect(base_url('admin/content_box/view/'.$id));
			}
		} else {
			$data['textblock'] = $this->crud_model->get_data_where('front_textblock', array('id'=>$id));
			$this->load->view('admin/front/edit_textblock', $data);
		}
		// redirect(base_url('admin/content_box/'));
	}

	public function view($id='')
	{
		$data['textblock'] = $this->crud_model->get_data_where('front_textblock', array('id'=>$id));
		$this->load->view('admin/front/view_textblock', $data);
	}

	public function delete($id='')
	{
		$this->crud_model->delete('front_textblock', array('id'=>$id));
		redirect(base_url('admin/content_box/'));
	}

}

/* End of file post.php */
/* Location: ./application/controllers/admin/post.php */