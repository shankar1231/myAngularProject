<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		
		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Add Business</h1>
			</div>
			<div class="col-lg-2">
				<h1 class="page-header"><a href="<?= base_url();?>business-add" class="btn btn-primary">Add Business</a></h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				
			<div class="panel panel-default">
				<div class="panel-heading">Add Business</div>
					<div class="panel-body">
					
						<table class="table  table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>S.NO</th>
								  
								  <th class="numeric">Category</th>
                                  <th class="numeric">Title</th>
								   <th class="numeric">Image</th>
                                  <th class="numeric">Date</th>
								  <th class="numeric">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                          <?php
						if(count($business_list)>0) 
                         {						
                         $i=1;
						 
						  foreach($business_list as $data)
						  {
						 
						  ?>
                              
                              <tr>
							  <td class="numeric"><?= $i;?></td>
                                 <?php $category_name=$this->Main_modal_db->loadSql("business_categories",array('business_catid'=>$data->busniess_categry))->row();?>
			                  
								 <td><?= $category_name->business_catname;?></td>
								  <td><?= $data->title;?></td>
								  <td class="numeric">
								  <img src="<?= base_url();?>admin_assects_aagro/uploads/<?= $data->file_upload;?>" style="height:70px;width:80px"></td>
								  
                                  <td class="numeric"><?= $data->business_date;?></td>
                                
								 <td><a href="<?= base_url();?>business-edit/<?= $data->business_id;?>" class="btn btn-success" onclick="isEdit()">Edit</a> &nbsp; <a href="<?= base_url();?>business-delete/<?= $data->business_id;?>" class="btn btn-danger" onclick="isDelete()">Delete</a></td> 
                                  
								 
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
   
   if(!confirm('Do You Want Delete perminently from databse  ?')){
   event.preventDefault();
   return;
   }
   return true;
   }
</script>

<script>
   function isEdit(){
   
   if(!confirm('Do You Want Edit the Blog ?')){
   event.preventDefault();
   return;
   }
   return true;
   }
</script>