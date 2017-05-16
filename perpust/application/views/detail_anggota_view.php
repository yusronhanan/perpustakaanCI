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
		
	?>

	<!-- alert end -->

		
	<div class="col-md-10 col-sm-8">
			<h5><?php echo $detail->id_anggota; ?></h5>
			<h5><?php echo $detail->nama_anggota; ?></h5>
			<h5><?php echo $detail->tempat_lahir; ?>,  <?php echo $detail->tgl_lahir; ?></h5>
			<h5><?php echo $detail->no_hp; ?></h5>
			<h5><?php echo $detail->alamat; ?></h5>
			<h5>Status <?php echo $detail->status; ?></h5>
			<h5>Bergabung sejak <?php echo $detail->tgl_bergabung; ?></h5>
		</div>

		<div class="col-md-8" style="margin-top:25px">
		<h4>Update Data Member</h4>
			<form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>index.php/admin/edit_anggota/<?php echo $detail->id_anggota; ?>">
	
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Nama Anggota</label>
					<div class="col-sm-6">
					<input type="text" name="nama_anggota" class="form-control" value="<?php echo $detail->nama_anggota; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
					<div class="col-sm-6">
					<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $detail->tempat_lahir; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
					<div class="col-sm-6">
					<input type="date" name="tgl_lahir" class="form-control" value="<?php echo $detail->tgl_lahir; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">No. HP</label>
					<div class="col-sm-6">
					<input type="text" name="no_hp" class="form-control" value="<?php echo $detail->no_hp; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Alamat</label>
					<div class="col-sm-6">
					<input type="text" name="alamat" class="form-control" value="<?php echo $detail->alamat; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Status</label>
					<div class="col-sm-6">
					<input type="text" name="status" class="form-control" value="<?php echo $detail->status; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Tanggal Bergabung</label>
					<div class="col-sm-6">
					<input type="date" name="tgl_bergabung" class="form-control" value="<?php echo $detail->tgl_bergabung; ?>">
					</div>
				</div>

		<a href="<?php echo base_url(); ?>index.php/admin/data_anggota">
				<button type="button" class="btn btn-danger"><i class="fa fa-chevron-left"></i>  Kembali</button>
				</a>

		<input type="submit" name="submit" class="btn btn-theme02" value="Update Anggota">
	</section>
</section>