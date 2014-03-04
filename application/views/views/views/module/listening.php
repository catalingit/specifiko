<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>Specifiko - Learning</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="http://seir.im/listening_module/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="http://seir.im/listening_module/css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- chosen -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/plugins/chosen/chosen.css">
	<!-- select2 -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="http://seir.im/listening_module/css/themes.css">
        
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="http://seir.im/listening_module/js/jquery.min.js"></script>

	
	<!-- Nice Scroll -->
	<script src="http://seir.im/listening_module/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="http://seir.im/listening_module/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="http://seir.im/listening_module/js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<script src="http://seir.im/listening_module/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="http://seir.im/listening_module/js/bootstrap.min.js"></script>
	<!-- vmap -->
	<script src="http://seir.im/listening_module/js/plugins/vmap/jquery.vmap.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/vmap/jquery.vmap.world.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/vmap/jquery.vmap.sampledata.js"></script>
	<!-- Bootbox -->
	<script src="http://seir.im/listening_module/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Flot -->
	<script src="http://seir.im/listening_module/js/plugins/flot/jquery.flot.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="http://seir.im/listening_module/js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- imagesLoaded -->
	<script src="http://seir.im/listening_module/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- PageGuide -->
	<script src="http://seir.im/listening_module/js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- FullCalendar -->
	<script src="http://seir.im/listening_module/js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<!-- Chosen -->
	<script src="http://seir.im/listening_module/js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- select2 -->
	<script src="http://seir.im/listening_module/js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<script src="http://seir.im/listening_module/js/plugins/icheck/jquery.icheck.min.js"></script>

	<!-- Theme framework -->
	<script src="http://seir.im/listening_module/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="http://seir.im/listening_module/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="http://seir.im/listening_module/js/demonstration.min.js"></script>
	
	<!--[if lte IE 9]>
		<script src="http://seir.im/listening_module/js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
    
    <!-- Inline edit -->
    <script src="../assets/js/instantedit.js"></script>
    
    <script>
        /*Simple Audio Player*/
        function playSound(el,soundfile) {
            if (el.mp3) {
                if(el.mp3.paused) el.mp3.play();
                else el.mp3.pause();
            } else {
                el.mp3 = new Audio(soundfile);
                el.mp3.play();
            }
        }
    </script>
    
    <style type="text/css">
        .textwords {
            font-family: sans-serif !important;
            font-size: 24px !important;
            line-height: 30px !important;
        }
        
        .type-over {
            position: relative !important;
            color: #ccc !important;
            display: inline-block !important;
            padding: 2px 0 0 1px;
            margin: 0 9px 0 0;
        }
        
        .type-over-input {
            position: absolute !important;
            left: 0 !important;
            top: 0 !important;
            width: 100% !important;
            height: 100% !important;
            background-color: transparent !important;
            font-family: inherit !important;
            font-size: inherit !important;
            border: none !important;
            margin: 0 !important;
            padding: 0 !important;
            padding-left: inherit !important;
            padding-right: inherit !important;
        }
        
        .type-over-input:focus {

        }
    </style>
    
    <script src="../assets/js/jquery.lettering.js"></script>
    <script type="text/javascript" src="<?=serverAssets();?>js/ghostText.js"></script>
    <script>
        $(document).ready( function() {
            $('.textwords').typeOverText();
            
            //Lettering.js - Individual text control
            $(".textwords").lettering()
            .children("span").css({
                'border-bottom':'1px solid #ccc',
                'margin-right':'3px',
            });
        });
    </script>

</head>

