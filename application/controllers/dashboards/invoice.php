<?php
class Invoice extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function invoices() {
        $this->load->view('panel/templates/header');
        $this->load->view('panel/templates/leftnav');
        $this->load->view('panel/templates/profile');
        $this->load->view('panel/layouts/invoice');
        $this->load->view('panel/templates/footer');

    }
	
	public function singleinvoice() {
        $this->load->view('panel/templates/header');
        $this->load->view('panel/templates/leftnav');
        $this->load->view('panel/templates/profile');
        $this->load->view('panel/layouts/singleinvoice');
        $this->load->view('panel/templates/footer');

    }
}
?>