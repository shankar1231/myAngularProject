<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<style>
		.error{color:red}
		</style>
		
		
		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">List</h1>
			</div>
			<div class="col-lg-2">
				<h1 class="page-header"><a href="<?= base_url();?>slider-about-add" class="btn btn-primary">Add</a></h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				
			<div class="panel panel-default">
				<div class="panel-heading">List</div>
					<div class="panel-body">
				  
                  	  <form class="" action="<?= base_url();?>slider-about-update/<?= $edit_snigle_slider_img->id;?>" enctype="multipart/form-data" method="post" id="product_add_form">
                        
					
 <div class="form-group">
						<label>Select Category</label>

                              <select class="form-control" name="add_slider_contact_details">

                                 <option value="" <?php echo set_select('add_slider_contact_details', 'select category', TRUE); ?> >select category</option>
                                 <option value="Slider Images" <?php if ($edit_snigle_slider_img->add_slider_contact_details == "Slider Images" ) echo 'selected' ; ?> >Slider Images</option>
                                 <option value="About Deatails" <?php if ($edit_snigle_slider_img->add_slider_contact_details == "About Deatails" ) echo 'selected' ; ?> >About Deatails</option>
								 <!--<option value="Quick Contact" <?php echo set_select('add_slider_contact_details', 'Quick Contact'); ?> >Quick Contact</option>-->
      
                              </select>
							  
							  
							  <span class="error-color"><?php echo form_error('add_slider_contact_details')?></span>
                        </div>
						
	                        <div class="form-group" >
							   <label >	Enter Title :</label>
							   <input type="text" class="form-control" name="slider_img_title" id=""
								  placeholder="Enter Title" value="<?= $edit_snigle_slider_img->slider_img_title;?>">
							   <span class="error-color"><?php echo form_error('slider_img_title')?></span>
							</div>
							
							<div class="form-group" >
							   <label >	Enter Description :</label>
							   <textarea type="text" class="form-control" name="slider_img_desc" id=""
								  placeholder="Enter Description" ><?= $edit_snigle_slider_img->slider_img_desc;?></textarea>
							   <span class="error-color"><?php echo form_error('slider_img_desc')?></span>
							</div>
							
							<div class="form-group" >
							   <label >Upload slider image :</label>
							   <input type="file" class="form-control" name="slider_image" id=""
								   value="<?= set_value('slider_image')?>">
								     <?php if($edit_snigle_slider_img->slider_image!=="")
									 {
									 ?>
									 <img src="<?= base_url();?>admin_assects_aagro/uploads/slider_images/<?= $edit_snigle_slider_img->slider_image;?>" style="height:70px;width:80px">
							   <?php
							   }
							   else
							   {
							   ?>
							   <p>no image uploded</p>
							   <?php
							   }
							   ?>
							   <span class="error-color"><?php echo form_error('slider_image')?></span>
							</div>
							 
						<!--end-->
				    
                        <div class="form-group text-center">
                           <input type="submit" class="btn btn-success" value="Update">
                        </div>
						
                     </form>
					 
  </div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
			<?php $this->load->view('admin_views_aagro/inner_footer.php');?>
		</div><!-- /.row -->