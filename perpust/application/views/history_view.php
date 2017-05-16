<section id="main-content">
	<section class="wrapper site-min-height">
			<?php
	if (!empty($notif_gagal)) {
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
	<div class="row mt">
		<div class="col-md-12">
			<div class="content-panels">
		
	
		<table class="table table-striped table advance table-hover">
			<h4><i class="fa fa-angle-right"></i>History Peminjaman <a data-toggle="modal" href="<?php echo base_url(); ?>index.php/admin/history_buku#myPinjam"> <i class="fa fa-plus"></i> </a> <a data-toggle="modal" href="<?php echo base_url(); ?>index.php/admin/cek_denda"> <i class="fa fa-refresh"></i> </a> </h4>
			<hr>

			<thead>
				<tr>
					<th>No</th>
					<th>ID Anggota</th>
					<th>Nama Anggota</th>
					<th>No HP</th>
					<th>Alamat</th>
					<th>ID Buku</th>
					<th>Judul</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Pengembalian</th>
					<th>Status</th>
					<th>Jumlah Buku</th>
					<th>Denda</th>
					<th>Aksi</th>
				</tr>
			</thead>


			<tbody>
			<?php

			$no=1;
			
				foreach ($list_pinjam as $data) : ?>
			<?php 
			$kembali = strtotime($data->tgl_pengembalian);
            $now = strtotime(date('Y-m-d'));
            $telat = $now - $kembali;
            $telat = floor($telat / (60 * 60 * 24));
            $telat = $telat > 0 ? $telat : 0;
            $denda = $telat * 3000; 
					 
			 ?>
					<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data->id_anggota; ?></td>
					<td class="hidden-phone"><?php echo $data->nama_anggota; ?></td>
					<td><?php echo $data->no_hp; ?></td>
					<td><?php echo $data->alamat; ?></td>
					<td><?php echo $data->id_buku; ?></td>
					<td><?php echo $data->judul; ?></td>
					<td><?php echo $data->tgl_peminjaman;?></td>
					<td><?php echo $data->tgl_pengembalian; ?></td>
					<td><?php echo $data->status;?></td>
					<td><?php echo $data->jumlah_pinjam; ?></td>
					
					<td><?php echo $denda;?></td>
					
					<td>
					<a href="<?php echo base_url();?>index.php/admin/pengembalian/<?php echo $data->id_transaksi; ?>/<?php echo $data->jumlah_pinjam; ?>/<?php echo $data->id_buku; ?>">
						<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
					<a href="<?php echo base_url(); ?>index.php/admin/edit_transaksi/<?php echo $data->id_transaksi; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
					<a href="<?php echo base_url();?>index.php/admin/hapus_peminjaman/<?php echo $data->id_transaksi;?>">
						<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
					</td>
				</tr>
				<form action="" method="post">
				<input type="text" name="id_buku2" style="visibility: hidden" value="<?php echo $data->id_buku; ?>">
				<input type="text" name="jumlah_pinjam2" style="visibility: hidden" value="<?php echo $data->jumlah_pinjam; ?>"> 
				</form>
		<?php endforeach; ?>
			<?php  $no++; ?>
			
		      

		      
		      </tbody>
		</table>          <!-- modal -->

		  <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myPinjam" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Cara meminjam</h4>

		                      </div>
		                      <div class="modal-body">
			                      <p>Untuk meminjam, anda dapat menuju ke catalog.</p>
		                          <p>Silahkan pilih buku, dan lakukan peminjaman !</p>		                          
		                          <!-- <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix"> -->
		
		                      </div>
		                      <div class="modal-footer">
		                         
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
	</section>
</section>