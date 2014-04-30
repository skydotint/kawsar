<?php

class Coupon extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function all_coupon() {
        $this->load->view('panel/layouts/cuponsview');
    }

}