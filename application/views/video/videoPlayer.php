<div class="featured-video-block videopage">

<?php foreach($video AS $videoInfo): ?>
	<div class="video-wrap">
		<object>
			<embed src="/assets/js/BilingozPlayer.swf" bgcolor="#ffffff"
				width="470" height="320" name="SampleCaptioning" align="middle"
				loop="false"
				quality="high"
				allowScriptAccess="sameDomain"
				FlashVars="file=http://www.specifiko.com/<?=$videoInfo['video_file']?>&caption=http://www.specifiko.com/<?=$videoInfo['caption_file']?>&thumbnil=http://www.specifiko.com/<?=$videoInfo['thumbnail_pic']?>"
				type="application/x-shockwave-flash"
				pluginspage="http://www.adobe.com/go/getflashplayer">
			</embed>
		</object>
	</div>
	
	<div class="tab-wrap" id="transcript-wrap">
		
		<ul class="nav nav-tabs">
			<li class="active"><a href="#transcript" data-toggle="tab">Transcript</a></li>
			<li><a href="#vocabulary" data-toggle="tab">Vocabulary</a></li>
			<li><a href="#video-detail" data-toggle="tab">Video Details</a></li>
		</ul>
		
			<div class="tab-content">
				
				<div class="tab-pane active" id="transcript">
					<p><?php echo $transcript; ?></p>
				</div>
				
				<div class="tab-pane" id="vocabulary" style="height:200px !important; overflow-y: scroll; overflow-x: no-display;">
					
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
				<div class="tab-pane" id="video-detail">
					<p>
						<strong>Title:</strong> <br />
						<?=$videoInfo['title'] ?>
					</p>
						
					<p style="width:40%">
						<strong>Description:</strong> <br />
						<?=$videoInfo['description'] ?>
					</p>
				</div>
			</div>
		<?php endforeach; ?>
		
	</div>
	
</div>