<!-- jCarousel -->
<script src="assets/js/jquery.jcarousel.min.js"></script>

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});

</script>

<div class="photo-wrap jcarousel-wrapper">
	<ul id="mycarousel" class="jcarousel-skin-tango">
	 	<?php
	 		for ($i=0; $i<sizeof($randomVideos); $i+=2) { 
	 	?>
	        <li>
	        	<div style="display: block; height: 140px;">
	        		<a href="/video/<?=$randomVideos[$i]['id']?>" class="featured-videos-thumb"><img src="http://www.specifiko.com/<?=$randomVideos[$i]['thumbnail_pic']?>" style="width: 113px !important;" alt="" /></a>
	        		<p><?=$randomVideos[$i]['title']?></p>	        		
	        	</div>
	        	<div style="display: block;">
	        		<a href="/video/<?=$randomVideos[$i]['id']?>" class="featured-videos-thumb"><img src="http://www.specifiko.com/<?=$randomVideos[$i+1]['thumbnail_pic']?>" style="width: 113px !important;" alt="" /></a>
	        		<p><?=$randomVideos[$i+1]['title']?></p>	        		
	        	</div>
	        </li>    
	    <?php 
			}
	    ?>
	</ul>
</div>