<style>
.center-block{    display: block;
    margin-left: auto;
    margin-right: auto;}
</style>
<!--
<div id="slider" class="clearfix">
<div id="camera_wrap">
	<div data-src="<?= base_url();?>assects/images/slide3.jpg"></div>	
</div>	
</div>-->



<div id="content">
<div id="content2">
<!--
<div class="page_title">
<div class="container">
<div class="row">
<div class="span12">
	Services
</div>	
</div>	
</div>	
</div>-->
<div id="inner">
<div id="inner2">
	<div class="container">
		<div class="row">
			<div class="span12">
			

				<h2>Services Overview</h2>

				<div class="row">
				
				<?php 
				if(count($db_business_data)>0) 
                         {
				foreach($db_business_data as $data)
				{
					?>
					<div class="span3">
						<div class="thumb5">
							<div class="thumbnail clearfix">
								<!--img-polaroid--><figure class=""><img src="<?= base_url();?>admin_assects_aagro/uploads/<?= $data->file_upload;?>" alt="<?= $data->file_upload;?>"></figure>
								<div class="caption">
									<h3 class="business_list_h3_title">
										<?= $data->title;?>
									</h3>
									<?php $category_name=$this->Main_modal_db->loadSql("business_categories",array('business_catid'=>$data->busniess_categry))->row();?>
			                  
									<h4 class="business_list_h4_title"> <?= $category_name->business_catname;?></h4>
									
									<!--<h4 class="business_list_h4_title">
									<?php
										//echo substr($data->descrptn,0,26). '...';
									?>
									
									</h4>-->

									
								</div>
								<div class="business_list_view_details"><a href="<?= base_url();?>business-view/<?= $data->business_title_url;?>" class="">View Details</a></div>
							</div>
						</div>
					</div>
					<?php
				}
				}
				else{
				?>
				
				<img src="<?= base_url();?>assects/images/comingsoonicon.png" class="center-block">
				<?php
				}
				?>
					
					
		
					
														
				</div>						




			</div>
			
		</div>
	</div>
</div>	
</div>
	
</div>	
</div>