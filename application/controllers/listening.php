<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Listening extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
		
        //Get data for a single video (using URI segment)
		$data['video'] = $this->Video_model->getVideo($this->uri->segment(2));
		
		//Get a dictation (sample dictation)
		$data['dictation'] = $this->Listening_model->getDictation(5);
        
		//HTML Assetts and CSS
        //$this->load->view('ui/header');
		
        $this->load->view('module/listening', $data);
		
		//$this->load->view('ui/footer');
	}
    
    /*Word details modal*/
    public function wordDetails(){
        
        $data['vocabulary'] = $this->ResourceVocab_model->getVocabularyWord($this->uri->segment(3));
        $this->load->view('video/worddetail', $data);
    }
    
    /*Word details modal*/
    public function addVocabulary(){
        
        $data['vocabulary'] = $this->ResourceVocab_model->addVocabulary($this->uri->segment(3));
    }
    
}

/* End of file video.php */
/* Location: ./application/controllers/video.php */