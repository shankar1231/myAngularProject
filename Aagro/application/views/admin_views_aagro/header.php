<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Dashboard</title>
	<link href="<?= base_url();?>admin_assects_aagro/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url();?>admin_assects_aagro/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url();?>admin_assects_aagro/css/datepicker3.css" rel="stylesheet">
	<link href="<?= base_url();?>admin_assects_aagro/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Aa</span>gro</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-tasks"></em>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box">
									<div class="message-body">
										<a href="<?= base_url();?>change-passowrd"><strong><i class="fa fa-cog" aria-hidden="true"></i> &nbsp; Settings</strong> </a>
								</div>
							</li>
							<li class="divider"></li>
								<li>
								<div class="dropdown-messages-box">
									<div class="message-body">
										<a href="<?= base_url();?>Login/logout"><strong><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Logout</strong> </a>
								</div>
							</li>
							
						</ul>
					</li>
					
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<!--<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>-->
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?= base64_decode($this->session->userdata('admin_role'))?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<!--<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>-->
		
		<ul class="nav menu">
			<li class="<?= ($this->uri->segment(1)=='dashboard')?'active':''?>"><a href="<?= base_url();?>dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			
			<li class="<?= ($this->uri->segment(1)=='business-list'||$this->uri->segment(1)=='business-add')?'active':''?>"><a href="<?= base_url();?>business-list"><em class="fa fa-server">&nbsp;</em> Services List</a></li>
			<li class="<?= ($this->uri->segment(1)=='slider-about-list'||$this->uri->segment(1)=='slider-about-list')?'active':''?>"><a href="<?= base_url();?>slider-about-list"><em class="fa fa-futbol-o">&nbsp;</em>slider-about-List</a></li>
			<li class="<?= ($this->uri->segment(1)=='slider-list'||$this->uri->segment(1)=='slider-list')?'active':''?>"><a href="<?= base_url();?>slider-list"><em class="fa fa-picture-o">&nbsp;</em>Sliders-List</a></li>
			
			<li class="<?= ($this->uri->segment(1)=='about-list'||$this->uri->segment(1)=='about-list')?'active':''?>"><a href="<?= base_url();?>about-list"><em class="fa fa-info-circle">&nbsp;</em>About-List</a></li>
			
			
			
				
				<li class="mt">
                      <a class="<?= ($this->uri->segment(1)=='contact-branch-details-list')?'active':''?>" href="<?= base_url();?>contact-branch-details-list">
                          <i class="fa fa-location-arrow"></i>
                          <span>Branch details list</span>
                      </a>
                </li>
				
				<li class="mt">
                      <a class="<?= ($this->uri->segment(1)=='contactpage-list')?'active':''?>" href="<?= base_url();?>contactpage-list">
                          <i class="fa fa-contao"></i>
                          <span>Enquries List</span>
                      </a>
                </li>
			
		</ul>
	</div><!--/.sidebar-->
	