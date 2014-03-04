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
	 		for ($i=0; $i<sizeof($videos); $i+=2) { 
	 	?>
	        <li>
	        	<div style="display: block; height: 140px;">
	        		<a href="" class="featured-videos-thumb" data-vid="<?=$videos[$i]['id']?>"><img src="http://www.specifiko.com/<?=$videos[$i]['thumbnail_pic']?>" style="width: 113px !important;" alt="" /></a>
	        		<p><?=$videos[$i]['title']?></p>	        		
	        	</div>
	        	<div style="display: block;">
	        		<a href="" class="featured-videos-thumb" data-vid="<?=$videos[$i]['id']?>"><img src="http://www.specifiko.com/<?=$videos[$i+1]['thumbnail_pic']?>" style="width: 113px !important;" alt="" /></a>
	        		<p><?=$videos[$i+1]['title']?></p>	        		
	        	</div>
	        </li>    
	    <?php 
			}
	    ?>
	</ul>
</div>