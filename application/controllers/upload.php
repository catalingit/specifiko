<?php

class Upload extends CI_Controller {

	function __construct() {
        
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index() {
        
		//$this->load->view('upload_form', array('error' => ' ' ));
	}

	public function do_upload($field_name, $uploadPath) {
        
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		//Initiate the uploading library
		$this->load->library('upload', $config);

		//If we could not upload the file
		if ( ! $this->upload->do_upload()) {
            
			$error = array('error' => $this->upload->display_errors());
			//$this->load->view('upload_form', $error);
			return false;
        
		//If successful, let's show the message and save the file to the server
		} else {
            
			$data = array('upload_data' => $this->upload->data());
			//$this->load->view('upload_success', $data);
			
			return true;
		}
	}
}