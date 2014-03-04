<div class="wrapper">
<div class="main">
	
	<script type="text/javascript">
        $(document).ready(function(){
            $("#DictationDiv").colorbox({iframe:true, innerWidth:950, innerHeight:550});
            $("#VocabularyDiv").colorbox({iframe:true, innerWidth:950, innerHeight:550});
        });

        var showvideo = false;
        $(function() {
        $(".wrapper span").tooltip({
            track: true,
            delay: 1000,
            showURL: false,
            fixPNG: true,
            bodyHandler: function() {
                return $($(this).attr("href")).html(); 
            }, 
            top: -15,
            left: 5
        });
        $(".toggletranscript").click(function(){
            var to = $(".hidetranscript").css("display");
			
            if(to == 'none') {
				
                $(".hidetranscript").css("display","");
                $(".toggletranscript").text("Show");
            } else {
				
                $(".hidetranscript").css("display","none");
                $(".toggletranscript").text("Hide[X]");
            }
        });
        $(".showtranscript").click(function(){
            $(".hidetranscript").css("display","none");
            $(".toggletranscript").text("Hide[X]");
        });
        
        $('#information').tabs();
        
        if (document.getElementById('show-word-detail') != null)
		
            $("#show-word-detail").dialog({
				
                autoOpen: false, modal: true, height: 250, theme:false,width: 420, draggable: false, resizable: false, closeOnEscape: false,
                dialogClass: "word-dialog",
                open: function (event, ui) {
					
                    if($.browser.msie && showvideo) {
						
                        $("#video-preview").show();
                        $("#video-player").hide();
                    }
					
                    $('.word-dialog').css({ "z-index": "2500" });
                    $('.word-audio, .word-phoneme').hover(function () {
						
                        var assetURL = $(this).children('span').html();
                        wordPronunciationTimeout = setTimeout("$('#jPlayerContainer').jPlayer('setFile','" + assetURL + "').jPlayer('play');$('#jPlayerContainer').stop();", 400);
                    }, function () {
						
                        clearTimeout(wordPronunciationTimeout);
                        $("#jPlayerContainer").stop();
                    });
					
                    var scrollTop = parseInt($('.word-dialog').css('top')) - parseInt($(window).scrollTop());
                },
				
                close: function () {
					
                    if($.browser.msie && showvideo) {
                        $("#video-preview").hide();
                        $("#video-player").show();
                    }
                    
                }
            });
        if (document.getElementById('show-bio-detail') != null)
            $("#show-bio-detail").dialog({
                autoOpen: false, modal: true, height: 400, theme:false,width: 680, draggable: false, resizable: false, closeOnEscape: false,
                dialogClass: "bio-dialog",
                open: function (event, ui) {
                    if($.browser.msie && showvideo)
                    {
                        $("#video-preview").show();
                        $("#video-player").hide();
                    }
                    $('.bio-dialog').css({ "z-index": "2500" });
                    var scrollTop = parseInt($('.bio-dialog').css('top')) - parseInt($(window).scrollTop());
                },
                close: function () {
					
                    if($.browser.msie && showvideo) {
                        $("#video-preview").hide();
                        $("#video-player").show();
                    }
                }
            });
        });
        
        function track(progress){
            $.get("/videos/track?vid=1286");
        }
        
        function addtomylist() {
            $.get("/videos/addtomylist?vid=1286");
            $("#btnadd").html("<strong>Added to your watch list.</strong>");
            $("#btnadd").attr("disabled",true);
        }
        
        function addvocabulary(vid) {
            $.get("/video/addvocabulary/" + vid);
            $(".add").html("Added to your vocabulary list.");
        }
        
        function showWordDetail(url) {
            $.get(url, function (data) {
                if (data) {
                    $("#show-word-detail").html(data);
                    $("#show-word-detail").dialog('open');
                }
            });
        }
        
        function showBiography(url) {
            $.get(url, function (data) {
                if (data) {
                    $("#show-bio-detail").html(data);
                    $("#show-bio-detail").dialog('open');
                }
            });
        }
		
		$(function() {
			$(".vocTip").tooltip();
		});
</script>
    </script>
    
