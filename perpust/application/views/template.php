<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Telkom</title>
	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();  ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();  ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();  ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();  ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url();  ?>assets/js/chart-master/Chart.js"></script>
</head>
<body>
	<section id="container">
<!-- header start -->
	<header class ="header black-bg">
	<div class="sidebar-toogle-box">
		<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
	</div>
	<!-- for logo -->
	<a href="<?php echo base_url();?>" class="logo"><b>PERPUSTAKAAN TELKOM</b></a>
	<!-- logo end -->

	<!-- logout button -->
	<div class="top-menu">
		<ul class="nav pull-right top-menu">
			<li><a href="<?php echo base_url();?>index.php/login/logout">Logout</a></li>
		</ul>
	</div>
	</header>
	<!-- header end -->

	<!-- sidebar dashboard start -->
	<?php 
	$nama = $this->session->set_userdata('logged_name');
	 ?>

	<aside>
		<div id="sidebar" class="nav-collapse">
			<!--sidebar menu start -->
			<ul class="sidebar-menu" id="nav-accordion">
				<h5 class="centered"><?php echo $nama; ?></h5>
			
			
			<li class="mt">
			<a href="<?php echo base_url(); ?>index.php/admin" class="active">
				<i class="fa fa-dashboard"></i>
				<span>Dashboard</span>
			</a>
			</li>

			<li class="mt">
				<a href="<?php echo base_url(); ?>index.php/admin/catalog" >
					<i class="fa fa-book"></i>
					<span>Catalog Buku</span>
				</a>

			</li>
			<!-- <li class="mt">
				<a href="<?php echo base_url(); ?>index.php/admin/peminjaman" >
					<i class="fa fa-bookmark"></i>
					<span>Peminjaman Buku</span>
				</a>

			</li> -->
			<li class="mt">
				<a href="<?php echo base_url(); ?>index.php/admin/history_buku">
					<i class="fa fa-history">	
					</i>
					<span>Transaksi</span>
				</a>
					
			</li>

			<li class="mt">
				<a href="<?php echo base_url(); ?>index.php/admin/data_anggota">
					<i class="fa fa-users"></i>
					<span>Data Anggota</span>
				</a>
				</li>

				<?php 
		if ($this->session->userdata('level')==0) {
		?>	
			<li class="mt">
				<a href="<?php echo base_url()?>index.php/super">
					<i class="fa fa-user"></i>
					<span>Super Admin Control</span>

				</a>
				
			</li>	
		 
		<?php } 
?>
		
			


			</ul>
		</div>
	</aside>
	<!-- sidebar end -->

	<?php 
	$this->load->view($main_view);
	 ?>
	 <!-- footer start -->
	 <footer class="site-footer">
	 	<div class="text-center">
	 		2017 - Yusron.hzvi <?php echo $this->session->userdata('level'); ?>
	 		<a href="<?php echo base_url(); ?> " class="go-top">
	 			<i class="fa fa-angle-up"></i>
	 		</a>
	 	</div>
	 </footer>
	 <!-- footer end -->


</section>




</body>
</html>