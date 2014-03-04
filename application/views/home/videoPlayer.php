<div class="featured-video-block">

	<div class="tab-wrap" id="transcript-wrap">
		
		<ul class="nav nav-tabs">
			<li class="active"><a href="#transcript" data-toggle="tab">Transcript</a></li>
			<li><a href="#vocabulary" data-toggle="tab">Vocabulary</a></li>
			<li><a href="#video-detail" data-toggle="tab">Video Details</a></li>
		</ul>
		
		<?php foreach($featVideo AS $videoInfo): ?>
			<div class="tab-content">
				
				<div class="tab-pane active" id="transcript" style="height:244px !important; overflow-y: scroll; overflow-x: no-display;">
					<p><?php echo $transcript; ?></p>
				</div>
				
				<div class="tab-pane" id="vocabulary" style="width:360px; height:244px !important; overflow-y: scroll; overflow-x: no-display;">
					
					<table>
						<?php
							//Count our Columns
							$count = 0;
							
							foreach ($vocabulary AS $vTerms):
								
								if($count % 2 == 0) echo '<tr>';
								
								echo '<td width="45%"> <a href="/video/worddetail/'.$vTerms['id'].'" data-target="#vocabularyModal" role="button" data-toggle="modal">'.$vTerms['vtext'].'</a> </td>';
								
								$count = $count + 1;
								
								if($count % 2 == 0) echo '</tr>';
								
							endforeach;
						?>
					</table>
					
				</div>
				
				<!-- Video Details -->
				<div class="tab-pane" id="video-detail" style="width:360px; height:244px !important; overflow-y: scroll; overflow-x: no-display;">
					<p>
						<strong>Title:</strong> <br />
						<?=$videoInfo['title']?>
					</p>
						
					<p>
						<strong>Description:</strong> <br />
						<?=$videoInfo['description']?>
					</p>
				</div>
			</div>
		
	</div>
	
	<div class="video-wrap">
		
		<object>
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
		
		<a href="/video/<?=$videoInfo['id']?>" class="offset1">Full Video View</a>
	</div>

	<?php endforeach; ?>
</div>
