<!DOCTYPE html>
<html lang="en">
<head>
<title>FAUZ AGRO INDUSTRY PRIVATE LIMITED</title>
<meta charset="utf-8">
<meta name="viewport" content="">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="<?= base_url();?>assects/css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?= base_url();?>assects/css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="<?= base_url();?>assects/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?= base_url();?>assects/css/camera.css" type="text/css" media="screen">


<script type="text/javascript" src="<?= base_url();?>assects/js/jquery.js"></script>  
<script type="text/javascript" src="<?= base_url();?>assects/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?= base_url();?>assects/js/superfish.js"></script>

<script type="text/javascript" src="<?= base_url();?>assects/js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="<?= base_url();?>assects/js/camera.js"></script>
<script type="text/javascript" src="<?= base_url();?>assects/js/jquery.mobile.customized.min.js"></script>
<script>
$(document).ready(function() {
	/////// icons
	$(".social li").find("a").css({opacity:0.6});
	$(".social li a").hover(function() {
		$(this).stop().animate({opacity:1 }, 400, 'easeOutExpo');		    
	},function(){
	    $(this).stop().animate({opacity:0.6 }, 400, 'easeOutExpo' );		   
	}); 

	// camera
	$('#camera_wrap').camera({
		//thumbnails: true
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		height: '37%',
		hover: false,
		loader: 'none',
		navigation: false,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '300px'
	});

	

}); //
$(window).load(function() {
	//

}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<?php $data=$this->db->select('*')->order_by('id', 'desc')->get('add_branchdetails')->row();?>
<body>
<div id="main">

<header>
<div class="logo_wrapper"><a href="<?= base_url();?>" class="logo logo1">FAUZ AGRO</a></div>	
<div class="top1">
<div class="container">
<div class="row">
<div class="span12">
	<div class="top1_inner clearfix">
		<div class="phone1">Need Help? Call us: <span>+91 <?= $data->mob_num;?></span></div>
			<div class="phone1">&nbsp; Email: <span><?= $data->first_email;?></span></div>
		<!--<div class="phone2 clearfix">
			<div class="txt1">Follow us:</div>
			<div class="social_wrapper">
				<ul class="social clearfix">
				    <li><a href="#"><img src="images/social_ic1.png"></a></li>
				    <li><a href="#"><img src="images/social_ic2.png"></a></li>
				    <li><a href="#"><img src="images/social_ic3.png"></a></li>			    
				</ul>
			</div>
		</div>-->
	</div>
</div>	
</div>	
</div>
</div>	
<div class="top2">
<div class="container">
<div class="row">
<div class="span12">
<div class="top2_inner">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix">
				<li class="<?= ($this->uri->segment(1)=='')?'active':''?>"><a href="<?= base_url();?>">Home</a></li>				
				<li class="<?= ($this->uri->segment(1)=='about')?'active':''?>"><a href="<?= base_url();?>about">Company </a></li>
<li><a href="">Products </a></li>				
				<!--<li class="sub-menu sub-menu-1"><a href="index-2.html">Products<em></em></a>
					<ul>
						<li><a href="index-2.html">About us</a></li>
						<li class="sub-menu sub-menu-2"><a href="index-1.html">History<em></em></a>
							<ul>
								<li><a href="index-2.html">lorem ipsum dolor</a></li>
								<li><a href="index-2.html">sit amet</a></li>
								<li><a href="index-2.html">adipiscing elit</a></li>
								<li><a href="index-2.html">nunc suscipit</a></li>
								<li><a href="404.html">404 page not found</a></li>
							</ul>
						</li>
						<li class="sub-menu sub-menu-2"><a href="index-2.html">Our team<em></em></a>
							<ul>
								<li><a href="index-2.html">lorem ipsum dolor</a></li>
								<li><a href="index-2.html">sit amet</a></li>
								<li><a href="index-2.html">adipiscing elit</a></li>
								<li><a href="index-2.html">nunc suscipit</a></li>									
							</ul>
						</li>
						<li><a href="index-1.html">Media</a></li>						
					</ul>						
				</li>-->
				
				
				<li class="sub-menu sub-menu-1"><a href="javascript:void(0)">Services<em></em></a>
					<ul>
					
					
					<li><a href="<?= base_url();?>all_business_list">All Business List</a></li>
					<li><a href="<?= base_url();?>parboiled-ricemill">Parboiled Ricemill</a></li>
					<li><a href="<?= base_url();?>bio-chemicals">Bio Chemicals</a></li>
					<li><a href="<?= base_url();?>agro-form">Agro Form</a></li>
					<li><a href="<?= base_url();?>trading">Trading</a></li>
					<li><a href="<?= base_url();?>ginning-mill">Ginning Mill</a></li>
												
					</ul>						
				</li>
				
					<li class="sub-menu sub-menu-1"><a href="javascript:void(0)">More<em></em></a>
					<ul>
					
					
					<li><a href="<?= base_url();?>all_business_list">Media</a></li>
					<li><a href="<?= base_url();?>parboiled-ricemill">Gallery</a></li>
					
												
					</ul>						
				</li>
				
				
				<li class="<?= ($this->uri->segment(1)=='contact')?'active':''?>"><a href="<?= base_url();?>contact">Contacts </a></li>
				
			</ul>
		</div>
	</div>
</div>
</div>
</div>	
</div>	
</div>
</div>
</header>	