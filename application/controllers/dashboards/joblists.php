<?php
class Joblists extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->model('dbquery');
		$this->load->model('jobsmodel');
    }
	
	public function getAlljobs() {
        $jobslist = $this->jobsmodel->getAlljobs();
        return $jobslist;
    }
    

    public function joblist() {
	$data['alljobs'] = $this->getAlljobs();
        $this->load->view('panel/templates/header');
        $this->load->view('panel/templates/leftnav'); 
        $this->load->view('panel/templates/profile'); 
        $this->load->view('panel/layouts/joblist',$data);
        $this->load->view('panel/templates/footer');      
    }

}