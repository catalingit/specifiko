<div class="featured-video-block">

	<div class="tab-wrap" id="transcript-wrap" style="border: 1px solid grey; border-radius: 5px;">
		
		<ul class="nav nav-tabs" style="margin: 5px;">
			<li class="active"><a href="#transcript" data-toggle="tab">Transcript</a></li>
			<li><a href="#vocabulary" data-toggle="tab">Vocabulary</a></li>
			<li><a href="#video-detail" data-toggle="tab">Video Details</a></li>
		</ul>
		
		<?php foreach($featVideo AS $videoInfo): ?>
			<div class="tab-content" style="margin: 5px;">
				
				<div class="tab-pane active" id="transcript" style="height: 225px;">
					<p><?php echo $transcript; ?></p>
				</div>
				
				<div class="tab-pane" id="vocabulary">
					
					<?php
						//Loop through the video's vocabulary terms
						foreach($vocabulary AS $vTerms):
					?>
						<a href="javascript:showWordDetail('/video/worddetail/<?=$vTerms['id']?>')"><?=$vTerms['vtext']?></a>
					<?php endforeach; ?>
					
				</div>
				
				<!-- Video Details -->
				<div class="tab-pane" id="video-detail">
					<p>
						<strong>Title:</strong> <br />
						<?=$videoInfo['title']?>
					</p>
						
					<p style="width:40%">
						<strong>Description:</strong> <br />
						<?=$videoInfo['description']?>
					</p>
				</div>
			</div>
		
	</div>
	
	<div class="video-wrap">
		
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
			id="SampleCaptioning" width="300" height="270"
			codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
			<param name="movie" value="/assets/js/BilingozPlayer.swf" />
			<param name="quality" value="high" />
			<param name="play" value="false">
			<param name="bgcolor" value="#ffffff" />
			<param name="allowScriptAccess" value="sameDomain" />
			<param name="flashVars" value="file=http://www.specifiko.com/<?=$videoInfo['video_file']?>&caption=http://www.specifiko.com/<?=$videoInfo['caption_file']?>&thumbnil=http://www.specifiko.com/<?=$videoInfo['thumbnail_pic']?>" />
			
			<embed src="/assets/js/BilingozPlayer.swf" bgcolor="#ffffff"
				width="300" height="270" name="SampleCaptioning" align="middle"
				loop="false"
				quality="high"
				allowScriptAccess="sameDomain"
				FlashVars="file=http://www.specifiko.com/<?=$videoInfo['video_file']?>&caption=http://www.specifiko.com/<?=$videoInfo['caption_file']?>&thumbnil=http://www.specifiko.com/<?=$videoInfo['thumbnail_pic']?>"
				type="application/x-shockwave-flash"
				pluginspage="http://www.adobe.com/go/getflashplayer">
			</embed>
		</object>
		
		<!-- <div id="videoplayer-1375864898"></div>
		<script src="http://eplayer.clipsyndicate.com/embed/player.js?auto_next=1&auto_start=1&cpt=1&div_id=videoplayer-1375864898&height=270&page_count=5&pf_id=1&show_title=0&va_id=4180175&width=320&windows=1" type="text/javascript"></script>
		-->
	</div>
	<?php endforeach; ?>
</div>
