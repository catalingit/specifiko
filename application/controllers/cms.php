<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Cms extends CI_Controller {
    
    function __construct() {
        
		parent::__construct();
	}

    //Display a specific page's content
    public function content($pageID) {
    
        //Get the request page's data
        $data['page'] = $this->Cms_model->getPage($pageID);
        
		//HTML Assetts and CSS
        $this->load->view('ui/header');
        $this->load->view('page', $data);
		$this->load->view('ui/adminFooter');
	}
	
	/*Section Content
	 *Get the content for a specific page's section
	 */
	public function sectionContent($pageName, $sectionName){
		
		return $this->Cms_model->getSectionContent($pageName, $sectionName);
		
	}
	
    //Display page editor
	public function updateView() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['page'] = $this->Cms_model->getPage($this->uri->segment(4));
        
        $this->load->view('admin/cmsUpdate', $data);
            
		$this->load->view('ui/adminFooter');
	}
	
	//Display page sectional editor
	public function updateSectionView() {

		//HTML Assetts and CSS
        $this->load->view('ui/adminHeader');
        
        //Pass the video's data to the view
        $data['section'] = $this->Cms_model->getSectionContentCMS($this->uri->segment(3));
        
        $this->load->view('admin/cmsUpdateSection', $data);
            
		$this->load->view('ui/adminFooter');
	}
	
	//Update the CMS page
	public function update() {
	
		$this->Cms_model->update();
	}
	
	//Update the CMS page
	public function updatePageSection() {
	
		$this->Cms_model->updateSection();
	}

}

/* End of file videos.php */
/* Location: ./application/controllers/videos.php */