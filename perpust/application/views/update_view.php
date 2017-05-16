<section id="main-content">
	<section class="wrapper site-min-height">
	<!-- alert start -->
	<?php
	if (!empty($notif)) {	
		echo '<div class="col-lg-8 col-md-8 col-sm-12">
	 		 <div class="alert alert-danger">';
		echo $notif;
		echo '</div>
			</div>';
}
	else if (!empty($notif_gagal)) {
		echo '<div class="col-lg-8 col-md-8 col-sm-12">
	 		 <div class="alert alert-danger">';
			echo $notif_gagal; 
	 		echo'</div>
	 		</div>';
	}
	else if (!empty($notif_sukses)) {
		echo '<div class="col-lg-8 col-md-8 col-sm-12">
	 		 <div class="alert alert-success">';
			echo $notif_sukses; 
	 		echo'</div>
	 		</div>';
	}	?>
	<!-- alert end -->

		<!-- <h3><i class="fa fa-angle-right"></i></h3>
 -->

 		<div class="row mt">
 			<div class="col-lg-12">
 				<div class="form-panel">
 			
 				
 				<h4 class="mb"><i class="fa fa-angle-right"></i> Update Buku</h4>
 				<form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>index.php/admin/edit_buku/<?php echo $detail->id_buku;  ?>" enctype="multipart/form-data">
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Judul</label>
 						<div class="col-sm-10">
 							<input type="text" name="judul" class="form-control" value="<?php echo $detail->judul ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Penulis</label>
 						<div class="col-sm-10">
 							<input type="text" name="penulis" class="form-control" value="<?php echo $detail->penulis ?>">
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Tanggal Terbit</label>
 						<div class="col-sm-10">
 							<input type="date" name="tgl_terbit" class="form-control" value="<?php echo $detail->tgl_terbit ?>">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Penerbit</label>
 						<div class="col-sm-10">
 							<input type="text" name="penerbit" value="<?php echo $detail->penerbit ?>" class="form-control">
 						</div>
 					</div>

 						<div class="form-group">
 						<label class="col-sm-2 col-sm-2 control-label">Sisa Buku</label>
 						<div class="col-sm-10">
 							<input type="text" name="sisa_buku" class="form-control" value="<?php echo $detail->sisa_buku ?>">
 						</div>
 					</div>
 					
 		<input type="submit" name="submit" class="btn btn-theme04" value="Update Buku">
		

 				</form>
<!-- di cek lagi-->
 				<!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Are you sure want to update  a data??</h4>
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
		



	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

 				</div>
 			</div>
 		</div>

	</section>
</section>