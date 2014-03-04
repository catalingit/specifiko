<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- CSS -->
	<link href="<?=serverAssets();?>css/admin/bootstrap.css" rel="stylesheet">
    <link href="<?=serverAssets();?>css/admin/style.css" rel="stylesheet">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?=serverAssets();?>bootstrap/js/bootstrap.js"></script>
    
    <!-- include libraries (jquery, bootstrap, font-awesome) -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">
    
    <title>Specifiko - Admin</title>
</head>

<body>
    
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">

        <a class="brand" href="/admin">Specifiko</a>
        
        <div class="nav-collapse collapse">
            <ul class="nav">
                <li <?php if($this->uri->segment(2) == "videos"): ?>class="active"<?php endif; ?>><a href="/admin/videos"><i class="icon-film icon-white"></i> Videos</a></li>
                <li <?php if($this->uri->segment(2) == "users"): ?>class="active"<?php endif; ?>><a href="/admin/users"><i class="icon-user"></i> Users</a></li>
                <li <?php if($this->uri->segment(2) == "terms"): ?>class="active"<?php endif; ?>><a href="/admin/terms"><i class="icon-font"></i> Terms</a></li>
                <li <?php if($this->uri->segment(2) == "vocabulary"): ?>class="active"<?php endif; ?>><a href="/admin/vocabulary"><i class="icon-volume-down"></i> Vocabulary</a></li>
                <li <?php if($this->uri->segment(2) == "importvocabulary"): ?>class="active"<?php endif; ?>><a href="/admin/vocabulary/importvocabulary"><i class="icon-volume-up"></i> Import Vocabulary</a></li>
                <li <?php if($this->uri->segment(2) == "biography"): ?>class="active"<?php endif; ?>><a href="/admin/biography"><i class="icon-list-alt"></i> Biography</a></li>
                <li <?php if($this->uri->segment(2) == "cms"): ?>class="active"<?php endif; ?>><a href="/admin/cms"><i class="icon-file"></i> CMS</a></li>
            </ul>
          
            <div class="pull-right span3">
                Welcome, <?= $this->User_model->myUsername(); ?> | <a href="../logout">Logout</a>
            </div>
        </div><!--/.nav-collapse -->
        
    </div>
  </div>