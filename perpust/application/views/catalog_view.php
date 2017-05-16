<section id="main-content">
	<section class="wrapper site-min-height">
	<h3><i class="fa fa-angle-right"></i>Discover Our Books  <a href="<?php echo base_url(); ?>index.php/admin/add_buku"> <i class="fa fa-plus"></i> </a></h3>
		
		<!-- <h4><i class="fa fa-search"> </i>Search</h4> -->

		<div class="row mt">
			<div class="col-lg-12">
			
		<!-- search start -->
		
		<div class="form-group">
			<label class="col-sm-2 col-sm-2 control-label">
				Search Books
			</label>
		<div class="col-sm-8">
			<input type="text" name="searchbook" class="form-control">
			<span class="help-block">
				You can search by name, and please enjoy it.
			</span>
		</div>
		<button class="btn btn-small btn-theme03"><i class="fa fa-search" name="search"></i>  SEARCH</button>
		</div>
		<!-- search end -->

		<!-- start 3 panel -->
			<div class="row">
			<!-- start book 1 new -->
			<?php 
			$no = 1;
				foreach ($list_buku as $data) {
				
			echo	'<div class="col-lg-4 col-md-4 col-sm-4 mb">
					<div class="product-panel-2 pn">
						<div class="badge badge-hot">'.$no.'</div>
					<img src="'.base_url().'/sampul/'.$data->sampul.'" width="120" height="120" alt="">
					<h5 class="mt">'.$data->judul.'</h5>
					<h6>BY '.$data->penulis.'</h6>
					<a href="'.base_url().'index.php/admin/detail_buku/'.$data->id_buku.'">
					<button class="btn btn-small btn-theme03">SEE MORE</button>
					</a>
				</div>
				</div>
				';
				$no++;

			}
				?>
				<!-- end book 1 new -->
			</div>
			<!-- end 3 panel 2 -->
			</div>
		</div>



	</section>

</section>