<section id="main-content">
	<section class="wrapper site-min-height" >
		
	<div class="row mt">
		<div class="col-md-12">
			<div class="content-panels">
		<table class="table table-striped table advance table-hover">
			<h4><i class="fa fa-angle-right"></i>Data Petugas <a href="<?php echo base_url(); ?>index.php/super/add_petugas"> <i class="fa fa-plus"></i> </a></h4>
			<hr>

			<thead>
				<tr>
					<th><i class="fa fa-user"></i>  ID Petugas</th>
					<th><i class="fa fa-tag"></i>  Username</th>
					<th><i class="fa fa-key"></i>  Password</th>
					<th><i class="fa fa-edit"></i>  Aksi</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
			<?php
			$no=1;
				foreach($detail as $data): 
			 ?>
				<tr>
					<td><?php echo $data->id_user ?></td>
					<td class="hidden-phone"><?php echo $data->username ?></td>
					<td><?php echo $data->password ?></td>
					<td>
						<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
						
						<a href="<?php echo base_url(); ?>index.php/super/update_petugas"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
						</a>

						<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php $no++; ?>

			</tbody>

		</table>

			</div>
		</div>
	</div>


	</section>
</section>