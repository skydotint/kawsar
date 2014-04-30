<?php
class Employee extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function employees() {
        $this->load->view('panel/layouts/employee');
    }
	
	public function employeesall() {
        $this->load->view('panel/layouts/employee');
    }
}
?>