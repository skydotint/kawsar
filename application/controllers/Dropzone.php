<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropzone extends CI_Controller {

	 
	public function index()
    {
    	// echo FCPATH . 'uploads/';
		$this->load->view('dropzone-view');
    }

    function upload()
    {

		if (!empty($_FILES))
		{
			for ($i=0; $i < count($_FILES['file']['name']); $i++) { 
				$tempFile = $_FILES['file']['tmp_name'];

			    // $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			    $targetPath = FCPATH . 'uploads/';

			    $targetFile = $targetPath . $_FILES['file']['name'];

			    move_uploaded_file($tempFile, $targetFile);
			}

		    // $tempFile = $_FILES['file']['tmp_name'];

		    // // $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
		    // $targetPath = FCPATH . 'uploads/';

		    // $targetFile = $targetPath . $_FILES['file']['name'];

		    // move_uploaded_file($tempFile, $targetFile);
		}
    }

}
 