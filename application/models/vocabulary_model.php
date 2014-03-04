<?php

class Vocabulary_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Search for vocabulary terms that match a given key word */
    function search($term){
        
        $this->db->like('vtext', $term);
        $query = $this->db->get('resource_voc');
        return $query->result_array();
    }
    
    /* Get all vocabulary terms */
    function allVocabulary(){
        
        //$query = $this->db->get('vocabulary');
        $query = $this->db->query("SELECT * FROM vocabulary");
		return $query->row(); 
    }
    
    function getVocabulary($vocID){
        
        $voc = $this->db->escape_str($vocID);
        
        $query = $this->db->query("SELECT * FROM vocabulary WHERE vid = '".$vocID."'");
        return $query->row(); 
    }
    
    /* Get all vocabulary terms */
    function vocabularyTerms(){
        
        //$this->db->cache_on();
        $query = $this->db->get('vocabulary', 200);
		return $query->result_array();
    }
    
    function getVocabluaries($vidID) {

		$query = $this->db->query("SELECT v.*,
                c.id, c.explain_jp AS current_jp,
                c.explain_zh AS current_zh,
                c.vtext FROM resource_voc c,
                vocabulary v
                WHERE c.vid = v.vid
                AND c.resource_id = '" . $vidID . "'
                ORDER BY v.vocabulary");
		
		return $query->result_array();
	}
    
    /**
	 * Update Vocabulary Term
	 *
	 * @return bool
	 * @author Seirim
	 **/
    function updateVocab(){
        
        $vocID = $this->input->post('vocID');
        $this->vocabulary = $this->input->post('vocabulary');
        $this->explain_zh = $this->input->post('explain_zh');
        $this->explain_jp = $this->input->post('explain_jp');
        
        //Everything check out okay
        $this->db->where('vid', $vocID);
        $this->db->update('vocabulary', $this);
        
        echo 'You have updated the Vocabulary term.';
    }

    /*Update Desc_Pic for vocabulary term*/    
    function updateVocabPic($newPhoto){
        
        $vocID = $this->input->post('vocID');
        $this->desc_pic = $newPhoto;
        
        //Everything check out okay
        $this->db->where('vid', $vocID);
        $this->db->update('vocabulary', $this);
    }
    
    /*Update voice_mp3 for vocabulary term (MP3)*/    
    function updateVocabSound($newSound){
        
        $vocID = $this->input->post('vocID');
        $this->voice_mp3 = $newSound;
        
        //Everything check out okay
        $this->db->where('vid', $vocID);
        $this->db->update('vocabulary', $this);
    }

}