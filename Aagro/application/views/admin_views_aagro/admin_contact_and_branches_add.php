<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<style>
		.error{color:red}
		</style>
		
		
		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Add</h1>
			</div>
			<div class="col-lg-2">
				<h1 class="page-header"><a href="<?= base_url();?>slider-about-add" class="btn btn-primary">Add</a></h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				
			<div class="panel panel-default">
				<div class="panel-heading">Add</div>
					<div class="panel-body">
				  
                  	  <form class="" action="<?= base_url();?>branch-contactdetails-insert" name=""  method="post" id="">
                        
						 <div class="form-group">
						<label>Select Category</label>

                              <select class="form-control" name="add_contact_details">

                                 <option value="" <?php echo set_select('add_contact_details', 'select category', TRUE); ?> >select category</option>
                                 <option value="Branch Details" <?php echo set_select('add_contact_details', 'Branch Details'); ?> >Branch Details</option>
                                 <option value="Contact Deatails" <?php echo set_select('add_contact_details', 'Contact Deatails'); ?> >Contact Deatails</option>
								 <option value="Global Branch Details" <?php echo set_select('add_contact_details', 'Global Branch Details'); ?> >Global Branch Details</option>
      
                              </select>
							  
							  
							  <span class="error-color"><?php echo form_error('add_contact_details')?></span>
                        </div>
					    
						<div class="form-group">
                           <label >Branch Name/Main branch Name :</label>
                           <input type="text" class="form-control " name="brnch_nam" id=""
                              placeholder="Branch Name/Main branch Name" value="<?= set_value('brnch_nam')?>">
                           <span class="error-color"><?php echo form_error('brnch_nam')?></span>
                        </div>
					  
					  
						<div class="form-group">
                           <label >Land Line Number :</label>
                           <input type="text" class="form-control " name="land_lne_num" id=""
                              placeholder="Land Line Number" value="<?= set_value('land_lne_num')?>">
                           <span class="error-color"><?php echo form_error('land_lne_num')?></span>
                        </div>
						
						<div class="form-group">
                           <label >Mobile Number :</label>
                           <input type="number" class="form-control " name="mob_num" id=""
                              placeholder="Mobile Number" value="<?= set_value('mob_num')?>">
                           <span class="error-color"><?php echo form_error('mob_num')?></span>
                        </div>
						
						<div class="form-group">
                           <label >Email :</label>
                           <input type="email" class="form-control " name="first_email" id=""
                              placeholder="Email" value="<?= set_value('first_email')?>">
                           <span class="error-color"><?php echo form_error('first_email')?></span>
                        </div>
						
						<div class="form-group">
                           <label >Another Email :</label>
                           <input type="email" class="form-control " name="secnd_email" id=""
                              placeholder="Another Email" value="<?= set_value('secnd_email')?>">
                           <span class="error-color"><?php echo form_error('secnd_email')?></span>
                        </div>
						
						
					  
                        <div class="form-group">
                           <label >Address :</label>
                           <textarea type="text" class="form-control " name="address" id="address"
                              placeholder="Address"><?= set_value('address')?></textarea>
                           <span class="error-color"><?php echo form_error('address')?></span>
                        </div>
						
						
						<div class="form-group">
                           <label >Enter Latitude :</label>
                           <input type="text" class="form-control " name="latitude" id=""
                              placeholder="Enter Latitude" value="<?= set_value('latitude')?>">
                           <span class="error-color"><?php echo form_error('latitude')?></span>
                        </div>
						
						<div class="form-group">
                           <label >Enter Lognitude:</label>
                           <input type="text" class="form-control " name="logni_tude" id=""
                              placeholder="Enter Lognitude" value="<?= set_value('logni_tude')?>">
                           <span class="error-color"><?php echo form_error('logni_tude')?></span>
                        </div>
                        
                        <div class="form-group text-center">
                           <input type="submit" class="btn btn-success" value="submit">
                        </div>
						
                     </form>
					 
                    </div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
			<?php $this->load->view('admin_views/inner_footer.php');?>
		</div><!-- /.row -->