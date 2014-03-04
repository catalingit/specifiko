<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vocabulary extends CI_Controller {
    
    //Search for a key matching term
    public function liveSearch() {
        
        $data['vocabTerms'] = $this->Vocabulary_model->search($this->input->get('vocabulary_search', TRUE));
        
        $this->load->view('admin/vocLiveSearch', $data);
    }
    
    /**
	 * Update Vocabulary Term
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function updateVocab(){
        
        //Upload the new vocabulary picture (if form is not empty)
        if(!$this->input->post('desc_pic'))
            $this->doUpload('desc_pic');
        
        if(!$this->input->post('voice_mp3'))
            $this->uploadVoice('voice_mp3');
        
        //Update the actual vocabulary term
        $this->Vocabulary_model->updateVocab();
        
        //redirect back to form
        echo '<script>parent.window.location.replace("/admin/vocabulary/update/'. $this->input->post('vocID') .'");</script>';
        
    }
    
    /*Upload vocabulary description picture*/
    public function doUpload($field_name) {
        
        $filesizeMax = 100000000;
		$filename = $_FILES["desc_pic"]["name"];
        $file_basename = substr($filename, 0, strripos($filename, '.')); // strip extention
        $file_ext = substr($filename, strripos($filename, '.')); // strip name
        $filesize = $_FILES["desc_pic"]["size"];
         
        if (($file_ext == ".jpeg" || $file_ext == ".JPEG" || $file_ext == ".jpg"|| $file_ext == ".png" ||
             $file_ext == ".PNG" || $file_ext == ".JPG")  &&  ($filesize < $filesizeMax)) {
            
            // rename file
            $newfilename = time().$filename.$file_ext;
 
            // file already exists error
            if (file_exists("assets/files/vocabulary/" . $newfilename)) {
                
                echo "You have already submitted this file.";
                return false;
            } else {
                
                move_uploaded_file($_FILES["desc_pic"]["tmp_name"], "assets/files/vocabulary/" . $newfilename);
                //echo "File uploaded successfully.";
            }
        } elseif (empty($file_basename)) {
            
            // file type error
            echo "Please select a file to upload.";
            return false;
        } else {
            
            // file selection error
            echo "Please ensure you're uploading JPG, JPEG, or PNG files.";
            unlink($_FILES["desc_pic"]["tmp_name"]);
            return false;
        }
            
            //Update the vocabulary term's desc_pic
            $this->Vocabulary_model->updateVocabPic('assets/files/vocabulary/'.$newfilename);
	}
    
    /*Upload vocabulary description picture*/
    public function uploadVoice($field_name) {
        
        $filesizeMax = 100000000;
		$filename = $_FILES["voice_mp3"]["name"];
        $file_basename = substr($filename, 0, strripos($filename, '.')); // strip extention
        $file_ext = substr($filename, strripos($filename, '.')); // strip name
        $filesize = $_FILES["voice_mp3"]["size"];
         
        if (($file_ext == ".mp3" || $file_ext == ".MP3") && ($filesize < $filesizeMax)) {
            
            // rename file
            $newfilename = time().$filename.$file_ext;
 
            // file already exists error
            if (file_exists("assets/files/vocabulary/sounds/" . $newfilename)) {
                
                echo "You have already submitted this file.";
                return false;
            } else {
                
                move_uploaded_file($_FILES["voice_mp3"]["tmp_name"], "assets/files/vocabulary/sounds/" . $newfilename);
                //echo "File uploaded successfully.";
            }
        } elseif (empty($file_basename)) {
            
            // file type error
            echo "Please select a file to upload.";
            return false;
        } else {
            
            // file selection error
            echo "Please ensure you're uploading JPG, JPEG, or PNG files.";
            unlink($_FILES["voice_mp3"]["tmp_name"]);
            return false;
        }
            
            //Update the vocabulary term's desc_pic
            $this->Vocabulary_model->updateVocabSound('assets/files/vocabulary/sounds/'.$newfilename);
	}

    
}

/* End of file videos.php */
/* Location: ./application/controllers/videos.php */