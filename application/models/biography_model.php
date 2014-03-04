<?php

class Biography_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Load player's building placements */
    function getBios(){
    
        $query = $this->db->get('biography');
		return $query->result_array();
    }
    
    /* Load a specific video */
    function getBio($bipID){
    
        //$query = $this->db->query("SELECT * FROM resource WHERE id = '".$vidID."'");
        $query = $this->db->get_where('resource', array('id' => $vidID));

        return $query->row_array();
    }

}