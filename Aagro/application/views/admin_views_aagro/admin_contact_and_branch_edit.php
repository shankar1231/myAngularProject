<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<style>
		.error{color:red}
		</style>
		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">List</h1>
			</div>
			<div class="col-lg-2">
				<h1 class="page-header"><a href="<?= base_url();?>branch-contactdetails-add" class="btn btn-primary">Add</a></h1>
			</div>
		</div><!--/.row-->
			<?php if($this->session->tempdata('branch-contactdetails-successmsg'))
			{
			echo '<p class="alert alert-success">'.$this->session->tempdata('branch-contactdetails-successmsg').'</p>';
			}
			
			elseif($this->session->tempdata('branch-contactdetails-add-errormsg'))
			{
			echo '<p class="alert alert-success">'.$this->session->tempdata('branch-contactdetails-add-errormsg').'</p>';
			
			}
			?>	
		
		<div class="row">
			<div class="col-lg-12">
				
				
				
			<div class="panel panel-default">
				<div class="panel-heading">Update </div>
					<div class="panel-body">
				  
                  	  <form class="" action="<?= base_url();?>contact-branch-details-update/<?= $single_branch_edit->id;?>" name=""  method="post" id="">
                        
						 <div class="form-group">
						<label>Select Category</label>

                              <select class="form-control" name="add_contact_details">

                                 <option value="" <?php echo set_select('add_contact_details', 'select category', TRUE); ?> >select category</option>
                                 <option value="Branch Details" <?php if ($single_branch_edit->add_contact_details == "Branch Details" ) echo 'selected' ; ?> >Branch Details</option>
                                 <option value="Contact Details" <?php if ($single_branch_edit->add_contact_details == "Contact Details" ) echo 'selected' ; ?> >Contact Deatails</option>
								 <option value="Global Branch Details" <?php if ($single_branch_edit->add_contact_details == "Global Branch Details" ) echo 'selected' ; ?> >Global Branch Details</option>
                                 
		
                              </select>
							  
							  
							  <span class="error-color"><?php echo form_error('add_contact_details')?></span>
                        </div>
					    
						<div class="form-group">
                           <label >Branch Name/Main branch Name :</label>
                           <input type="text" class="form-control " name="brnch_nam" id=""
                              placeholder="Branch Name/Main branch Name" value="<?= $single_branch_edit->brnch_nam;?>">
                           <span class="error-color"><?php echo form_error('brnch_nam')?></span>
                        </div>
					  
					  
						<div class="form-group">
                           <label >Land Line Number :</label>
                           <input type="text" class="form-control " name="land_lne_num" id=""
                              placeholder="Land Line Number" value="<?= $single_branch_edit->land_lne_num;?>">
                           <span class="error-color"><?php echo form_error('land_lne_num')?></span>
                        </div>
						
						<div class="form-group">
                           <label >Mobile Number :</label>
                           <input type="number" class="form-control " name="mob_num" id=""
                              placeholder="Mobile Number" value="<?= $single_branch_edit->mob_num;?>">
                           <span class="error-color"><?php echo form_error('mob_num')?></span>
                        </div>
						
						<div class="form-group">
                           <label >Email :</label>
                           <input type="email" class="form-control " name="first_email" id=""
                              placeholder="Email" value="<?= $single_branch_edit->first_email;?>">
                           <span class="error-color"><?php echo form_error('first_email')?></span>
                        </div>
						
						<div class="form-group">
                           <label >Another Email :</label>
                           <input type="email" class="form-control " name="secnd_email" id=""
                              placeholder="Another Email" value="<?= $single_branch_edit->secnd_email;?>">
                           <span class="error-color"><?php echo form_error('secnd_email')?></span>
                        </div>
						
						
					  
                        <div class="form-group">
                           <label >Address :</label>
                           <textarea type="text" class="form-control " name="address" id="desc"
                              placeholder="Address"><?= $single_branch_edit->address;?></textarea>
                           <span class="error-color"><?php echo form_error('address')?></span>
                        </div>
						
							<div class="form-group">
                           <label >Enter Latitude :</label>
                           <input type="text" class="form-control " name="latitude" id=""
                              placeholder="Enter Latitude" value="<?= $single_branch_edit->latitude;?>">
                           <span class="error-color"><?php echo form_error('latitude')?></span>
                        </div>
						
						<div class="form-group">
                           <label >Enter Lognitude:</label>
                           <input type="text" class="form-control " name="logni_tude" id=""
                              placeholder="Enter Lognitude" value="<?= $single_branch_edit->logni_tude;?>">
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