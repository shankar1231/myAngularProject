
<div id="slider" class="clearfix">
<div id="camera_wrap">
	<!--<div data-src="images/slide1.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">A satisfied customer </div>
			<div class="txt2">is the best business strategy of all.</div>			
		</div>    
	</div>-->
	
	<?php $slider_data_get=$this->db->select('*')->order_by('id', 'desc')->where('add_slider_contact_details','Slider Images')->get('add_sliderimages')->result();?>
		
		<?php
		foreach($slider_data_get as $data)
		{
		?>
	<div data-src="<?= base_url();?>admin_assects_aagro/uploads/slider_images/<?= $data->slider_image;?>"  alt="<?= $data->slider_image;?>">
		<div class="camera_caption fadeIn">
			<div class="txt1"><?= $data->slider_img_title;?></div>
			<div class="txt2"><?= $data->slider_img_desc;?></div>			
		</div>     
	</div>
	<?php
			}
			?>
	<!--		
	<div data-src="<?= base_url();?>assects/images/slide3.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">A satisfied customer </div>
			<div class="txt2">is the best business strategy of all.</div>			
		</div>     
	</div>
	<div data-src="<?= base_url();?>assects/images/slide4.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">A satisfied customer </div>
			<div class="txt2">is the best business strategy of all.</div>			
		</div>     
	</div>
-->	
	
</div>	
</div>

<div id="content">
<div id="content2">

<div id="inner">
<div class="banners">
<div class="container">
<div class="row">
<div class="span4 banner banner1">
	<div class="txt1">Premium products</div>
	<figure><img src="<?= base_url();?>assects/images/banner1.jpg" alt=""></figure>
	<div class="txt2">Lorem ipsum dolor sit amet conse.</div>
	<div class="txt3">Tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</div>
	<a href="#" class="button0">more</a>
</div>
<div class="span4 banner banner2">
	<div class="txt1">Eco solutions</div>
	<figure><img src="<?= base_url();?>assects/images/banner2.jpg" alt=""></figure>
	<div class="txt2">Lorem ipsum dolor sit amet conse.</div>
	<div class="txt3">Tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</div>
	<a href="#" class="button0">more</a>
</div>
<div class="span4 banner banner3">
	<div class="txt1">Equipment</div>
	<figure><img src="<?= base_url();?>assects/images/banner3.jpg" alt=""></figure>
	<div class="txt2">Lorem ipsum dolor sit amet conse.</div>
	<div class="txt3">Tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</div>
	<a href="#" class="button0">more</a>
</div>	
</div>	
</div>	
</div>
<?php $aboutdetails_data=$this->db->select('*')->order_by('id', 'desc')->where('add_slider_contact_details','About Deatails')->get('add_sliderimages')->result();?>
   
<div id="inner2">
	<div class="container">
		<div class="row">
			<div class="span8">
				
				<h1 class="home">Welcome!<br><span>WE ARE GLAD TO SEE YOU ON OUR webSITE</span></h1>

				
				<?php
			foreach($aboutdetails_data as $data)
			{
				?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h4>
					<?= $data->slider_img_title;?>
					</h4>
					<p style="text-align:justify">
					<?= $data->slider_img_desc;?>
					</p>
                </div>
				<?php
			}
				?>
				
				
				<a href="#" class="button1">Read more about us</a>

				<div class="line1"></div>

				<h2 class="home">New generation of farming</h2>

				<div class="thumb1">
					<div class="thumbnail clearfix">
						<figure class="img-polaroid"><img src="<?= base_url();?>assects/images/home01.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit.
							</h4>
							<p>
								amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit.
							</p>
							<a href="#" class="button1">Details</a>
						</div>
					</div>
				</div>
				<div class="thumb1">
					<div class="thumbnail clearfix">
						<figure class="img-polaroid"><img src="<?= base_url();?>assects/images/home02.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit.
							</h4>
							<p>
								amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit.
							</p>
							<a href="#" class="button1">Details</a>
						</div>
					</div>
				</div>




			</div>
			<div class="span4">
				
				<h3 class="home">NEWS<br><span>Latest news and events</span></h3>

				<div class="thumb2">
					<div class="thumbnail clearfix">
						<figure class=""><img src="<?= base_url();?>assects/images/home03.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								<a href="#">Lorem ipsum dolor</a>
							</h4>
							<p>
								Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#">...</a>
							</p>							
						</div>
					</div>
				</div>
				<div class="thumb2">
					<div class="thumbnail clearfix">
						<figure class=""><img src="<?= base_url();?>assects/images/home04.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								<a href="#">Maecenas sit</a>
							</h4>
							<p>
								Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#">...</a>
							</p>							
						</div>
					</div>
				</div>
				<div class="thumb2">
					<div class="thumbnail clearfix">
						<figure class=""><img src="<?= base_url();?>assects/images/home05.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								<a href="#">Vestibulum vel</a>
							</h4>
							<p>
								Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#">...</a>
							</p>							
						</div>
					</div>
				</div>
				<div class="text-right"><a href="#" class="button1">More news</a></div>

				<div class="line1"></div>

				<h3>What we offer</h3>

				<div class="accordion" id="accordion1">
					<div class="accordion-group">
					    <div class="accordion-heading">
					        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
					        	Mauris venenatis porttitor
					        </a>
					    </div>
					    <div id="collapse1" class="accordion-body collapse in">
					        <div class="accordion-inner">
					        	<h4>Vestibulum vel</h4>
					        	Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					        </div>
					    </div>
					</div>
					<div class="accordion-group">
					    <div class="accordion-heading">
					        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
					        	Amet consectr adi
					        </a>
					    </div>
					    <div id="collapse2" class="accordion-body collapse">
					        <div class="accordion-inner">
					        	<h4>Vestibulum vel</h4>
					        	Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					        </div>
					    </div>
					</div>
					<div class="accordion-group">
					    <div class="accordion-heading">
					        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
					        	Praesent vestibulum
					        </a>
					    </div>
					    <div id="collapse3" class="accordion-body collapse">
					        <div class="accordion-inner">
					        	<h4>Vestibulum vel</h4>
					        	Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					        </div>
					    </div>
					</div>					
				</div>





			</div>
		</div>
	</div>
</div>	
</div>
	
</div>	
</div>
