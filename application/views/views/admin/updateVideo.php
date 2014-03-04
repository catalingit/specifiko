<div class="main">
    
    <script type="text/javascript" src="<?=serverAssets();?>filetree/jquery.easing.js"></script>
    <script type="text/javascript" src="<?=serverAssets();?>filetree/jqueryFileTree.js"></script>
    
	<style type="text/css" media="screen">
        #video_file,#thumbnail,#preview,#caption {
            width: 600px;
            height: 300px;
            border-top: solid 1px #BBB;
            border-left: solid 1px #BBB;
            border-bottom: solid 1px #FFF;
            border-right: solid 1px #FFF;
            background: #FFF;
            overflow: scroll;
            padding: 5px;
            display:none;
        }
    </style>
    
    <script language="javascript">
        var showvideo = false;
        var showthumb = false;
        var showpreview = false;
        var showcaption = false;
        
        $(function() {
            $('#Resource_video_file').click(function() {
                
                if(showvideo) {
                    $('#video_file').hide();
                    showvideo = false;
                    
                } else {
                    $('#video_file').show();
                    showvideo = true;
                }
            });
            
            $('#Resource_thumbnail_pic').click(function() {
                
                if(showthumb) {
                    $('#thumbnail').hide();
                    showthumb = false;
                    
                } else {
                    $('#thumbnail').show();
                    showthumb = true;
                }
            });
            
            $('#preview_pic').click(function() {
                
                if(showpreview) {
                    $('#preview').hide();
                    showpreview = false;
                    
                } else {
                    $('#preview').show();
                    showpreview = true;
                }
            });
            
            $('#caption_file').click(function() {
                
                if(showcaption) {
                    $('#caption').hide();
                    showcaption = false;
                    
                } else {
                    $('#caption').show();
                    showcaption = true;
                }
               });
        });
    </script>

    <h1>Update Video: <?=$video['title']?></h1>
    
    <div class="form">
    
        <form enctype="multipart/form-data" id="resource-form" action="/admin/video/update/id/<?=$video['id']?>" method="post">
        
            <p class="note">
                Fields with <span class="required">*</span> are required.
            </p>
        
            <div class="row">
                <label for="Resource_title" class="required">Title <span class="required">*</span></label>
                <input size="90" maxlength="255" name="title" id="title" type="text" value='<?=$video['title']?>' />
            </div>
        
            <div class="row">
                <label for="Resource_description">Description</label>
                
                <textarea rows="6" cols="90" name="description" id="description"><?=$video['description']?></textarea>
            </div>
        
            <div class="row">
                <label for="transcript" class="required">Transcript <span class="required">*</span></label>
                <textarea rows="30" cols="120" name="transcript" id="transcript"><?=$video['transcript']?></textarea>
            </div>
            
            <div class="row">
                <label for="video_type">Video Type</label>
                <input type="radio" name="video_type" id="video_type" value="File" <?php if($video['video_type'] == "File"): ?>checked="checked"<?php endif; ?>> Video File&nbsp;&nbsp;
                <input type="radio" name="video_type" id="video_type" value="Embed" <?php if($video['video_type'] == "Embed"): ?>checked="checked"<?php endif; ?>> Embedded Video	
            </div>
            
            <div class="row">
                <label for="video_file">Video File</label>
                <input size="90" maxlength="255" autocomplete="off" name="video_file" id="Resource_video_file" type="text" value="<?=$video['video_file']?>" />		
                <div id="video_file"></div>
        
                <script type="text/javascript">
                    //<![CDATA[
                    jQuery(function() {
                        jQuery('#video_file').fileTree({
                            root:'/',
                            script:'/admin/videofilebrowser',
                            folderEvent:'click',
                            expandSpeed:1000,
                            collapseSpeed:100,
                            multiFolder:true,
                            expandEasing:'easeOutBounce',
                            loadMessage:'File Browser Is Loading...'
                        }, function(f){
                            $("#Resource_video_file").val("assets/files/video" + f);
                            $("#video_file").hide();
                        });
                    });
                    //]]>>
                </script>
        
                <label id="status-message"></label>
            </div>
            
            <div class="row">
                <label for="Resource_embedded_code">Embedded Code</label>
                <textarea rows="6" cols="60" name="embedded_code" id="Resource_embedded_code"><?=$video['embedded_code']?></textarea>
                <label id="status-message"></label>
            </div>
            
            <div class="row">
                <label for="Resource_thumbnail_pic">Thumbnail Pic</label>
                <input size="90" maxlength="100" autocomplete="off" name="thumbnail_pic" id="Resource_thumbnail_pic" type="text" value="<?=$video['thumbnail_pic']?>" />
                <div id="thumbnail"></div>
        
                <script type="text/javascript">
                    //<![CDATA[
                    jQuery(function() {
                        jQuery('#thumbnail').fileTree({
                            root:'/',
                            script:'/admin/videofilebrowser',
                            folderEvent:'click',
                            expandSpeed:1000,
                            collapseSpeed:100,
                            multiFolder:true,
                            expandEasing:'easeOutBounce',
                            loadMessage:'File Browser Is Loading...'
                        }, function(f){
                            $("#Resource_thumbnail_pic").val("assets/files/video" + f);
                            $("#thumbnail").hide();
                        });
                    });
                    //]]>>
                </script>
            </div>
        
            <div class="row">
                <label for="Resource_preview_pic">Preview Pic</label>
                <input size="90" maxlength="200" autocomplete="off" name="preview_pic" id="preview_pic" type="text" value="<?=$video['preview_pic']?>" />
                <div id="preview"></div>
        
                <script type="text/javascript">
                    //<![CDATA[
                    jQuery(function() {
                        jQuery('#preview').fileTree({
                            root:'/',
                            script:'/admin/videofilebrowser',
                            folderEvent:'click',
                            expandSpeed:1000,
                            collapseSpeed:100,
                            multiFolder:true,
                            expandEasing:'easeOutBounce',
                            loadMessage:'File Browser Is Loading...'
                        }, function(f){
                            $("#preview_pic").val("assets/files/video" + f);
                            $("#preview").hide();
                        });
                    });
                    //]]>>
                </script>
            </div>
        
            <div class="row">
                <label for="Resource_caption_file">Caption File</label>
                <input size="90" maxlength="200" autocomplete="off" name="caption_file" id="caption_file" type="text" value="<?=$video['caption_file']?>" /><div id="caption"></div>
        
                <script type="text/javascript">
                    //<![CDATA[
                    jQuery(function() {
                        jQuery('#caption').fileTree({
                            root:'/',
                            script:'/admin/videofilebrowser',
                            folderEvent:'click',
                            expandSpeed:1000,
                            collapseSpeed:100,
                            multiFolder:true,
                            expandEasing:'easeOutBounce',
                            loadMessage:'File Browser Is Loading...'
                        }, function(f){
                            $("#caption_file").val("assets/files/video" + f);
                            $("#caption").hide();
                        });
                    });
                    //]]>>
                </script>
            </div>
        
            <div class="row">
                <label for="Resource_level">Level</label>
                
                <select name="Resource[level]" id="Resource_level">
                    <option value="1" <?php if($video['level'] == "1"):?>selected="selected"<?php endif;?>>Basic</option>
                    <option value="2" <?php if($video['level'] == "2"):?>selected="selected"<?php endif;?>>Intermediate</option>
                    <option value="3" <?php if($video['level'] == "3"):?>selected="selected"<?php endif;?>>Advanced</option>
                </select>
            </div>
        
            <div class="row">
                <label for="resource_year">Resource Year</label>
                
                <select name="resource_year" id="resource_year">
                    <option value="2013" <?php if($video['resource_year'] == "2013"):?>selected="selected"<?php endif;?>>2013</option>
                    <option value="2012" <?php if($video['resource_year'] == "2012"):?>selected="selected"<?php endif;?>>2012</option>
                    <option value="2011" <?php if($video['resource_year'] == "2011"):?>selected="selected"<?php endif;?>>2011</option>
                    <option value="2010" <?php if($video['resource_year'] == "2010"):?>selected="selected"<?php endif;?>>2010</option>
                    <option value="2009" <?php if($video['resource_year'] == "2009"):?>selected="selected"<?php endif;?>>2009</option>
                    <option value="2008" <?php if($video['resource_year'] == "2008"):?>selected="selected"<?php endif;?>>2008</option>
                    <option value="2007" <?php if($video['resource_year'] == "2007"):?>selected="selected"<?php endif;?>>2007</option>
                    <option value="2006" <?php if($video['resource_year'] == "2006"):?>selected="selected"<?php endif;?>>2006</option>
                    <option value="2005" <?php if($video['resource_year'] == "2005"):?>selected="selected"<?php endif;?>>2005</option>
                    <option value="2004" <?php if($video['resource_year'] == "2004"):?>selected="selected"<?php endif;?>>2004</option>
                    <option value="2003" <?php if($video['resource_year'] == "2003"):?>selected="selected"<?php endif;?>>2003</option>
                    <option value="2002" <?php if($video['resource_year'] == "2002"):?>selected="selected"<?php endif;?>>2002</option>
                    <option value="2001" <?php if($video['resource_year'] == "2001"):?>selected="selected"<?php endif;?>>2001</option>
                    <option value="2000" <?php if($video['resource_year'] == "2000"):?>selected="selected"<?php endif;?>>2000</option>
                </select>
            </div>
            
            <div class="row">
                <p><strong>Video Category</strong></p>
                
                <table class="items" cellspacing="10" cellpadding="10">
                    <tr>
                        <td>
                            <input type="checkbox" name='videocategory_1' value="FDA" >&nbsp;&nbsp;<strong>FDA</strong><br/>
                            <input type="checkbox" name='videocategory_88' value="2012" >&nbsp;&nbsp;2012&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_51' value="2011" >&nbsp;&nbsp;2011&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_52' value="2010" >&nbsp;&nbsp;2010&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_49' value="2009" >&nbsp;&nbsp;2009&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_53' value="2008" >&nbsp;&nbsp;2008&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_50' value="2007" >&nbsp;&nbsp;2007&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_54' value="2006-02" >&nbsp;&nbsp;2006-02&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_66' value="New Drug Approvals" >&nbsp;&nbsp;New Drug Approvals&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name='videocategory_2' value="Obama" >&nbsp;&nbsp;<strong>Obama</strong><br/>
                            <input type="checkbox" name='videocategory_74' value="Weekly Address" >&nbsp;&nbsp;Weekly Address&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_72' value="Speeches" >&nbsp;&nbsp;Speeches&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_68' value="Press Conferences" >&nbsp;&nbsp;Press Conferences&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_69' value="News Reports" >&nbsp;&nbsp;News Reports&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_73' value="Town Hall" >&nbsp;&nbsp;Town Hall&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_71' value="Discussions" >&nbsp;&nbsp;Discussions&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_70' value="Analysis" >&nbsp;&nbsp;Analysis&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name='videocategory_76' value="VOA" >&nbsp;&nbsp;<strong>VOA</strong><br/>
                            <input type="checkbox" name='videocategory_80' value="2012" >&nbsp;&nbsp;2012&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_79' value="2011" >&nbsp;&nbsp;2011&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_78' value="2010" >&nbsp;&nbsp;2010&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_81' value="2009" >&nbsp;&nbsp;2009&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_89' value="2008" >&nbsp;&nbsp;2008&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_90' value="2007" >&nbsp;&nbsp;2007&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_91' value="2006-02" >&nbsp;&nbsp;2006-02&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name='videocategory_31' value="Companies" checked="checked">&nbsp;&nbsp;<strong>Companies</strong><br/>
                            <input type="checkbox" name='videocategory_32' value="AstraZeneca" >&nbsp;&nbsp;AstraZeneca&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_34' value="Lilly" >&nbsp;&nbsp;Lilly&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_35' value="GSK" checked="checked">&nbsp;&nbsp;GSK&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_37' value="Merck" >&nbsp;&nbsp;Merck&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_38' value="Novartis" >&nbsp;&nbsp;Novartis&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_39' value="Pfizer" >&nbsp;&nbsp;Pfizer&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_41' value="Roche" >&nbsp;&nbsp;Roche&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_43' value="Sanofi" >&nbsp;&nbsp;Sanofi&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_44' value="Others" checked="checked">&nbsp;&nbsp;Others&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name='videocategory_20' value="Diseases" >&nbsp;&nbsp;<strong>Diseases</strong><br/>
                            <input type="checkbox" name='videocategory_23' value="Cancer" >&nbsp;&nbsp;Cancer&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_24' value="Diabetes" >&nbsp;&nbsp;Diabetes&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_25' value="Cardio" >&nbsp;&nbsp;Cardio&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_29' value="Mental Health" >&nbsp;&nbsp;Mental Health&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_46' value="Renal" >&nbsp;&nbsp;Renal&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_26' value="HIV/AIDS" >&nbsp;&nbsp;HIV/AIDS&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_28' value="Pediatric" >&nbsp;&nbsp;Pediatric&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_101' value="Pulmonary" >&nbsp;&nbsp;Pulmonary&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_64' value="Others" >&nbsp;&nbsp;Others&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name='videocategory_92' value="Market News" checked="checked">&nbsp;&nbsp;<strong>Market News</strong><br/>
                            <input type="checkbox" name='videocategory_93' value="2012" >&nbsp;&nbsp;2012&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_94' value="2011" >&nbsp;&nbsp;2011&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_95' value="2010" checked="checked">&nbsp;&nbsp;2010&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_96' value="2009" >&nbsp;&nbsp;2009&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_97' value="2008" >&nbsp;&nbsp;2008&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name='videocategory_3' value="Drug Safety" >&nbsp;&nbsp;<strong>Drug Safety</strong><br/>
                            <input type="checkbox" name='videocategory_4' value="Approvals" >&nbsp;&nbsp;Approvals&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_5' value="Counterfeits" >&nbsp;&nbsp;Counterfeits&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_9' value="Withdrawals" >&nbsp;&nbsp;Withdrawals&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_6' value="Labels" >&nbsp;&nbsp;Labels&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_47' value="Warnings" >&nbsp;&nbsp;Warnings&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_61' value="Others" >&nbsp;&nbsp;Others&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name='videocategory_11' value="Device Safety" >&nbsp;&nbsp;<strong>Device Safety</strong><br/>
                            <input type="checkbox" name='videocategory_98' value="Approvals" >&nbsp;&nbsp;Approvals&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_17' value="Recalls" >&nbsp;&nbsp;Recalls&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_62' value="Warnings" >&nbsp;&nbsp;Warnings&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_99' value="Counterfeits" >&nbsp;&nbsp;Counterfeits&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name='videocategory_75' value="Others" >&nbsp;&nbsp;Others&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="row">
                <strong>Actors</strong>
                <table class="items" cellspacing="10" cellpadding="10">
                    
                    <?php
                        $sNum = 1;
                        //Loop through the speakers
                        foreach($speakers AS $speaker):
                    ?>
                        <tr>
                            <td><?=$sNum?>.</td>
                            <td>Role: <input type="text" name="role_1" size="50" maxlength="100" value="<?=$speaker['subject']?>"></td>
                            <td>Name: <input type="text" name="name_1" size="50" maxlength="100" value="<?=$speaker['name_cache']?>"></td>
                        </tr>
                    <?php
                        $sNum++;
                        endforeach;
                    ?>
                </table>
            </div>
        
            <div class="row buttons">
                <input type="submit" value="Update Video" />
            </div>
        
			<input type="hidden" name="vidID" value="<?=$video['id']?>">
        </form>
    </div>
</div>
