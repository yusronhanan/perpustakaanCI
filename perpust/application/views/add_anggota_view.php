<section id="main-content">
	<section class="wrapper">

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
		
	?>

	<!-- alert end -->

<div class="col-md-12" style="margin-top:25px">
		<h4>Add Data Anggota Baru</h4>

	<form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>index.php/admin/simpan_anggota" enctype="multipart/form-data">
 					
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Nama Anggota</label>
 						<div class="col-sm-10">
 							<input type="text" name="nama_anggota" class="form-control">
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
 						<div class="col-sm-10">
 							<input type="text" name="tempat_lahir" class="form-control">
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
 						<div class="col-sm-10">
 							<input type="date" name="tgl_lahir" class="form-control">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">No. HP</label>
 						<div class="col-sm-10">
 							<input type="text" name="no_hp" class="form-control">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Alamat</label>
 						<div class="col-sm-10">
 							<input type="text" name="alamat" class="form-control">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Status</label>
 						<div class="col-sm-10">
 							<input type="text" name="status" class="form-control">
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Tanggal Bergabung</label>
 						<div class="col-sm-10">
 							<input type="date" name="tgl_bergabung" class="form-control">
 						</div>
 					</div>

 					
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-theme04" value="Tambah Anggota">
		</div>
		</form> 
		</div>

		</section>
</section>
