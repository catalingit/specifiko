<div class="featured-video-block videopage">

	<div class="video-wrap">
		<div id="videoplayer-1375864898"></div>
		<script src="http://eplayer.clipsyndicate.com/embed/player.js?auto_next=1&auto_start=1&cpt=1&div_id=videoplayer-1375864898&height=470&page_count=5&pf_id=1&show_title=0&va_id=4180175&width=550&windows=1" type="text/javascript"></script>
	</div>
	
	<div class="tab-wrap" id="transcript-wrap">
		
		<ul class="nav nav-tabs">
			<li class="active"><a href="#transcript" data-toggle="tab">Transcript</a></li>
			<li><a href="#vocabulary" data-toggle="tab">Vocabulary</a></li>
			<li><a href="#video-detail" data-toggle="tab">Video Details</a></li>
		</ul>
		
		<?php foreach($featVideo AS $videoInfo): ?>
			<div class="tab-content">
				
				<div class="tab-pane active" id="transcript">
					<p><?php echo $transcript; ?></p>
				</div>
				
				<div class="tab-pane" id="vocabulary">
					
					<?php
						//Loop through the video's vocabulary terms
						foreach($vocabulary AS $vTerms):
					?>
						<a href="javascript:showWordDetail('/video/worddetail/<?=$vTerms['id'] ?>')"><?=$vTerms['vtext'] ?></a>
					<?php endforeach; ?>
					
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
