<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<style>
		.error{color:red}
		</style>
		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Enquiries List</h1>
			</div>
		
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				
			<div class="panel panel-default">
				<div class="panel-heading">Add </div>
					<div class="panel-body">
                            <table class="table  table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>S.NO</th>
                                  <th class="numeric">Name</th>
                                  <th class="numeric">Company Name</th>
								   <th class="numeric">Email</th>
								    <th class="numeric">Phone Number</th>
									 <th class="numeric">Description</th>
                                  <th class="numeric">Date</th>
								 
                              </tr>
                              </thead>
                              <tbody>
                          <?php
						if(count($contactpage_data)>0) 
                         {						
                         $i=1;
						 
						  foreach($contactpage_data as $data)
						  {
						 
						  ?>
                              
                              <tr>
							  <td class="numeric"><?= $i;?></td>
                                 
								  <td><?= $data->name;?></td>
								  <td class="numeric"><?= $data->company_name;?></td>
								  <td class="numeric"><?= $data->email;?></td>
								  <td class="numeric"><?= $data->phn_num;?></td>
								  <td class="numeric"><?= $data->message;?></td>
                                  <td class="numeric"><?= $data->date;?></td>
                                  
								 
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