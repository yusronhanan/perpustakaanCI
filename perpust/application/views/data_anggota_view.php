<section id="main-content">
	<section class="wrapper site-min-height">
		
		<h3><i class="fa fa-angle-right"></i>Data Member  <a href="<?php echo base_url(); ?>index.php/admin/add_anggota"> <i class="fa fa-plus"></i> </a></h3>
		
		<!-- <h4><i class="fa fa-search"> </i>Search</h4> -->

		<div class="row mt">
			<div class="col-lg-12">
			
		<!-- search start -->
		
		<div class="form-group">
			<label class="col-sm-2 col-sm-2 control-label">
				Search Member
			</label>
		<div class="col-sm-8">
			<input type="text" name="searchbook" class="form-control">
			<span class="help-block">
				You can search by name, and please smile.
			</span>
		</div>
		<button class="btn btn-small btn-theme03"><i class="fa fa-search" name="search"></i>  SEARCH</button>
		</div>
		<!-- search end -->
		<br/>
		<br/>
		<!-- MEMBER PANEL START -->
		<div class="row mt">
			<div class="col-lg-12">
		<?php 
		$no = 1;
		foreach ($list_anggota as $data) {
		echo	
		'<div class="col-lg-2 col-md-2 col-sm-3 mb">
		<div class="twitter-panel pn">
		<i class="fa fa-user fa-4x"></i>
		<p>'.$data->nama_anggota.'
		<br/>
		<!--id anggota-->
		'.$no.'
		</p>
			 <a href="'.base_url().'index.php/admin/detail_anggota/'.$data->id_anggota.'">
					<button class="btn btn-small btn-default">SEE</button>
			</a>

		</div>
		</div>';
		$no++;
		}
		
		?>
		<!-- MEMBER PANEL END -->
		</div>

	</div>

	</section>
</section>