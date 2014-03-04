<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
		
		//Get data for the random videos
		$data['videos'] = $this->Video_model->getRandVideos(100);
        
        //Get data for the random videos
		$data['featVideo'] = $this->Video_model->getRandVideos(1);
        
        //Get the random video's transcript and vocab
        foreach($data['featVideo'] AS $featVideo):
        
            //Get the Video's vocabulary words
            $data['vocabulary'] = $this->ResourceVocab_model->getVocabulary($featVideo['id']);
            
            //Get the video's formated transcript
            $data['transcript'] = $this->Transcript_model->filterTranscript($featVideo['id']);
        
        endforeach;
		
        //CMS Content for sections
        $data['cms_topRight'] = $this->Cms_model->getSectionContent("Home Page", "Top Right");
        $data['cms_WhatIsTheSolution'] = $this->Cms_model->getSectionContent("Home Page", "What is the solution");
        $data['cms_OurMethods'] = $this->Cms_model->getSectionContent("Home Page", "Our Methods");
        
		//HTML Assetts and CSS
        $this->load->view('ui/header');
        $this->load->view('home', $data);
		$this->load->view('ui/footer');
	}
    
    /*Featured Video Loader
     *Load a new featured video upon request
     */
    public function homeVideoLoader(){
        
        //Get data for the random videos
		$data['featVideo'] = $this->Video_model->loadFeaturedVideo($this->input->post('videoid'));
        
        //Get the random video's transcript and vocab
        foreach($data['featVideo'] AS $featVideo):
        
            //Get the Video's vocabulary words
            $data['vocabulary'] = $this->ResourceVocab_model->getVocabulary($this->input->post('videoid'));
            
            //Get the video's formated transcript
            $data['transcript'] = $this->Transcript_model->filterTranscript($this->input->post('videoid'));
        
        endforeach;
        
        $this->load->view('home/videoPlayer', $data);
    }
    
}

/* End of file videos.php */
/* Location: ./application/controllers/home.php */