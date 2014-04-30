<?php

/**
 * Home Controller
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /**
     * Index Page for this controller.
     */
    public function index() {
        $data = array(
            'title' => 'Complete Solutions To Design & Image Editing Project',
            'meta_desc' => 'Providing affordable & professional services on Holistic Image Editing, Identity Designs & Web UI Designs within your timeframe with 100% Quality assurance.',
            'meta_key' => 'Photoshop clipping path services, color masking, image masking, photo retouch, neck joint, image optimization, identity design, ui design service',
        );

        $this->load->view('home', $data);
    }

}