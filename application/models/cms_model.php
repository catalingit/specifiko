<?php

class Cms_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Load all the pages for the Content */
    function getAllPages(){
    
        $query = $this->db->get('pages');
		return $query->result_array();
    }
    
    /* Load a specific page */
    function getPage($pageID){
    
        $query = $this->db->get_where('pages', array('id' => $pageID));
        return $query->row_array();
    }
	
	/* Load a specific page's content */
    function getSectionContent($pageName, $sectionName){
    
        $query = $this->db->get_where('page_sections', array('page_name' => $pageName,
															'section_name' => $sectionName));
        return $query->row_array();
    }
	
	/* Load a specific page's content */
    function getSectionContentCMS($id){
    
        $query = $this->db->get_where('page_sections', array('id' => $id));
        return $query->row_array();
    }

    /**
	 * Update Page
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function update() {
        
        $id = $this->input->post('pageid');
        $data = array(
               'name' => $this->input->post('name'),
               'bodytxt' => $this->input->post('bodytxt'),
			   'ch_bodytxt' => $this->input->post('ch_bodytxt'),
			   'jp_bodytxt' => $this->input->post('jp_bodytxt')
			);

        $this->db->where('id', $id);
        $this->db->update('pages', $data); 
        
        echo 'You have updated the page.<br/>';
    }
	
	/**
	 * Update Page Section
	 *
	 * @return bool
	 * @author Seirim
	 **/
    public function updateSection() {
        
        $id = $this->input->post('sectionid');
        $data = array(
               'content' => $this->input->post('content'),
			   'ch_content' => $this->input->post('ch_content'),
			   'jp_content' => $this->input->post('jp_content')
            );

        $this->db->where('id', $id);
        $this->db->update('page_sections', $data); 
        
        echo 'You have updated the page section.';
    }
}