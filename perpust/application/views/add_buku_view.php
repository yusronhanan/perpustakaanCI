<section id="main-content">
	<section class="wrapper site-min-height">

<!-- alert start -->
	<?php
	if (!empty($notif)) {	
		echo '<div class="alert alert-danger">';
		echo $notif;
		echo '</div>';
}
	elseif (!empty($notif_gagal)) {
		echo '<div class="col-lg-8 col-md-8 col-sm-12">
	 		 <div class="alert alert-danger">';
			echo $notif_gagal; 
	 		echo'</div>
	 		</div>';
	}
	elseif (!empty($notif_sukses)) {
		echo '<div class="col-lg-8 col-md-8 col-sm-12">
	 		 <div class="alert alert-success">';
			echo $notif_sukses; 
	 		echo'</div>
	 		</div>';
	}
	// if (!empty($notif_gagal)) {
	// 	echo '<div class="col-lg-8 col-md-8 col-sm-12">
	// 		 <div class="alert alert-danger">';
	// 		 echo $notif_gagal; 
	// 		 echo'</div>
	// 		</div>'; 
	// }
	// else if (!empty($notif_sukses)) 
	// {
	// 	echo '<div class="col-lg-8 col-md-8 col-sm-12">
	// 		  <div class="alert alert-success"><b>Sukses,</b>';
	// 	echo $notif_sukses;
	// 	echo '</div>	
	// 		</div>';
	// }
		
	?>
		<!-- alert end -->

		<div class="col-md-8" style="margin-top:25px">

		<h4>Add Data Buku Baru</h4>
			<form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>index.php/admin/simpan_buku" enctype="multipart/form-data">
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Judul</label>
 						<div class="col-sm-10">
 							<input type="text" name="judul" class="form-control">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Penulis</label>
 						<div class="col-sm-10">
 							<input type="text" name="penulis" class="form-control">
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Tanggal Terbit</label>
 						<div class="col-sm-10">
 							<input type="date" name="tgl_terbit" class="form-control">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Penerbit</label>
 						<div class="col-sm-10">
 							<input type="text" name="penerbit" class="form-control">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Sisa Buku</label>
 						<div class="col-sm-10">
 							<input type="text" name="sisa_buku" class="form-control">
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Sampul</label>
 						<div class="col-sm-10">
 							<input type="file" name="sampul" class="form-control">
 						</div>
 					</div>
		
 		<div class="form-group">
		<input type="submit" name="submit" class="btn btn-theme04" value="Tambah Buku">
		</div>
		<br/>
		<br/>


		</section>

</section>