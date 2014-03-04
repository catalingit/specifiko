<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Signup extends CI_Controller {
    
    private function loadViews($view) {

        $this->load->view('ui/header');
        $this->load->view($view);
        $this->load->view('ui/footer');

        return NULL;
    }

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index() {
        
        //Load in the Form helper
        $this->load->helper('form');
        
        $this->loadViews('signup');
	}
    
    public function betaSignup() {
        
        $this->load->model('user_model', 'User');
        $this->User->betaSignup(); 
        
        //Load in the Form helper
        echo '<br/><div class="alert alert-success">Thank you for signing up to our Beta Access list. We will email you once we are closer
        to Beta!</div>';
	}
}

/* End of file signup.php */
/* Location: ./application/controllers/signup.php */