<!--<div id="" class="clearfix">
<div id="camera_wrap">
	<div data-src="<?= base_url();?>assects/images/slide1.jpg"></div>	
</div>	
</div>-->

<div id="content">
<div id="content2">
<!--
<div class="page_title">
<div class="container">
<div class="row">
<div class="span12">
	Company
</div>	
</div>	
</div>	
</div>-->


<div id="inner">
<div id="inner2">

	<div class="container">
		<div class="row">
			<div class="span9">
				
				
				

				<div class="thumb3">
				<h1 style="border-bottom:1px solid #f1f1f1">Who We Are</h1>
					<div class="thumbnail clearfix">
						<div class="caption">
						<?php $aboutdetails_data=$this->db->select('*')->order_by('id', 'desc')->where('add_slider_contact_details','About Deatails')->get('add_sliderimages')->result();?>
  
									<?php
			foreach($aboutdetails_data as $data)
			{
				?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="about_page_styles"> 
				 <h4 class="about_page_styles_h4">
					<?= $data->slider_img_title;?>
					</h4>
					<p >
					<?= $data->slider_img_desc;?>
					</p>
				</section>	
                </div>
				<?php
			}
				?>							
						</div>
					</div>
				</div>

		</div>
			
			
			<div class="span3">
			
				

				<div class="line1"></div>
<?php $data=$this->db->select('*')->order_by('id', 'desc')->get('add_branchdetails')->row();?>
				<div class="thumb6">
					<div class="thumbnail clearfix">
						<figure class=""><img src="<?= base_url();?>assects/images/company09.jpg" alt=""></figure>
						<div class="caption2">
							Contacts
						</div>
						<div class="caption">
							<div class="txt1">
								<?= $data->first_email;?><br>
								+91  <?= $data->mob_num;?>
							</div>
							<a href="#" class="button0">mail us</a>
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