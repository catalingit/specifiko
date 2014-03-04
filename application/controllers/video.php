<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Video extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
		
		//Get data for a single video (using URI segment)
		$data['video'] = $this->Video_model->getVideo($this->uri->segment(2));
        
        //Load the speakers
        $data['speaker1'] = $this->ResourceBio_model->getSpeaker($this->uri->segment(2), 1);
        $data['speaker2'] = $this->ResourceBio_model->getSpeaker($this->uri->segment(2), 2);
        
        //Get the Video's vocabulary words
        $data['vocabulary'] = $this->ResourceVocab_model->getVocabulary($this->uri->segment(2));
        
        //Get the video's formated transcript
        $data['transcript'] = $this->Transcript_model->filterTranscript($this->uri->segment(2));
        
        //Load 7 random videos
        $data['randomVideos'] = $this->Video_model->getRandVideos(100);
		
		//CMS Content for sections
        $data['cms_topRight'] = $this->Cms_model->getSectionContent("Home Page", "Top Right");
        $data['cms_WhatIsTheSolution'] = $this->Cms_model->getSectionContent("Home Page", "What is the solution");
        $data['cms_OurMethods'] = $this->Cms_model->getSectionContent("Home Page", "Our Methods");
		
		//HTML Assetts and CSS
        $this->load->view('ui/header');
		
        $this->load->view('video', $data);
		
		$this->load->view('ui/footer');
        
        //Update the videos' view count.
        $this->Video_model->updateViewCount($this->uri->segment(2));
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