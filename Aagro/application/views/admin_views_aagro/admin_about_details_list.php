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
                            <table class="table  table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>S.NO</th>
								  
								  <th class="numeric">Category</th>
                                  <th class="numeric">Title</th>
								  <th class="numeric">Description</th>
                                  <th class="numeric"> Images </th>
                                  <th class="numeric">Date</th>
								  <th class="numeric">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                          <?php
						if(count($aboutdetails_data)>0) 
                         {						
                         $i=1;
						 
						  foreach($aboutdetails_data as $data)
						  {
						 
						  ?>
                              
                              <tr>
							  <td class="numeric"><?= $i;?></td>
                                 
								  <td><?= $data->add_slider_contact_details;?></td>
								  <td><?= $data->slider_img_title;?></td>
								  <td><?= $data->slider_img_desc;?></td>
								  <td class="numeric">
								  <img src="<?= base_url();?>admin_assects_aagro/uploads/slider_images/<?= $data->slider_image;?>" style="height:70px;width:80px"></td>
								  
                                  <td class="numeric"><?= $data->date;?></td>
                                  <td><a href="<?= base_url();?>slider-about-edit/<?= $data->id;?>" class="btn btn-success" onclick="isEdit()">Edit</a> &nbsp; <a href="<?= base_url();?>delete-slider-image/<?= $data->id;?>" class="btn btn-danger" onclick="isDelete()">Delete</a></td> 
                                  
								 
                              </tr>
                           <?php
						   $i++;
						   }
						   }
						   else{
						  ?>
						  <tr ><td  class="text-center">
						  no rsults found
						  </td></tr>
						  <?php
						  }
						  ?>
                              </tbody>
                          </table>
                           </div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
			<?php $this->load->view('admin_views_aagro/inner_footer.php');?>
		</div><!-- /.row -->
	  
	  <script>
   function isDelete(){
   
   if(!confirm('Really Do You Want Delete the data permanently ?  ')){
   event.preventDefault();
   return;
   }
   return true;
   }
</script>

<script>
   function isEdit(){
   
   if(!confirm('Do You Want Edit the data ?')){
   event.preventDefault();
   return;
   }
   return true;
   }
</script>