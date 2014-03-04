<?php

class Listening_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Load all of the lessons (Video Lesson) */
    function getLessons($vid){
    
        $query = $this->db->get('dictation');
		return $query->result_array();
    }
    
    function getRandVideos($limit = 28){

        $this->db->order_by('id', 'RANDOM');
        $this->db->limit($limit);
        $query = $this->db->get('resource');
        return $query->result_array();
    }
    
    /* Load a specific video's lessons (dictations) */
    function getVideoDictations($vidID){
    
        $query = $this->db->get_where('dictation', array('video_id' => $vidID));

        return $query->row_array();
    }
    
    function getDictation($dictID){
    
        $query = $this->db->get_where('dictation', array('id' => $dictID));

        return $query->row_array();
    }
    
    /* Get related Videos */
    function getRelatedResources() {

		$sql = "SELECT id,title,thumbnail_pic,level,resource_year,post_date FROM `resource` WHERE id !=" . $this->id . " AND id in (SELECT resource_id FROM `term_resource` WHERE tid in (SELECT tid FROM `term_resource` WHERE resource_id = " . $this->id .")) ORDER BY RAND(), post_date DESC LIMIT 7";
		
		//echo $sql;exit;
		$dbCommand = self::$db->createCommand ( $sql );
		$data = $dbCommand->queryAll ();
		
		return new CArrayDataProvider ( $data, array ('id' => 'video-list', 'pagination' => array ('pageSize' => 7 ), 'keyField' => 'id' ) );
	}
    
    /*Update the view count for a video*/
    function updateViewCount($vidID) {

        $this->db->query("UPDATE resource SET view_count = view_count + 1 WHERE id = '".$vidID."'");
	}
    
    /**
	 * Update the Video
	 *
	 * @return bool
	 * @author Seirim
	 **/
    function updateVideo(){
        
        $vidID = $this->input->post('vidID');
        $this->vocabulary = $this->input->post('vocabulary');
        $this->explain_zh = $this->input->post('explain_zh');
        $this->explain_jp = $this->input->post('explain_jp');
        
        //Everything check out okay
        $this->db->where('vid', $vocID);
        $this->db->update('vocabulary', $this);
        
        echo 'You have updated the Vocabulary term.';
    }

}