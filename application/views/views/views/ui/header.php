<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>Specifiko</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/bootstrap.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?=serverAssets();?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="<?=serverAssets();?>css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- chosen -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/plugins/chosen/chosen.css">
	<!-- select2 -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?=serverAssets();?>css/themes.css">

    <link rel="stylesheet" href="<?=serverAssets();?>css/main.css">
    <link rel="stylesheet" href="<?=serverAssets();?>css/jquery.jscrollpane.css">

	<!-- jQuery -->
	<script src="<?=serverAssets();?>js/jquery.min.js"></script>
	
	
	<!-- Nice Scroll -->
	<!--<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>-->
	<!-- jQuery UI -->
	<script src="<?=serverAssets();?>js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="<?=serverAssets();?>js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<!--<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>-->
	<!-- Bootstrap -->
	<script src="<?=serverAssets();?>js/bootstrap.min.js"></script>
	<!-- vmap -->
	<script src="<?=serverAssets();?>js/plugins/vmap/jquery.vmap.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/vmap/jquery.vmap.world.js"></script>
	<script src="<?=serverAssets();?>js/plugins/vmap/jquery.vmap.sampledata.js"></script>
	<!-- Bootbox -->
	<script src="<?=serverAssets();?>js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Flot -->
	<script src="<?=serverAssets();?>js/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?=serverAssets();?>js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- imagesLoaded -->
	<script src="<?=serverAssets();?>js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- PageGuide -->
	<script src="<?=serverAssets();?>js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- FullCalendar -->
	<script src="<?=serverAssets();?>js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<!-- Chosen -->
	<script src="<?=serverAssets();?>js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- select2 -->
	<script src="<?=serverAssets();?>js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<script src="<?=serverAssets();?>js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- fontawesome -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
	<!-- Theme framework -->
	<script src="<?=serverAssets();?>js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="<?=serverAssets();?>js/application.js"></script>
	<!-- Just for demonstration -->
	<script src="<?=serverAssets();?>js/demonstration.min.js"></script>
	<!-- jQuery Scrolling Content -->
    <script src="<?=serverAssets();?>js/jquery.jscrollpane.js"></script>
	<!-- jQuery Scrolling Content -->
    <script src="<?=serverAssets();?>js/jquery.jcarousel.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=serverAssets();?>css/jcarousel.ajax.css">

    <script type="text/javascript" src="//use.typekit.net/vfi8zhn.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	    
    <script type="text/javascript" id="sourcecode">
        $(function()
        {
            $('.tab-content .tab-pane').jScrollPane({showArrows: true});
        });
    </script>
	<!--[if lte IE 9]>
		<script src="<?=serverAssets();?>js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<!--<link rel="shortcut icon" href="img/favicon.ico" /> -->
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
	
	<script>
		$('.vocPop').popover({html: true, trigger: 'hover', placement: 'bottom'})
	</script>

</head>

<body>

<?php
    /*Top Menu
        *Load the top menu & Search
    */
    $this->load->view('ui/topMenu');
?>