<body>
	
	<div id="navigation">
		<div id="top_menubar" class="navbar navbar-inverse">
			<div class="nav-collapse collapse">
			  <ul class="nav navbar-nav">
				<li class=""><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="#support">Support</a></li>
				<li><a href="#faq">FAQ</a></li>
				<li><a href="#english">English</a></li>
				<li><a href="#english">中文</a></li>
				<li><a href="#english">日本語</a></li>
			  </ul>          
			</div><!--/.nav-collapse -->
		</div>
		<div class="container-fluid">
			<a href="#" id="brand">specifiko</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
			<ul class='main-nav'>
				<li>
					<a href="index.html">
						<span>Dashboard</span>
					</a>
				</li>
				<li class='active'>
					<a href="#">
						<span>Listening</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Reading</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Writing</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Questions & Answers</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Vocabulary</span>
					</a>
				</li>
			</ul>
			<div class="user">
				<ul class="icon-nav">
					<li class='dropdown'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-envelope"></i><span class="label label-lightred">4</span></a>
						<ul class="dropdown-menu pull-right message-ul">
							<li>
								<a href="#">
									<img src="http://seir.im/listening_module/img/demo/user-1.jpg" alt="">
									<div class="details">
										<div class="name">Jane Doe</div>
										<div class="message">
											Lorem ipsum Commodo quis nisi ...
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="http://seir.im/listening_module/img/demo/user-2.jpg" alt="">
									<div class="details">
										<div class="name">John Doedoe</div>
										<div class="message">
											Ut ad laboris est anim ut ...
										</div>
									</div>
									<div class="count">
										<i class="icon-comment"></i>
										<span>3</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="http://seir.im/listening_module/img/demo/user-3.jpg" alt="">
									<div class="details">
										<div class="name">Bob Doe</div>
										<div class="message">
											Excepteur Duis magna dolor!
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="components-messages.html" class='more-messages'>Go to Message center <i class="icon-arrow-right"></i></a>
							</li>
						</ul>
					</li>
					<li class="dropdown sett">
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-cog"></i></a>
						<ul class="dropdown-menu pull-right theme-settings">
							<li>
								<span>Layout-width</span>
								<div class="version-toggle">
									<a href="#" class='set-fixed'>Fixed</a>
									<a href="#" class="active set-fluid">Fluid</a>
								</div>
							</li>
							<li>
								<span>Topbar</span>
								<div class="topbar-toggle">
									<a href="#" class='set-topbar-fixed'>Fixed</a>
									<a href="#" class="active set-topbar-default">Default</a>
								</div>
							</li>
							<li>
								<span>Sidebar</span>
								<div class="sidebar-toggle">
									<a href="#" class='set-sidebar-fixed'>Fixed</a>
									<a href="#" class="active set-sidebar-default">Default</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe <img src="http://seir.im/listening_module/img/demo/user-avatar.jpg" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-userprofile.html">Edit profile</a>
						</li>
						<li>
							<a href="#">Account settings</a>
						</li>
						<li>
							<a href="more-login.html">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
		<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here:">
					<button type="submit"><i class="icon-search"></i></button>
				</div>
			</form>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Instructions</span></a>
				</div>
				<ul class="subnav-menu">
				</ul>
			</div>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Lessons</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">Beginner</a>
					</li>
					<li>
						<a href="#">Intermediate</a>
					</li>
					<li>
						<a href="#">Advanced</a>
					</li>
					<li>
						<a href="#">Progress:</a>
						<img id="chart3" src="http://seir.im/listening_module/img/chart3.png">
						<img id="chart6" src="http://seir.im/listening_module/img/chart6.png">
					</li>
				</ul>
			</div>
		</div>
        
        <!-- ####################################################################### -->
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Lesson 1 - <?=$video['title']?></h1>
					</div>
					<div class="pull-right">
						<ul class="minitiles">
							<li class='prev'>
								<a href="#"></a>
							</li>
							<li class='test'>
								<a href="#"></a>
							</li>
							<li class='skip'>
								<a href="#"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="index.html">Learn</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="index.html">Listening</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="index.html">Beginner</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="index.html">Pharmaceutical</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="index.html">Lesson 1 - <?=$video['title']?></a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#"><i class="icon-remove"></i></a>
					</div>
				</div>
                
				<div class="row-fluid">
                    
					<div class="span8">
                        
						<div class="box box-color box-bordered">
                            
							<div class="box-title">
								<h3>
									<i class="icon-headphones"></i>
									Listening - Enter the words spelled correctly
								</h3>
							</div>
                            
							<div class="box-content">
								<div class="statistic-big" style="padding:0 0 25px 0;">
                                    
									<div class="actions">
                                        
                                        <!-- MP3 Trigger -->
                                        <span onclick="playSound(this, '../<?=$dictation['file']?>');">
                                            <a href="#"  name="Bottom-1" id="Bottom-1"><i class="icon-play"></i> Play Audio</a>
                                        </span>
									</div>
                                    
									<div class="content" style="width:100% !important; height: 100px; word-wrap: normal;">
                                        
                                        <?php
                                        
                                            //Build our form to encapsulate our sentence text boxes
                                            $attributes = array('id' => 'check-listening-form', 'method' => 'post');
                                            echo form_open('/listening/submit', $attributes);
                                        
                                                //Explode out the dictation (sentence)
                                                $words = explode(" ", $dictation['sentence']);
                                                
                                                //Loop through all the words for the sentence
                                                foreach($words AS $word):
                                                    
                                                    echo '<div class="textwords">'.$word.'</div>';
                                                endforeach;
                                            
                                            //Close the form
                                            echo form_close();
                                        ?>

									</div>
								</div>
                                
								<a href="#" class="submitBtn">Submit</a>
								<a href="#" class="addFavorite"><i class="icon-heart"></i>  Add to Favorites</a>
							</div>
                            
						</div>
					</div>
					<div class="span4">
						<div class="box box-color lightred box-bordered">
							<div class="box-title">
								<h3>
									Video for this lesson
								</h3>
							</div>
							<div class="box-content">
								<div class="video-wrap">
									<div id="videoplayer-1375864898">
										<object width="320" height="270" id="videoplayer-1375864898-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
											<param value="http://eplayer-static.clipsyndicate.com/flash/osmf/CriticalPlayer.swf?cb=082&amp;wpid=0" name="movie">
											<param value="true" name="allowfullscreen">
											<param value="window" name="wmode">
											<param value="home=eplayer.clipsyndicate.com&amp;pl_id=8178&amp;page_count=5&amp;windows=1&amp;tags=&amp;token=mK0kswDAAoFqJX4jHi%2FxYQl%2B%2BKOC2Az9je3CjOH6oj0%3D&amp;aspect_ratio=3x2&amp;show_title=0&amp;va_id=4180175&amp;pf_id=1&amp;referer=http%3A%2F%2Fseir.im%2Fbz%2F&amp;st_id=0&amp;auto_next=1&amp;cpt=1&amp;volume=8" name="flashvars">
											<param value="always" name="allowscriptaccess">
											<embed width="320" height="270" flashvars="home=eplayer.clipsyndicate.com&amp;pl_id=8178&amp;page_count=5&amp;windows=1&amp;tags=&amp;token=mK0kswDAAoFqJX4jHi%2FxYQl%2B%2BKOC2Az9je3CjOH6oj0%3D&amp;aspect_ratio=3x2&amp;show_title=0&amp;va_id=4180175&amp;pf_id=1&amp;referer=http%3A%2F%2Fseir.im%2Fbz%2F&amp;st_id=0&amp;auto_next=1&amp;cpt=1&amp;volume=8" allowfullscreen="true" wmode="window" allowscriptaccess="always" type="application/x-shockwave-flash" src="http://eplayer-static.clipsyndicate.com/flash/osmf/CriticalPlayer.swf?cb=082&amp;wpid=0">
										</object>
									</div>
<!--									<script type="text/javascript" src="http://eplayer.clipsyndicate.com/embed/player.js?auto_next=1&amp;auto_start=1&amp;cpt=1&amp;div_id=videoplayer-1375864898&amp;height=270&amp;page_count=5&amp;pf_id=1&amp;show_title=0&amp;va_id=4180175&amp;width=320&amp;windows=1">
									</script>
-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>

