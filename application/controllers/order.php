<?php
/**
 * Order Controller
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public $conn_id = false;

	function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		{
			$array = array(
				'redirect_url' => current_url()
			);
			
			$this->session->set_userdata( $array );
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		$this->load->model('crud_model');
	}

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		// $data['jobs'] = $this->crud_model->get_where('jobs', array('user_id' => $user_id));
		$data['jobs'] = $this->crud_model->get_oders_with_invoice($user_id);
		// echo $this->db->last_query();
		$this->load->view('order/index', $data);
	}

	public function archive()
	{
		$this->load->view('order/archive');
	}

	public function view($orderid='')
	{
		if ($orderid=='') {
			redirect(base_url('order'));
		}
	}

	// URL aliased by routes to "order/new"
	public function create()
	{
		if ($this->input->post()) {
			$step = $this->input->post('step');
			if (!$step && !$this->session->userdata('job_data')) {
				redirect(base_url('order/create/?step=1'));
				exit;
			}
			if ($step == 1) {

				$job_id = $this->input->post('job_id');

				$no_of_image = $this->crud_model->count_data( 'images', array( 'job_id' => $job_id ));

				if ($this->input->post('make_default_instruction')) {
					$this->make_default_instruction($this->input->post('todo'));
				}

				$job_data = array(
					'name' => $this->input->post('name'),
					'created' => time(),
					'no_of_image' => $no_of_image, 
					'user_id' => $this->session->userdata('user_id'), 
					'modified' => '', 
					'todo' => $this->input->post('todo'), 
					'status' => '3'
				);
				$this->db->update('jobs', $job_data, array('id'=>$job_id));
				
				$this->session->set_userdata( array('job_data'=>$job_data) );

				redirect(base_url('order/create/?step=2'));
				exit;
			} if ($step == 2) {
				redirect(base_url('order/create/?step=3'));
				exit;
			} if ($step == 3) {
				# code...
			} if ($step == 4) {
				# code...
			} if ($step == 5) {
				# code...
			} else {
				# code...
			}
			
			
		} else {
			if (!isset($_GET['step'])) {
				redirect(base_url('order/create/?step=1'));
				exit;
			}
			$data['new_job_id'] = $this->get_new_job_id();
			$data['image_preview_box_edit'] = $this->make_image_preview($data['new_job_id'], true);
			$data['image_preview_box'] = $this->make_image_preview($data['new_job_id'], true, false);
			
			$this->session->set_userdata( 'job_id', $data['new_job_id'] );

			$data['file_upload'] = true;
			$this->load->view('order/new', $data);
		}
	}
	// URL aliased by routes to "order/new"
	public function create1()
	{
		if ($this->input->post()) {
			$job_id = $this->input->post('job_id');

			$no_of_image = $this->crud_model->count_data('images', array('job_id'=>$job_id));

			if ($this->input->post('make_default_instruction')) {
				$this->make_default_instruction($this->input->post('todo'));
			}

			$job_data = array(
					'name' => $this->input->post('name'),
					'created' => time(), 
					'completed' => time(), 
					'no_of_image' => $no_of_image, 
					'user_id' => $this->session->userdata('user_id'), 
					'modified' => '', 
					'todo' => $this->input->post('todo'), 
					'status' => '3'
				);

			$this->db->update('jobs', $job_data, array('id'=>$job_id));

			redirect(base_url('order/view/'.$job_id));
			
		} else {
			$data['new_job_id'] = $this->get_new_job_id();
			$data['image_preview_box'] = $this->make_image_preview($data['new_job_id'], true);
			
			$this->session->set_userdata( 'job_id', $data['new_job_id'] );

			$data['file_upload'] = true;
			$this->load->view('order1/new', $data);
		}
	}

	public function get_new_job_id()
	{
		$job_id = false;
		$user_id = $this->session->userdata('user_id');

		$job = $this->crud_model->get_data_where('jobs', array('status'=>'2', 'user_id'=>$user_id), 'id desc', 1);
		
		if (empty($job)) {
			$job_id = $this->crud_model->insert('jobs', array('id'=>'', 'user_id'=>$user_id));
		} else {
			$job_id = $job->id;
		}
		
		$this->session->set_userdata(array( 'job_id' => $job_id ));
		return $job_id;
	}

	public function upload()
	{
		$job_id = $this->session->userdata('job_id');
		$user_name = $this->ion_auth->user()->row()->username;

		$output_dir = "./uploads/projects/".$user_name.'/'.$job_id."/before/";

	 	if (!file_exists($output_dir)) {
		    mkdir($output_dir, 0777, true);
		}

		if(isset($_FILES["myfile"]))
		{
			$ret = array();

			$error =$_FILES["myfile"]["error"];
			//You need to handle  both cases
			//If Any browser does not support serializing of multiple files using FormData() 
			if(!is_array($_FILES["myfile"]["name"])) //single file
			{
		 	 	$fileName = $_FILES["myfile"]["name"];
		 	 	$output_name = time().'_'.$fileName;
		 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$output_name);

				$file_data = array(
						'name'=>$output_name, 
						'org_name'=>$fileName, 
						'size'=>$_FILES["myfile"]["size"], 
						'type'=>$_FILES["myfile"]["type"]
					);
				$ins_data = array(
						'id'=>'', 'file_name'=>$file_data['name'], 
						'file_data'=>json_encode($file_data), 
						'user_id'=>$this->session->userdata('user_id'), 
						'job_id'=>$job_id, 
						'upload_date'=>time()
					);

		    	$ret[] = $file_data;

				$this->db->insert('images', $ins_data);
				$ret['image_id'] = $this->db->insert_id();
			}
			else  //Multiple files, file[]
			{
				$fileCount = count($_FILES["myfile"]["name"]);
				for($i=0; $i < $fileCount; $i++)
				{
					$fileName = $_FILES["myfile"]["name"][$i];
					move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
					$ret[] = $_FILES["myfile"];
				}
			}
		    echo json_encode($ret);
		}
	}

	public function make_image_preview($job_id='', $ret=false, $edit=true)
	{
		if ($job_id=='') {
			$job_id = $this->session->userdata('job_id');
		}
		
		$data['username'] = $this->ion_auth->user()->row()->username;
		$data['images'] = $this->crud_model->get_where('images', array('job_id'=>$job_id));
		$data['edit'] = $edit;

		if (isset($_GET['action']) && $_GET['action']=='edit') {
			$data['edit'] = false;
		}
		// var_dump($edit);exit;

		$view = $this->load->view('order/make_image_preview', $data, true);
		if ($ret==true) {
			return $view;
		}
		echo $view;
	}

	public function del_image($id)
	{
		$job_id = $this->session->userdata('job_id');
		$username = $this->ion_auth->user()->row()->username;

		$file_path = './uploads/projects/' . $username . '/' . $job_id . '/before/';

		if ($id=='all') {
			$images = $this->crud_model->get_where('images', array('job_id'=>$job_id));
			if (count($images)>0) {
				foreach ($images as $img) {
					$this->crud_model->delete_data('images', array('id'=>$img['id']));
					$this->crud_model->delete_data('image_comments', array('image_id'=>$img['id']));

					$file = $file_path . $img['file_name'];
					if (file_exists($file)) 
					{
				        unlink($file);
				    }
				}
			}
		} else {
			$img = $this->crud_model->get_data_where('images', array('id'=>$id));

			$msg = '<div class="alert alert-error">This image is not found in database, please delete it by using FTP.</div>';
			if (count($img)>0) {
				$this->crud_model->delete_data('images', array('id'=>$id));
				$this->crud_model->delete_data('image_comments', array('image_id'=>$img->id));

				$file = $file_path . $img->file_name;
				if (file_exists($file)) 
				{
			        unlink($file);
			    }
			    $msg = '<div class="alert alert-success">'.$img->file_name.' has been deleted successfully.</div>';
			}
		}
		if (!$this->input->is_ajax_request()) {
			$this->session->set_flashdata('message', $msg);
			redirect(base_url('order/create'));
		}
		json_encode(array('msg'=>$msg));
	}

	public function add_default_instruction()
	{
		$user_id = $this->session->userdata('user_id');
		$instruction = $this->crud_model->get_data_where('job_instructions', array('user_id'=>$user_id, 'default'=>'1'));
		if (!empty($instruction)) {
			echo $instruction->instruction;
		}
		//echo $instruction->instruction;
	}

	public function make_default_instruction($data)
	{
		// if data is null or blank, return false
		if ((is_null($data) && $data=='')) {
			return false;
		}

		$user_id = $this->session->userdata('user_id');

		// replace default status
		$this->crud_model->update('job_instructions', array('default'=>'0'), array('user_id'=>$user_id, 'default'=>'1'));

		// insert new and return new inserted id
		return $this->crud_model->insert('job_instructions', array('user_id'=>$user_id, 'instruction'=>$data, 'date'=>time(), 'default'=>'1'));
	}

	public function edit($id=NULL)
	{
		if ($id==NULL) {
			$this->session->set_flashdata('required_msg', '<div class="error">Please select one data first to MODIFY.</div>');
			$this->load->view('order/index');
		} else {
			$user_id = $this->session->userdata('user_id');
			$data['jobs'] = $this->crud_model->get_data_where('jobs', array('user_id' => $user_id, 'id'=>$id));

			$this->load->view('order/edit', $data);
		}
	}

	public function remove($id)
	{
		if ($id==NULL) {
			$this->session->set_flashdata('required_msg', '<div class="error">Please select one data first to REMOVE.</div>');
			$this->load->view('order/index');
		} else {
			$this->load->view('order/edit');
		}
	}

	public function apply_coupon($code='')
	{
		$code = $this->input->post('coupon_code')?$this->input->post('coupon_code'):$code;
		if ($code=='') return false;

		$coupon = $this->crud_model->get_data_where('coupon_code', array('code'=>$code));
		if (!$coupon) return false;
		else {
			$expire = false;
			if ( $coupon->start != NULL && !$coupon->start >= now())
				$expire = true;

			if ($coupon->end != NULL && !$coupon->end <= now())
				$expire = true;

			if ($expire==false) {
				$this->session->set_userdata(array('discount'=>$coupon->discount));
				redirect(base_url('order/create?step='.$this->input->post('step').'&applied=coupon'));
				exit;
			}
			return false;
		}
	}

	public function invoice($id)
	{
		# code...
	}

	public function quotation($id)
	{
		# code...
	}
}

/* End of file order.php */
/* Location: ./application/controllers/order.php */