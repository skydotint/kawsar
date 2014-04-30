<?php

class Welcome_Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('panel/templates/home');
        
    }

}
