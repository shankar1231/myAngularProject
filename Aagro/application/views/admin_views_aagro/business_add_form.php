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
					
						<form role="form" method="post" action="<?= base_url();?>business-add" enctype="multipart/form-data">
						    <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Title</label>
										<input class="form-control" placeholder="Title" name="title" value="<?= set_value('title')?>">
									<?= form_error('title');?>
									</div>
									
								</div>
<?php $business_categories_list=$this->db->select('*')->get('business_categories')->result();?>								
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
										
										</select>
									</div>
								</div>
							</div>	
							
							<div class="row">
							    <div class="col-md-6">
									<div class="form-group">
										<label>Keywords</label>
										<input class="form-control" placeholder="Keywords" name="keywords" value="<?= set_value('keywords')?>">
									</div>
								</div>	
								<div class="col-md-6">
								    <div class="form-group">
									<label>Image Upload</label>
									<input type="file" class="form-control" name="file_upload">
								</div>
								</div>
								<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea  type="text" class="form-control" rows="7" name="descrptn"> <?= set_value('descrptn')?> </textarea>
								</div>
								</div>
								
								<div class="col-md-12">
								<div class="form-group">
									<input type="submit" class="btn btn-success" value="Add Business">
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