<div class="information" id="information">
    
    <ul>
        <li><a href="#transcript">Video Transcript</a></li>
        <li><a href="#vocabulary">Vocabulary</a></li>
        <li><a href="#detail">Video Details</a></li>
    </ul>
    
    <div class="transcript" id="transcript">
		
        <div class="wrapper">
			<?php echo $transcript; ?>
        </div>
		
	</div>
    
    <div class="transcript"  id="vocabulary">
        <div class="wrapper">
            
            <?php
            
                //Loop through the video's vocabulary terms
                foreach($vocabulary AS $vTerms):
            ?>
                <a href="javascript:showWordDetail('/video/worddetail/<?=$vTerms['id']?>')"><?=$vTerms['vtext']?></a><br/>
            <?php endforeach; ?>
            
        </div>
    </div>
    
    <div class="transcript" id="detail">
        <div class="wrapper">
            <p>
                <strong>Title:</strong> <br />
                <?=$video['title']?>
            </p>
            <p>
                <strong>Description:</strong> <br />
                <?=$video['description']?>
            </p>
            
            <p>
                <strong>Speaker #1:</strong> <?=$speaker1['name_cache']?>
            </p>
            
            <p>
                <strong>Speaker #2:</strong> <?=$speaker2['name_cache']?>
            </p>
        </div>
    </div>
  </div>
    <div class="video">
  	    <div class="pic" id='video-preview' style="background: url('http://www.bilingoz.com/<?php echo $video['preview_pic']; ?>') center center no-repeat;">
            <a href="javascript:playvideo();"/></a>
        </div>
    
        <div id="video-player" style="display:none;">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
			id="SampleCaptioning" width="440" height="320" codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
				<param name="movie" value="/assets/js/BilingozPlayer.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="flashVars" value="file=/assets/files/video/2006/FDA/FDA_200607_53/FDA_200607_53_3/FDA_200607_53_3.flv&caption=/assets/files/video/2006/FDA/FDA_200607_53/FDA_200607_53_3/FDA_200607_53_3.xml&thumbnil=/assets/files/video/2006/FDA/FDA_200607_53/FDA_200607_53_3/FDA_200607_53_3_p.png" />
				
				<embed src="/assets/js/BilingozPlayer.swf" bgcolor="#ffffff"
					width="440" height="320" name="SampleCaptioning" align="middle"
					play="true"
					loop="false"
					quality="high"
					allowScriptAccess="sameDomain"
					FlashVars="file=/assets/files/video/2006/FDA/FDA_200607_53/FDA_200607_53_3/FDA_200607_53_3.flv&caption=/assets/files/video/2006/FDA/FDA_200607_53/FDA_200607_53_3/FDA_200607_53_3.xml"
					type="application/x-shockwave-flash"
					pluginspage="http://www.adobe.com/go/getflashplayer">
				</embed>
			</object>
			
		</div>
        <p style="padding-top:10px;" id="btnadd"><a href="javascript:addtomylist();" class="button" >Add to Favorites</a>
		<!-- <a href="" class="button" id="DictationDiv"></a>-->
		<!--<a href="" class="button" id="VocabularyDiv"></a>--> 
</div>

	<script language="javascript">
		function playvideo() {
			showvideo = true;
			$("#video-preview").hide();
			$("#video-player").show();
		}
		
		function videoend() {
			showvideo = false;
			$("#video-preview").show();
			$("#video-player").hide();
		}
	</script>
	
	<!-- Related Videos -->
    <div class="related">
		
		<div class="video-list">
		
			<div id="yw0" class="list-view">
				
				<div class="items">
					
					<?php foreach($randVideos AS $rvid): ?>
						<div class="item">
							<div class="video"><a href="/video/<?=$rvid['id']?>/<?= seoTitle($rvid['title']); ?>"><img src="http://www.bilingoz.com/<?=$rvid['thumbnail_pic']?>"  /></a></div>
							<div class="title"><a title="New Warnings on Norpramin (FDA)" href="/video/<?=$rvid['id']?>/<?= seoTitle($rvid['title']); ?>"><?=$rvid['title']?></a></div>
							<div class="difficulty"><span>Level: </span><?= videoLevel($rvid['level']); ?></div>
						</div>
					<?php endforeach; ?>
				</div>
			
				<div class="keys" style="display:none" title="/videos/player/1286/fluoride-rinse-contamination-(fda)">
					<span>1116</span><span>1185</span><span>1979</span><span>1678</span><span>1846</span><span>1902</span><span>1720</span>
				</div>
			
			</div>
		
		</div>
	</div>
	
	<div id="show-word-detail" style="display:none;"></div>
	<div id="show-bio-detail" style="display:none;"></div>

</div>
</div>
</div>