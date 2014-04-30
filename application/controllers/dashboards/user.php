<?php
class User extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function users() {
        $this->load->view('panel/layouts/user');
    }
}
?>