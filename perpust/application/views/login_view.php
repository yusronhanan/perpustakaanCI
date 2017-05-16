<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php 
		if (!empty($notif)) {
		echo '<div class="col-lg-8 col-md-8 col-sm-12">
	 		 <div class="alert alert-danger">';
			echo $notif; 
	 		echo'</div>
	 		</div>';
	}
	 ?>
  <body>

<div id="login-page">
	<div class="container">
		
		<form class="form-login" method="post" action="<?php echo base_url(); ?>index.php/login/masuk">
			
		<h2 class="form-login-heading">sign in now</h2>
		<div class="login-wrap">
			<input type="text" name="username" class="form-control" placeholder="username" autofocus>
			<br>
			<input type="password" name="password" class="form-control" placeholder="password">
			
			

			<input type="submit" name="submit" class="btn btn-theme btn-block" value="SIGN IN">
			<hr>

			<div class="registration">
				Don't have an account yet?
				<br/>
				<a data-toggle="modal" href="<?php echo base_url(); ?>index.php/admin/logincoba#myModal">
					Contact Super Admin
				</a> 
			</div>
			</div>
		</div>

		<!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Don't have an acoount?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>If you are a employee of this library, you can asking manager for create an account. If not, I'm sorry. You don't have permission here</p>
		                          <!-- <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix"> -->
		
		                      </div>
		                      <div class="modal-footer">
		                         
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		


		</form>

	</div>
</div>


	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url(); ?>assets/img/wall-book.jpg", {speed: 500});
    </script>


  </body>
</html>
