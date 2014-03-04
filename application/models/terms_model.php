<?php

class Terms_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Get all the terms */
    function getTerms(){
    
        $query = $this->db->get('term_data');
		return $query->result_array();
    }
	
	/* Get the term (single) */
    function getTerm($termID){
        
        $voc = $this->db->escape_str($termID);
        
        $query = $this->db->query("SELECT * FROM term_data WHERE tid = '".$termID."'");
        return $query->row(); 
    }

	/**
	 * Update Term
	 *
	 * @return bool
	 * @author Seirim
	 **/
    function update(){
        
        $tID = $this->input->post('termID');
        $this->tname = $this->input->post('tname');
        $this->tname_zh = $this->input->post('tname_zh');
        $this->tname_jp = $this->input->post('tname_jp');
        
        //Everything check out okay
        $this->db->where('tid', $tID);
        $this->db->update('term_data', $this);
        
        echo 'You have updated the term.';
    }
}