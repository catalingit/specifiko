<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
		
		//Get data for the random videos
		//$data['videos'] = $this->Video_model->getRandVideos();
		
		//HTML Assetts and CSS
        $this->load->view('ui/header');
            
        //Not logged in: Load Login form
        $this->load->view('login');

            
		$this->load->view('ui/footer');
	}
    
    public function logMeIn() {
        
        //Check their information against the user_model
        $this->User_model->login($this->input->post('email'), $this->input->post('password'));
    }

    public function admin() {
        
        //Check their information against the user_model
        $this->User_model->adminLogin($this->input->post('email'), $this->input->post('password'));
    }
    
}

/* End of file videos.php */
/* Location: ./application/controllers/videos.php */