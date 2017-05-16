<section style="margin-left: 300px;">
	<section class="wrapper">
		<!-- alert start -->
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

		<!-- info buku start -->
		<div class="row">

			<div class="row mtbox">
		
		<div class="col-md-4">

			<img src="<?php echo base_url().'/sampul/'.$detail->sampul ?>" alt="my deer" width="300">
			<h3><?php echo $detail->judul; ?></h3>
			<h4>BY <?php echo $detail->penulis; ?></h4>
		</div>
		<div class="col-md-2">
			
			</div>
		<!-- info buku end -->

		<!-- form pinjam start -->
		<div class="col-md-8">
		<h4>Data Peminjam</h4>
			<form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>index.php/admin/simpan_pinjam/<?php echo $detail->id_buku; ?>">
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">ID Anggota</label>
					<div class="col-sm-6">
					<input type="text" name="id_anggota" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">ID Buku</label>
					<div class="col-sm-6">
					<input type="text" name="id_buku" class="form-control" value="<?php echo $detail->id_buku ?>"readonly>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Tanggal Peminjaman</label>
					<div class="col-sm-6">
					<input type="date" name="tgl_peminjaman" class="form-control" value="<?=date('Y-m-d')?>"readonly>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Tanggal Pengembalian</label>
					<div class="col-sm-6">
					<input type="date" name="tgl_pengembalian" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Jumlah Pinjam</label>
					<div class="col-sm-6">
					<select class="form-control" name="jumlah_pinjam" required autofocus> 
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select>
					</div>
					<br/>
					<br/>
					<br/>
				<a href="<?php echo base_url(); ?>index.php/admin/detail_buku">
				<button type="button" class="btn btn-danger"><i class="fa fa-chevron-left"></i>  Kembali</button>
				</a>

				<input type="submit" name="submit" class="btn btn-theme03" value="Pinjam">
				</div>
			</form>
		</div>
		
		<!-- form pinjam end -->


	</section>
</section>