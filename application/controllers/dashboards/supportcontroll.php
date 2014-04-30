<?php

class Supportcontroll extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function supportforclipping() {
        $this->load->view('panel/layouts/cuponsview');
    }

}