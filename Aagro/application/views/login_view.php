<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Agro</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url();?>admin_assects_aagro/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url();?>admin_assects_aagro/css/font-awesome.min.css" rel="stylesheet" />
        
    <!-- Custom styles for this  -->
    <link href="<?= base_url();?>admin_assects_aagro/css/style-login.css" rel="stylesheet">
    <link href="<?= base_url();?>admin_assects_aagro/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		     
		
		      <form class="form-login" action="<?= base_url();?>Login" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
				
				    <?php 
                if(isset($login_err_msg))
                {
                    
                     if($login_err_msg==2)
                    {
                        echo "<p class='alert alert-danger'>Wrong Credentials...</p>";
                    }
                    else if($login_err_msg==1)
                    {
                        echo "<p class='alert alert-success'>Login Success. Please Wait...</p>";
                    }
                }
               ?>
				<label>Enter Email ID</label>
		            <input type="email" class="form-control" placeholder="Email ID" name="email" value="<?= set_value("email")?>">
					<?php echo form_error("email"); ?></small>
		            <br>
					<label>Enter Password</label>
		            <input type="password" class="form-control" placeholder="Password" name="password">
					<?php echo form_error("password"); ?></small>
		            <br>
		            <input type="submit" value="Login" name="login" class="btn btn-theme btn-block">
			 
		          
		
		        </div>
		
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url();?>admin_assects_aagro/js/jquery-1.11.1.min.js"></script>
    <script src="<?= base_url();?>admin_assects_aagro/js/bootstrap.min.js"></script>
</body>
</html>
