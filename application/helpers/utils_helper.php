<?php

/*Title-to-SEO
 *Converts all non-alphanumeric characters
 *into SEO safe characters.
 */
function seoTitle($title){
		
	$str = strtolower($title);
	$str = trim($str, '-');
	return preg_replace('/[^a-zA-Z0-9_]/', '-', $str);
}

function serverAssets(){
	
	echo 'http://www.dev.specifiko.com/assets/';
}

/*Level Converter
 *Converts a numeric level to a text level descriptor
*/
function videoLevel($level){
	
	if($level == 1)
		$levelName = "Basic";
		
	if($level == 2)
		$levelName = "Intermediate";
		
	if($level == 3)
		$levelName = "Advanced";
	
	return $levelName;
}

/*Language convert
 *Converts a short-text language into it's full name
 */
function languageLong($language){
	
	if($language == "en")
		return "English";
	
	if($language == "ja")
		return "Japanese";
	
	if($language == "zh")
		return "Chinese";
}

/*Language convert
 *Converts a short-text language into it's full name
 */
function languageShort($language){
	
	if($language == "English")
		return "en";
	
	if($language == "Japanese")
		return "ja";
	
	if($language == "Chinese")
		return "zh";
}

/*Country convert
 *Converts a short-text country into it's short name
 */
function countryShort($country){
	
	if($country == "United States")
		return "US";
	
	if($country == "Japan")
		return "JP";
	
	if($country == "China")
		return "CN";
}

/*Country convert
 *Converts a short-text country into it's full name
 */
function countryLong($country){
	
	if($country == "US")
		return "United States";
	
	if($country == "JP")
		return "Japan";
	
	if($country == "CN")
		return "China";
}

/* Year Drop down
* @description: list dropdown of years
*/
function yearList(){
		
		$i=2000;
		while($i<=2013):
				echo '<option value="'.$i.'">'.$i.'</option>';
			$i++;
		endwhile;
	}