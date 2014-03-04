<?php

class ResourceBio_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Load a specific video */
    function getSpeaker($vidID, $speakerNum){
        
        //Get the speaker based on their speaker number
        $this->db->select('id, subject, name_cache');
        $this->db->where('subject', 'Speaker #'.$speakerNum); 
        $query = $this->db->get('resource_bio');

        return $query->row_array();
    }
    
     /* Get Video's Speakers */
    function getVideoSpeakers($vidID){
        
        //Get the speaker based on their speaker number
        $this->db->select('id, subject, name_cache, bio_id');
        $this->db->where('resource_id', $vidID); 
        $query = $this->db->get('resource_bio');

        return $query->result_array();
    }

}