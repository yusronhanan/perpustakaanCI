 <section  style="margin-left: 300px;">
		<section class="wrapper site-min-height">
		<!-- info detail start -->
		<div class="row">
				
					<div class="row mtbox">

		<div class="col-md-6">
			<img src="<?php echo base_url().'/sampul/'.$detail->sampul ?>" alt="" width="400">
		</div>
		<div class="col-md-6">
			<h3><?php echo $detail->judul ?></h3>
			<h4>BY <?php echo $detail->penulis ?></h4>
			<h5>terbit <?php echo $detail->tgl_terbit ?></h5>
			<h5>diterbitkan oleh <?php echo $detail->penerbit ?></h5>
			<h5>sisa <?php echo $detail->sisa_buku ?> buku</h5>
		</div>
		<br/>
		<br/>
		<br/>

		<a href="<?php echo base_url(); ?>index.php/admin/pinjam_buku/<?php echo $detail->id_buku; ?>">
		<button type="button" class="btn btn-theme"><i class="fa fa-bookmark"></i>  Pinjam</button>
		</a>

		<a href="<?php echo base_url(); ?>index.php/admin/update_buku/<?php echo $detail->id_buku; ?>">
		<button type="button" class="btn btn-theme04"><i class="fa fa-cog"></i>  Update</button>
		</a>
	</div>
	</div>
		<!-- info detail end -->

		
				<h3><i class="fa fa-chevron-right"></i> Other Books</h3>
			<div class="row">
			<div class="col-lg-12">

				<!-- start book 1 new -->
				<div class="col-lg-4 col-md-4 col-sm-4 mb">
					<div class="product-panel-2 pn">
						<div class="badge badge-hot">NEW</div>
					<img src="<?php echo base_url(); ?>assets/img/ui-sam.jpg" width="120" alt="My Deer">
					<h5 class="mt">My Deer</h5>
					<h6>BY DEE LESTARTI</h6>
					<a href="<?php echo base_url(); ?>index.php/admin/detail_buku">
					<button class="btn btn-small btn-theme03">SEE MORE</button>
					</a>
				</div>
				</div>
				<!-- end book 1 new -->

				<!-- start book 2 new -->
				<div class="col-lg-4 col-md-4 col-sm-4 mb">
					<div class="product-panel-2 pn">
						<div class="badge badge-popular">BEST</div>
					<img src="<?php echo base_url(); ?>assets/img/ui-danro.jpg" width="120" alt="My Deer">
					<h5 class="mt">Harry Potter</h5>
					<h6>BY STEVEN</h6>
					<button class="btn btn-small btn-theme03">SEE MORE</button>
				</div>
				</div>
				<!-- end book 2 new -->

				<!-- start book 3 new -->
				<div class="col-lg-4 col-md-4 col-sm-4 mb">
					<div class="product-panel-2 pn">
						<div class="badge badge-new">1987</div>
					<img src="<?php echo base_url(); ?>assets/img/ui-divya.jpg" width="120" alt="My Deer">
					<h5 class="mt">Matahari</h5>
					<h6>BY TERE LIYE</h6>
					<button class="btn btn-small btn-theme03">SEE MORE</button>
				</div>
				</div>
				<!-- end book 3 new -->
				<a href="<?php echo base_url(); ?>index.php/admin/catalog">
				<button type="button" class="btn btn-info">MORE <i class="fa fa-chevron-right"></i></button>
				</a>

			</div>
		</div>

		</section>
		</section>