<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller {
    
    /**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
		
		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Are they logged in?
        if(!$this->session->userdata('user_id')):
            
            //Not logged in: Load Login form
            $this->load->view('admin/login');
        else:
        
            $data['videos'] = $this->Video_model->getVideos();
        
            //Logged in: load main controls
            $this->load->view('admin/main', $data);
        endif;
            
		$this->load->view('ui/adminFooter');
	}

    //View specific video's detail page
    public function video() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['video'] = $this->Video_model->getVideo($this->uri->segment(4));
        
        //Get the Video's vocabulary words
        $data['vocabulary'] = $this->ResourceVocab_model->getVocabulary($this->uri->segment(4));
        
        //Load the speakers
        $data['speakers'] = $this->ResourceBio_model->getVideoSpeakers($this->uri->segment(4), 1);
        
        $this->load->view('admin/video', $data);
            
		$this->load->view('ui/footer');
	}
	
	public function updateVideo() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['video'] = $this->Video_model->getVideo($this->uri->segment(4));
        
        //Get the Video's vocabulary words
        $data['vocabulary'] = $this->ResourceVocab_model->getVocabulary($this->uri->segment(4));
        
        //Load the speakers
        $data['speakers'] = $this->ResourceBio_model->getVideoSpeakers($this->uri->segment(4), 1);
        
        $this->load->view('admin/updateVideo', $data);
            
		$this->load->view('ui/footer');
	}
	
	public function users() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['users'] = $this->User_model->getUsers();
        
        $this->load->view('admin/users', $data);
            
		$this->load->view('ui/footer');
	}
		
		//View Specifici Vocabulary page
		public function updateUser() {
	
			//HTML Assetts and CSS
			$this->load->view('ui/adminHeader');
			
			//Pass the video's data to the view
			$data['user'] = $this->User_model->user($this->uri->segment(4));
			
			$this->load->view('admin/userUpdate', $data);
				
			$this->load->view('ui/adminFooter');
		}
	
	public function cms() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['pages'] = $this->Cms_model->getAllPages();
        
        $this->load->view('admin/cms', $data);
            
		$this->load->view('ui/adminFooter');
	}
	
	public function terms() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['terms'] = $this->Terms_model->getTerms();
        
        $this->load->view('admin/terms', $data);
            
		$this->load->view('ui/adminFooter');
	}
		
		public function termsView() {

			//HTML Assetts and CSS
			$this->load->view('ui/adminHeader');
			
			//Pass the video's data to the view
			$data['term'] = $this->Terms_model->getTerm($this->uri->segment(4));
			
			$this->load->view('admin/termsView', $data);
				
			$this->load->view('ui/footer');
		}
	
	public function vocabulary() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['vocabulary'] = $this->Vocabulary_model->vocabularyTerms();
        
        $this->load->view('admin/vocabulary', $data);
            
		$this->load->view('ui/footer');
	}
	
		//View Specifici Vocabulary page
		public function vocabularyView() {
	
			//HTML Assetts and CSS
			$this->load->view('ui/adminHeader');
			
			//Pass the video's data to the view
			$data['vocab'] = $this->Vocabulary_model->getVocabulary($this->uri->segment(4));
			
			$this->load->view('admin/vocabView', $data);
				
			$this->load->view('ui/footer');
		}
		
		//View Specifici Vocabulary page
		public function vocabularyUpdate() {
	
			//HTML Assetts and CSS
			$this->load->view('ui/adminHeader');
			
			//Pass the video's data to the view
			$data['vocab'] = $this->Vocabulary_model->getVocabulary($this->uri->segment(4));
			
			$this->load->view('admin/vocabUpdate', $data);
				
			$this->load->view('ui/footer');
		}
	
	//Get the Biographies
	public function biography() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['biographies'] = $this->Biography_model->getBios();
        
        $this->load->view('admin/biography', $data);
            
		$this->load->view('ui/footer');
	}
	
	//Fetch the files in a given folder
	public function fileTree() {
        
        $this->load->view('admin/videofilebrowser');

	}
    
    //Update the user's profile
    public function updateProfile() {
        
        $this->User_model->updateProfile();
    }
    
    /* Change password view*/
	public function password() {
		
		//HTML Assetts and CSS
        $this->load->view('ui/header');
        
        //Are they logged in?
        if($this->session->userdata('user_id')):
        
            $data['my'] = $this->User_model->user();
            
            $this->load->view('user/changePassword', $data);
        else:
        
            redirect('login');
        endif;
            
		$this->load->view('ui/footer');
	}
    
    /* Change password*/
	public function changePassword() {
    
        $this->User_model->changePassword();
    }
    
    /* Change language*/
	public function changeLanguage() {
    
        $this->User_model->changeLanguage($this->uri->segment(3));
        
        //Refresh the page
         redirect('', 'refresh');  
    }
    
    //log the user out
	function logout() {
        
        $this->session->unset_userdata( array('email' => '', 'id' => '', 'user_id' => '') );

		//delete the remember me cookies if they exist
		if (get_cookie('identity'))
			delete_cookie('identity');
            
		if (get_cookie('remember_code'))
			delete_cookie('remember_code');

		//Destroy the session
		$this->session->sess_destroy();

		//Recreate the session
		if (substr(CI_VERSION, 0, 1) == '2')
			$this->session->sess_create();

        /**** LOAD: UI ****/
        //HTML Assetts and CSS
        $this->load->view('ui/header');
        
        //Load the logout success message
        $this->load->view('user/logout');
        
        $this->load->view('ui/footer');
            
		return TRUE;
	}

}

/* End of file videos.php */
/* Location: ./application/controllers/videos.php */