<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Json extends CI_Controller {

	/**
	 * JSON Data Route and controller
	 *
	 */
	public function homeVideo() {
        
        //Get data for the random videos
		$data['videos'] = $this->Video_model->getRandVideos(100);
        
        $this->load->view('json/homevideojson', $data);
	}
    
}

/* End of file videos.php */
/* Location: ./application/controllers/json.php */