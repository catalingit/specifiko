<?php

class ResourceVocab_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Load a specific video's vocabulary terms */
    function getVocabulary($vidID){
        
        //Get the the video's vocabulary resources
        //return $this->db->query("SELECT * FROM resource_voc WHERE resource_id = '".$vidID."'");
    
        $this->db->select('*');
        $this->db->where('resource_id', $vidID);
        $query = $this->db->get('resource_voc');
        return $query->result_array();
    }
    
     /* Load a specific vocabulary */
    function getVocabularyWord($vocID){
        
        $query = $this->db->query("SELECT * FROM resource_voc WHERE id = '".$vocID."'");
        return $query->row();
    }
    
    /*Add word to user favorite list*/
    function addVocabulary($vocID){
        
        //Get the word from the DB
        $query = $this->db->query("SELECT * FROM resource_voc WHERE id = '".$vocID."'");
        
        if ($query->num_rows() > 0){
            $row = $query->row_array();
            
            $this->user_id = $this->session->userdata('user_id');
            $this->vid = $row['id'];
        
            $this->db->insert('my_vocabulary', $this);
        
            return true;
        }
    }

}