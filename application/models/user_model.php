<?php

class User_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Load player's building placements */
    function getUsers(){
    
        $query = $this->db->get('user');
		return $query->result_array();
    }
    
    function user($user_id = ""){
        
        if(empty($user_id))
            $user_id = $this->session->userdata('user_id');
        
        if(!empty($user_id))
            $user_id = $user_id;
            
        $query = $this->db->query("SELECT * FROM user WHERE id = '".$user_id."'");
		
        return $query->row();
    }
    
    /*User Name*/
    function myUsername(){
        
        $query = $this->db->query("SELECT name FROM user WHERE id = '".$this->session->userdata('user_id')."' LIMIT 1;");
        
        if ($query->num_rows() > 0){
            $row = $query->row_array();
            return $row['name'];
        }
    }
    
    /*User Name*/
    function myLanguage(){
        
        $query = $this->db->query("SELECT native_language FROM user WHERE id = '".$this->session->userdata('user_id')."' LIMIT 1;");
        
        if ($query->num_rows() > 0){
            $row = $query->row_array();
            return $row['native_language'];
        }
    }
    
    function myPassword(){
        
        $query = $this->db->query("SELECT password FROM user WHERE id = '".$this->session->userdata('user_id')."' LIMIT 1;");
        
        if ($query->num_rows() > 0){
            $row = $query->row_array();
            return $row['password'];
        }
    }
    
    /**
	 * login
	 *
	 * @return bool
	 * @author Seirim
	 **/
	public function login($email, $password, $remember = FALSE) {

		if (empty($email) || empty($password)) {
            
			echo 'Email and Password must not be empty.';
			return FALSE;
		}

		$query = $this->db->select('name, email, id, password, account_status, user_level, last_login')
		                  ->where('email', $this->db->escape_str($email))
		                  ->limit(1)
		                  ->get('user');

		if ($query->num_rows() === 1) {
			$user = $query->row();

			$password = $this->hash_password($password);
                
            if ($user->account_status == "Inactive") {
                echo 'Sorry, but your account has not yet been activated.';
                return FALSE;
            }

            //Setup the user's sessions
            $this->set_session($user);

            //Update their last loged in timestap
            $this->update_last_login($user->id);

            if ($remember && $this->config->item('remember_users', 'ion_auth'))
                $this->remember_user($user->id);
            
            echo 'You have logged in. One moment.';
            echo '<script>parent.window.location.replace("../");</script>';

            return TRUE;
		}

		//Hash something anyway, just to take up time
		$this->hash_password($password);
        echo 'Sorry, but there has been an error. We could not locate your account.';
		return FALSE;
	}
    
    /**
	 * Admin login
	 *
	 * @return bool
	 * @author Seirim
	 **/
	public function adminLogin($email, $password, $remember = FALSE) {

		if (empty($email) || empty($password)) {
            
			echo 'Email and Password must not be empty.';
			return FALSE;
		}

		$query = $this->db->select('name, email, id, password, account_status, user_level, last_login')
		                  ->where('email', $this->db->escape_str($email))
		                  ->limit(1)
		                  ->get('user');

		if ($query->num_rows() === 1) {
			$user = $query->row();

            //Check their admin status
            if($user->user_level == "Admin"):
                
                $password = $this->hash_password($password);
                    
                if ($user->account_status == "Inactive") {
                    echo 'Sorry, but your account has not yet been activated.';
                    return FALSE;
                }
    
                //Setup the user's sessions
                $this->set_session($user);
    
                //Update their last loged in timestap
                $this->update_last_login($user->id);
    
                if ($remember && $this->config->item('remember_users', 'ion_auth'))
                    $this->remember_user($user->id);
                
                echo 'You have logged in. One moment.';
                echo '<script>parent.window.location.replace("/admin");</script>';
    
                return TRUE;
            else:
                
                //They are not an admin
                echo 'You do not permission to access the administration panel.';
                return false;
            endif;
		}

		//Hash something anyway, just to take up time
		$this->hash_password($password);
        echo 'Sorry, but there has been an error. We could not locate your account.';
        
		return FALSE;
	}
    
    /**
	 * Password Hash
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function hash_password($password) {
        
		if (empty($password)):
        
			return FALSE;
        else:
        
			return sha1($password);
        endif;
	}
    
    /**
	 * Register User
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function register() {
        
        $this->name = $this->input->post('name');
        $this->organization = $this->input->post('organization');
        $this->email = $this->input->post('email');
        $this->password = $this->input->post('password');
        $misc['password2'] = $this->input->post('password2');
        $this->native_language = $this->input->post('native_language');
        $this->home_country = $this->input->post('home_country');
        $this->english_level = $this->input->post('english_level');
        
        //Generate activation code
        $this->activate_code = get_random_password();
        
        //Password Match?
        if($this->password != $misc['password2']):
            echo 'Your passwords must match.';
            return false;
        endif;
        
        //Email isn't already in the DB
        if($this->email_check($this->email)):
            echo 'This email address already exists.';
            return false;
        endif;
        
        //Everything check out okay
        //Encrypt the password
        $this->password = $this->hash_password($this->password);
        $this->db->insert('user', $this);
        
        //Send out email to the user (with their new password)
        $this->email->from('accounts@specifiko.com', 'Specifiko');
        $this->email->to($email);
        
        $this->email->subject('Welcome to Specifiko');
        $this->email->message('Welcome to Specifiko!<br/><br/>
                              
                              This email is to confirm you new account with us. You will need to click the link below in order
                              to begin using your account and access the full features of Specifiko.<br/>
                              
                              http://www.bilingoz.com/activate/'.$this->activate_code);
        $this->email->send();
        
        echo 'You have signed up to <strong>Specifiko</strong>. Please check your email for
        your activation link.';
    }
    
    /**
	 * Email check
	 *
	 * @return bool
	 * @author Seirim
	 **/
	public function email_check($email) {

		if (empty($email))
			return FALSE;

		return $this->db->where('email', $email)->count_all_results('user') > 0;
	}
    
    /**
	 * update_last_login
	 *
	 * @return bool
	 * @author Seririm
	 **/
	public function update_last_login($id) {

		$this->db->update('user', array('last_login' => time()), array('id' => $id));
		return $this->db->affected_rows() == 1;
	}
    
    /**
	 * set_session
	 *
	 * @return bool
	 * @author Seririm
	 **/
	public function set_session($user) {

		$session_data = array(
		    'user_level'           => $user->user_level,
		    'username'             => $user->name,
		    'email'                => $user->email,
		    'user_id'              => $user->id, //everyone likes to overwrite id so we'll use user_id
		    'old_last_login'       => $user->last_login
		);

		$this->session->set_userdata($session_data);
		return TRUE;
	}
    
    /**
	 * Update Profile
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function updateProfile() {
        
        $this->name = $this->input->post('name');
        $this->organization = $this->input->post('organization');
        $this->email = $this->input->post('email');
        $this->native_language = $this->input->post('native_language');
        $this->home_country = $this->input->post('home_country');
        $this->english_level = $this->input->post('english_level');
        
        //Everything check out okay
        $this->db->where('id', $this->session->userdata('user_id'));
        $this->db->update('user', $this);
        
        echo 'You have updated your bilingoz account.';
    }
    
    /**
	 * Change password
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function changePassword() {
        
        $old_password = $this->hash_password($this->input->post('old_password'));
        $new_password = $this->input->post('new_password');
        $new_password2 = $this->input->post('new_password2');
        
        //Check if the old password matches the user's current password
        if($this->myPassword() != $old_password):
            
            echo 'Your current password does not match whats on file.';
            return false;
        endif;
        
        if($new_password != $new_password2):
            
            echo 'Your new passwords must match each other.';
            return false;
        endif;
        
        //Hash our new password
        $this->password = $this->hash_password($this->input->post('new_password'));
        
        //Everything check out okay
        $this->db->where('id', $this->session->userdata('user_id'));
        $this->db->update('user', $this);
        
        echo 'You have changed your password.';
    }
    
    /**
	 * Reset password
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function resetPassword() {

        $email = $this->input->post('email');
        
        //Check if mail exists
        $query = $this->db->get_where('user', array('email' => $email));
        
        //E-mail is found in the database
        if($query->num_rows() > 0) {
            
            //Generate random password
            $password = get_random_password();
            $this->password = $this->hash_password($password);
           
            //Update the user's account with the new password
            $this->db->where('email', $email);
            $this->db->update('user', $this);
            
            //Send out email to the user (with their new password)
            $this->email->from('support@bilingoz.com', 'bilingoz Support');
            $this->email->to($email);
            
            $this->email->subject('Password Reset Request');
            $this->email->message('You, or someone using this email has requested a password reset for the account at
                                  bilingoz.com. If you did not request a password, and are the owner of the account. Please
                                  contact us at support@bilingoz.com<br/><br/>
                                  
                                  Your new password to your bilingoz.com account is: <strong>'.$password.'</strong><br/>
                                  
                                  You can login to your bilingoz.com account by visiting  www.bilingoz.com/login');
            $this->email->send();
            
            //Send back update to the form ajax
            echo 'Your password has been reset. The new password has been emaield to you at '. $email .', please let us know
            if you have any issues.';
            
            return true;
        
        } else {
            
           echo 'This email address is not on file.';
           return false;
        }
    }
    
    /**
	 * Activate / Confirm Account
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function activate($code) {
        
        //Check if activate code exists
        $query = $this->db->get_where('user', array('activate_code' => $code));
        
        //activate code is found in the database
        if($query->num_rows() > 0) {
           
            //Update the user's account as Active
            $this->account_status = "Active";
            $this->db->where('activate_code', $code);
            $this->db->update('user', $this);
            
            //Send back update to the form ajax
            return 'Thank you for confirming your account. You may now <a href="/login">Login</a>';
        
        } else {
            
            return 'Sorry, we could not activate your account based on your activation code.';
        }
    }
    
    /**
	 * Update the user's language
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function changeLanguage($language) {
        
        $this->native_language = $language;
        
        $this->db->where('id', $this->session->userdata('user_id'));
        $this->db->update('user', $this);
    }
    
    
    /**
	 * Admin Update User
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function adminUpdate() {
        
        $userid = $this->input->post('userID');
        $this->name = $this->input->post('name');
        $this->organization = $this->input->post('organization');
        $this->email = $this->input->post('email');
        $this->user_level = $this->input->post('user_level');
        $this->account_status = $this->input->post('account_status');
        
        //Everything check out okay
        $this->db->where('id', $userid);
        $this->db->update('user', $this);
        
        echo 'You have updated the users account.';
    }
}