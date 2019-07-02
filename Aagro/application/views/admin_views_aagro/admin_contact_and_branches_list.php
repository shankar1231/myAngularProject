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
				<div class="panel-heading">Add </div>
					<div class="panel-body">
                            <table class="table  table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>S.NO</th>
                                  <th class="numeric">category</th>
                                  <th class="numeric">Branch</th>
                                  <th class="numeric">Lnad lIne number</th>
								  <th class="numeric">email</th>
								    <th class="numeric">Latitude</th>
									<th class="numeric">Loginitude</th>
								   <th class="numeric">date</th>
								 <th class="numeric">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                          <?php
						if(count($contact_and_branchdetails_list)>0) 
                         {						
                         $i=1;
						 
						  foreach($contact_and_branchdetails_list as $data)
						  {
						 
						  ?>
                              
                              <tr>
							  <td class="numeric"><?= $i;?></td>
                                 
								  <td><?= $data->add_contact_details;?></td>
								  <td><?= $data->brnch_nam;?></td>
								  
								  <td><?= $data->land_lne_num;?></td>
								  
								  <td><?= $data->first_email;?></td>
								  <td><?= $data->latitude;?></td>
								   <td><?= $data->logni_tude;?></td>
								  
								  
								  
                                  <td class="numeric"><?= $data->date;?></td>
                                  
								  <td><a href="<?= base_url();?>contact-branch-details-edit/<?= $data->id;?>" class="btn btn-success" onclick="isEdit()">Edit</a> &nbsp; <a href="<?= base_url();?>contact-branch-details-delete/<?= $data->id;?>" class="btn btn-danger" onclick="isDelete()">Delete</a></td> 
                                  
								 
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
			
			<?php $this->load->view('admin_views/inner_footer.php');?>
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