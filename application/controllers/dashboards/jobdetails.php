<?php
class Jobdetails extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->model('dbquery');
		$this->load->model('jobsmodel');
    }
	

    public function jobdetail() {
	//$data['alljobs'] = $this->getAlljobs();
        $this->load->view('panel/templates/header');
        $this->load->view('panel/templates/leftnav'); 
        $this->load->view('panel/templates/profile'); 
        //$this->load->view('panel/layouts/joblist',$data);
        $this->load->view('panel/layouts/jobdetails');
        $this->load->view('panel/templates/footer');      
    }

}