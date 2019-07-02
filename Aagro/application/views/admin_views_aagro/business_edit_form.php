<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<style>
		.error{color:red}
		</style>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Business</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				
			<div class="panel panel-default">
				<div class="panel-heading">Add Business</div>
					<div class="panel-body">
					
						<form role="form" method="post" action="<?= base_url();?>business-update/<?= $business_edit->business_id;?>" enctype="multipart/form-data">
						    <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Title</label>
										<input class="form-control" placeholder="Title" name="title" value="<?= $business_edit->title;?>">
									<?= form_error('title');?>
									</div>
									
								</div>
<?php $busines_cat_Data = $this->Main_modal_db->loadSql('business_categories',array('status'=>'1')); ?>
												
								<div class="col-md-6">	
									<div class="form-group">
										<label>Select Business Category</label>
										<select name="busniess_categry" class="form-control">
									<option value="" <?php echo set_select('umed_selct_cat', 'select category', TRUE); ?> >select category</option>
                                 
										<?php foreach($business_categories_list as $options)
										{
											?>
										<option value="<?= $options->business_catid;?>" <?php echo set_select('busniess_categry',$options->business_catid ); ?> ><?= $options->business_catname;?></option>
										<?php
										}
										?>
										
										<?php foreach($busines_cat_Data->result() as $busine_category): ?>
							   <option value="<?=$busine_category->business_catid?>" <?php if($busine_category->business_catid === $business_edit->busniess_categry) { echo 'selected';  } ?>><?=$busine_category->business_catname?></option>
							   <?php endforeach; ?>
										
										</select>
									</div>
								</div>
							</div>	
							
							<div class="row">
							    <div class="col-md-6">
									<div class="form-group">
										<label>Keywords</label>
										<input class="form-control" placeholder="Keywords" name="keywords" value="<?= $business_edit->keywords;?>">
									</div>
								</div>	
								<div class="col-md-6">
								    <div class="form-group">
									<label>Image Upload</label>
									<input type="file" class="form-control" name="file_upload">
								</div>
								<img src="<?= base_url();?>admin_assects_aagro/uploads/<?= $business_edit->file_upload;?>" style="height:70px;width:80px">
								</div>
								<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea  type="text" class="form-control" rows="7" name="descrptn"> <?= $business_edit->descrptn;?> </textarea>
								</div>
								</div>
								
								<div class="col-md-12">
								<div class="form-group">
									<input type="submit" class="btn btn-success" value="Update Business">
								</div>
								</div>
								
							</div>
							
							
							
							
								
								
							
								
							
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
			<?php $this->load->view('admin_views_aagro/inner_footer.php');?>
		</div><!-- /.row -->