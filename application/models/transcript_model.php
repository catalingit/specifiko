<?php

class Transcript_model extends CI_Model {

    function _construct(){
        
        // Call the Model constructor
        parent::_construct();
    }
    
    /* Load a specific video */
    function getTranscript($vidID){
	
		$query = $this->db->query("SELECT transcript FROM resource WHERE id = '".$vidID."' LIMIT 1");
        
        if ($query->num_rows() > 0){
			
            $row = $query->row_array();
            return $row['transcript'];
        }
    }
    
	/*Filter Transcript
	 *Searches for matching words from Vocabulary table and
	 *replaces them with links to modals
	 */
	function filterTranscript($vidID){
		
		$transcript = $this->Transcript_model->getTranscript($vidID);
		$vocabulary = $this->Vocabulary_model->getVocabluaries($vidID);
		
		$searchArr = array();
		$replaceArr = array();
		
		//Are they logged in?
		
		$logIn = "<img src='/assets/files/vocabulary/process_warning.gif'><br/> <em>Please register to show the vocabulary description.</em>";
		
		//Loop through all the words
		foreach ($vocabulary as $vol) {
			
			$searchArr[] = $vol['vocabulary'];
			$replaceArr[] = '<a href="#" class="vocPop" rel="popover" data-trigger="hover" title="Vocabulary" data-content="中文:<br>'. str_replace("'", "", $vol['explain_zh']) .'<hr> 日本語:<br/>'. str_replace("'", "", $vol['explain_jp']) .'">'. $vol['vocabulary'] .'</a>';
		}
		
		//Run the deep replace function
		return $this->str_replace_deep($searchArr, $replaceArr, $this->speakerFormat($transcript));
	}
	
	/*Speaker Formating
	 *Gets speaker's and then places proper spacing in their names
	 */
	function speakerFormat($transcript){
		
		$initials = array('AR:', 'MB:', 'CP:', 'SS:', 'DV:', 'LJ:', 'AE:', 'BP:', 'SM:', 'SH:', 'BO:', 'N:', 'N/C:',
						  'RL:', 'EM:', 'JS:');
		$format   = array('<br/><b>AR:</b>', '<br/><b>MB:</b>', '<br/><b>CP:</b>', '<br/><b>SS:</b>',
						  '<br/><b>DV:/<b>', '<br/><b>LJ:/<b>', '<br/><b>AE:</b>', '<br/><b>BP:</b>',
						  '<br/><b>SM:</b>', '<br/><b>SH:</b>', '<br/><b>BO:</b>', '<br/><b>N:</b>',
						  '<br/><b>N/C:</b>', '<br/><b>RL:</b>', '<br/><b>EM:</b>', '<br/><b>JS:</b>');
		$text    = $transcript;
		return str_replace($initials, $format, $text);
		
	}
	
	/*THis function is a deep replace
	 *We can easily loop through words and replace them
	 */
	function str_replace_deep($search, $replace, $subject){
		
		if (is_array($subject)) {
				
			foreach($subject as &$oneSubject)
				$oneSubject = str_replace_deep($search, $replace, $oneSubject);
					
			unset($oneSubject);
				
			return $subject;
			
		} else {
				
			return str_replace($search, $replace, $subject);
		}
	}

}