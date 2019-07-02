
						
						
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<style>
		.error{color:red}
		</style>
		
		
			
		
	             
		<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-0"></div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				
				<h4 class="page-header">change password <?= base64_decode($res->email);?></h4>
				
				 	<?php 
                        if($this->session->flashdata("updatemsg")) 
                        {
                            echo "<p class='alert alert-success'>".$this->session->flashdata("updatemsg")."</p>";
                        }
                        if(isset($pwderror))
                        {
                            echo "<p class='alert alert-danger'>".$pwderror."</p>";
                        }
                            
                        ?>	
		
				
			<div class="panel panel-default">
				<div class="panel-heading">change password </div>
					<div class="panel-body">
						
						
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Old Password:</label><br>
                                <input type="password" name="pwd" class="form-control" required=""><br>
                                <label>New Password:</label><br>
                                <input type="password" name="npwd" class="form-control" required=""><br>
                                <label>Confirm New Password:</label><br>
                                <input type="password" name="cnpwd" class="form-control" required=""><br>
                                <input type="Submit" name="pwd_change" value="Change" class="btn btn-success form-control">
                            </div>
                        </form>
                   </div>
					</div>
				</div><!-- /.panel-->
				
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-0"></div>
			</div><!-- /.col-->
			
			<?php $this->load->view('admin_views_aagro/inner_footer.php');?>
		</div><!-- /.row -->