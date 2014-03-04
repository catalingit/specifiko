<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class LeftPanel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
        
		//Left panel / status
		$this->load->view('ui/leftPanel');
	}

}

/* End of file placeBuilding.php */
/* Location: ./application/controllers/placeBuilding.php */