<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Controller {
    
    /**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
		
		//Get data for the random videos
		//$data['videos'] = $this->Video_model->getRandVideos();
		
		//HTML Assetts and CSS
        $this->load->view('ui/header');
        
        //Are they logged in?
        if($this->session->userdata('user_id')):
        
            $data['my'] = $this->User_model->user();
            
            //Not logged in: Load Login form
            $this->load->view('account', $data);
        else:
        
            //Logged in: Redirect to videos page
            redirect('login');
        endif;
            
		$this->load->view('ui/footer');
	}

    public function register() {
        
        //Check their information against the user_model
        $this->User_model->register();
    }
    
    public function activate() {
        
        //HTML Assetts and CSS
        $this->load->view('ui/header');
        
        //Attempt to activate the user's account
        $data['confirm'] = $this->User_model->activate($this->uri->segment(2));
        $this->load->view('user/activate', $data);
        
        
        $this->load->view('ui/footer');
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
    
    public function forgotPass() {
		
		//HTML Assetts and CSS
        $this->load->view('ui/header');
        
        //Reset user's password via email
        $this->load->view('user/forgotpass');
            
		$this->load->view('ui/footer');
	}
        
        /*Reset User's Password
         *Run the logic to check if we can reset
         *the user's password
        */
        public function resetPass() {
		
            $this->User_model->resetPassword();
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
    
    /* Update the user's info via the Admin panel*/
	public function adminUpdate() {
    
        $this->User_model->adminUpdate();
    }

}

/* End of file videos.php */
/* Location: ./application/controllers/videos.php */