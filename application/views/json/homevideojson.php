<?php
    //Initiate the JSON Array for the video thumbnails
    $json = '{"items": [';

        //Comma counter
        $i=0;
        
        foreach($videos AS $jVideo):
        
            //Ensure we do not list a comma on the last Array() object
            if($i != 0){
                $json .=',';
            }
        
            //Build the JSON array data
            $json .= ' {
                "src":"http://www.specifiko.com/'.$jVideo['thumbnail_pic'].'",
                "title":"'.$jVideo['title'].'",
                "id":"'.$jVideo['id'].'"
            }';
            
            //Our comma counter
            $i++;
        endforeach;
        
        $json .= ']}';
        
    //Return our JSON array for usage
    echo $json;

?>