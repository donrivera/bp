<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?=$title?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?=base_url()?>public/stylesheets/base.css">
	<link rel="stylesheet" href="<?=base_url()?>public/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?=base_url()?>public/stylesheets/layout.css">
	<link rel="stylesheet" href="<?=base_url()?>public/stylesheets/menu.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?=base_url()?>public/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?=base_url()?>public/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>public/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>public/images/apple-touch-icon-114x114.png">

</head>
<body>
	<!-- Primary Page Layout
	================================================== -->
	<!-- Delete everything in this .container and get started on your own site! -->
	<div class="container">
		<header id="header" class="body">
		<br/>
		<h1>
			<a href="<?=base_url()?>admin">BP Dues and Attendance Monitoring</a>
		</h1>
		<nav>
			<ul>
				<li class="active"><a href="<?=base_url()?>admin">Home</a></li>
				<li class="active"><a href="<?=base_url()?>parameter">Config</a></li>
				<li><a href="<?=base_url()?>member">Paddlers</a></li>
				<li><a href="<?=base_url()?>report">Reports</a></li>
				<li><a href="<?=base_url()?>account">Accounts</a></li>
				
			</ul>
		</nav>
		</header><!-- /#banner -->
		<div class="sixteen columns">
			<?$session=$this->session->userdata('logged_in');?><?="Hello,&nbsp;<b>".$session['fname']."</b>";?>
			<br/>
			<a href="<?=base_url()?>admin/logout">Log Out</a>
			<hr />
		</div>
		
		<div>
			<?=$body?>
		</div>
		<!--
		<div class="one-third column">
			<h3>Three Core Principles</h3>
			<p>Skeleton is built on three core principles:</p>
			<ul class="square">
				<li><strong>A Responsive Grid Down To Mobile</strong>: Elegant scaling from a browser to tablets to mobile.</li>
				<li><strong>Fast to Start</strong>: It's a tool for rapid development with best practices</li>
				<li><strong>Style Agnostic</strong>: It provides the most basic, beautiful styles, but is meant to be overwritten.</li>
			</ul>
		</div>
		<div class="one-third column">
			<h3>Docs &amp; Support</h3>
			<p>The easiest way to really get started with Skeleton is to check out the full docs and info at <a href="http://www.getskeleton.com">www.getskeleton.com.</a>. Skeleton is also open-source and has a <a href="https://github.com/dhgamache/skeleton">project on git</a>, so check that out if you want to report bugs or create a pull request. If you have any questions, thoughts, concerns or feedback, please don't hesitate to email me at <a href="mailto:hi@getskeleton.com">hi@getskeleton.com</a>.</p>
		</div>
		-->
		<br/><br/><br/><br/><br/>
	</div><!-- container -->
		<footer class="footer"><center>Copyright © 2013 Philippine Blue Phoenix Dragonboat Club Inc.</center></footer>

<!-- End Document
================================================== -->
</body>
</html>