<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<style>
		.error{color:red}
		</style>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add </h1>
			</div>
		</div><!--/.row-->
		<?php if($this->session->tempdata('sliderimages_success_msg'))
			{
			echo '<p class="alert alert-success">'.$this->session->tempdata('sliderimages_success_msg').'</p>';
			}
			
			elseif($this->session->tempdata('sliderimages_error_msg'))
			{
			echo '<p class="alert alert-success">'.$this->session->tempdata('sliderimages_error_msg').'</p>';
			
			}
			?>		
		
		<div class="row">
			<div class="col-lg-12">
				
				
				
			<div class="panel panel-default">
				<div class="panel-heading">Add </div>
					<div class="panel-body">
				  
                  	  <form class="" action="<?= base_url();?>slider-about-insert" name="" enctype="multipart/form-data" method="post" id="product_add_form">
                        
 <div class="form-group">
						<label>Select Category</label>

                              <select class="form-control" name="add_slider_contact_details">

                                 <option value="" <?php echo set_select('add_slider_contact_details', 'select category', TRUE); ?> >select category</option>
                                 <option value="Slider Images" <?php echo set_select('add_slider_contact_details', 'Slider Images'); ?> >Slider Images</option>
                                 <option value="About Deatails" <?php echo set_select('add_slider_contact_details', 'About Deatails'); ?> >About Deatails</option>
						</select>
							  
							  
							  <span class="error-color"><?php echo form_error('add_slider_contact_details')?></span>
                        </div>
						
	                        <div class="form-group" >
							   <label >	Enter Title :</label>
							   <input type="text" class="form-control" name="slider_img_title" id=""
								  placeholder="Enter Title" value="<?= set_value('slider_img_title')?>">
							   <span class="error-color"><?php echo form_error('slider_img_title')?></span>
							</div>
							
							<div class="form-group" >
							   <label >	Enter Description :</label>
							   <textarea type="text" class="form-control" name="slider_img_desc" id=""
								  placeholder="Enter Description" ><?= set_value('slider_img_desc')?></textarea>
							   <span class="error-color"><?php echo form_error('slider_img_desc')?></span>
							</div>
							
							<div class="form-group" >
							   <label >Upload slider image :</label>
							   <input type="file" class="form-control" name="slider_image" id=""
								   value="<?= set_value('slider_image')?>">
							   <span class="error-color"><?php echo form_error('slider_image')?></span>
							</div>
							 
						<!--end-->
				    
                        <div class="form-group text-center">
                           <input type="submit" class="btn btn-success" value="Add Slider Images">
                        </div>
						
                     </form>
					 
                 </div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
			<?php $this->load->view('admin_views_aagro/inner_footer.php');?>
		</div><!-- /.row -->