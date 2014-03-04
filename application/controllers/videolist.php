<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class VideoList extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
		
		//Get data for the random videos
		$data['videos'] = $this->Video_model->getRandVideos();
		
		//HTML Assetts and CSS
        $this->load->view('ui/header');
        $this->load->view('videos', $data);
		$this->load->view('ui/footer');
	}
    
}

/* End of file videos.php */
/* Location: ./application/controllers/videos.php */