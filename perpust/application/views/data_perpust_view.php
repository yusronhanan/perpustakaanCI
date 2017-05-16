<section id="main-content">
	<section class="wrapper site-min-height">

		<div class="col-md-8" style="margin-top:25px">
		<h4>Add Data Buku Baru</h4>
			<form class="form-horizontal style-form" method="get">
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Book Name</label>
 						<div class="col-sm-10">
 							<input type="text" name="name" class="form-control">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Writer</label>
 						<div class="col-sm-10">
 							<input type="text" name="writer" class="form-control">
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Date of Publish</label>
 						<div class="col-sm-10">
 							<input type="date" name="date" class="form-control">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Publisher</label>
 						<div class="col-sm-10">
 							<input type="text" name="publisher" class="form-control">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Book Remain</label>
 						<div class="col-sm-10">
 							<input type="text" name="remain" class="form-control">
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Cover</label>
 						<div class="col-sm-10">
 							<input type="file" name="cover" class="form-control">
 						</div>
 					</div>
		

		<a href="<?php echo base_url(); ?>index.php/admin/add_buku">
		<button type="button" class="btn btn-theme03"><i class="fa fa-cog"></i>  Update</button>
		</a>
		<br/>
		<br/>


		<div class="col-md-12" style="margin-top:25px">
		<h4>Add Data Anggota Baru</h4>


	<form class="form-horizontal style-form" method="get">
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">ID Anggota</label>
 						<div class="col-sm-10">
 							<input type="text" name="id_anggota" class="form-control">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Nama Anggota</label>
 						<div class="col-sm-10">
 							<input type="text" name="nama_anggota" class="form-control">
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
 						<label class="col-sm-2 col-sm-2 control-label">Tanggal Bergabung</label>
 						<div class="col-sm-10">
 							<input type="date" name="tanggal_bergabung" class="form-control">
 						</div>
 					</div>


		
		<a href="<?php echo base_url(); ?>index.php/admin/update_anggota">
		<button type="button" class="btn btn-theme04"><i class="fa fa-cog"></i>  Update</button>
		</a>
		</form> 
		</div>

		</section>

</section>