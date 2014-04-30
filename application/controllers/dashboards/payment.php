<?php
class Payment extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function payments() {
        $this->load->view('panel/layouts/user');
    }
}
?>