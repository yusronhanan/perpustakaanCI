 <section id="main-content">
		<section class="wrapper">
		<!-- status mulai -->
			<div class="row">
				<div class="col-lg-9 main-chart">
					<div class="row mtbox">

						<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
							<div class="box1">
								<span class="li_user"></span>
								<h3>1000</h3>
							</div>
							<p> 1000 visitor in library the last 7 days. Yuhuuu!</p>
						</div>

						<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
							<div class="box1">
								<span class="li_note"></span>
								<h3>89999</h3>
							</div>
							<p> 89999 Books in this library! the last 7 days</p>
						</div>

						<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
							<div class="box1">
								<span class="li_news"></span>
								<h3>1923</h3>
							</div>
							<p> 1923 kind of books in this library! the last 7 days</p>
						</div>

						<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
							<div class="box1">
								<span class="li_tag"></span>
								<h3>7098</h3>
							</div>
							<p> 7098 people who borrow books in this library! the last 7 days</p>
						</div>

						

					</div>

				</div>
			</div>
			<!-- status selesai-->


			<!-- persentase visitor minggu ini/bulan ini start -->
					<div class="col-md-6 col-sm-6 mb">
					<div class="white-panel pn donut-chart">
						<div class="white-header" style="background-color:#424949">
							<h5>Persentase <br>Visitor hari ini/bulan ini</h5>
						</div>
					<div class="row">
						<div class="col-sm-6 col-xs-6 goleft">
							<p><i class="fa fa-users"></i><?php echo 77; ?>%</p>
						</div>
					</div>
					<canvas id="serverstatus02" height="120" width="120"></canvas>
					<script>
						var doughnutData2 = [
						{
							value: <?php echo 100-23; ?>,
							color:"#68dff0"	
						},
						{
							value: <?php echo 23; ?> ,
							color: "#fdfdfd"
						}
						];
						var myDoughnut2 = new Chart( document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData2);
					</script>
					</div>
					</div>
					<!-- persentase visitor minggu ini/bulan ini end -->

					<!-- persentase peminjam/visitor mulai -->
			<div class="col-md-6 col-sm-6 mb">
					<div class="white-panel pn donut-chart">
						<div class="white-header" style="background-color:#424949">
							<h5>Persentase <br>Peminjaman/Visitor</h5>
						</div>
					<div class="row">
						<div class="col-sm-6 col-xs-6 goleft">
							<p><i class="fa fa-bookmark"></i><?php echo 89; ?>%</p>
						</div>
					</div>
					<canvas id="serverstatus01" height="120" width="120"></canvas>
					<script>
						var doughnutData = [
						{
							value: <?php echo 100-11; ?>,
							color:"#68dff0"	
						},
						{
							value: <?php echo 11; ?> ,
							color: "#fdfdfd"
						}
						];
						var myDoughnut = new Chart( document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
					</script>
					</div>
					</div>
					<!-- persentase peminjam/visitor end -->

					<!-- jangan lupa, dilihat id canvasnya lalu var doughnutData bisa + 1/2/3 -->

					<!-- new book 1 start-->

					<div class="col-md-4 col-sm-4 mb">
					<div class="white-panel pn">
							<div class="white-header" style="background-color:black">
								<h5>NEW BOOK</h5>
							</div>
					<div class="row">
						<div class="col-sm-6 col-xs-6 goleft">
							<p><i class="fa fa-book"></i>Harry Potter</p>
						</div>
						<div class="col-sm-6 col-xs-6"></div>
					</div>
					<div class="centered">
						<img src="<?php echo base_url(); ?>assets/img/product.png" width="120"> 
					</div>
					</div>
						
					</div>
					<!-- new book 1 end -->

					<!-- new book 2 start-->

					<div class="col-md-4 col-sm-4 mb">
					<div class="white-panel pn">
							<div class="white-header" style="background-color:black">
								<h5>NEW BOOK</h5>
							</div>
					<div class="row">
						<div class="col-sm-6 col-xs-6 goleft">
							<p><i class="fa fa-book"></i>Matahari</p>
						</div>
						<div class="col-sm-6 col-xs-6"></div>
					</div>
					<div class="centered">
						<img src="<?php echo base_url(); ?>assets/img/ui-danro.jpg" width="120"> 
					</div>
					</div>
						
					</div>
					<!-- new book 2 end -->

					<!-- new book 3 start-->

					<div class="col-md-4 col-sm-4 mb" >
					<div class="white-panel pn" >
							<div class="white-header" style="background-color:black">
								<h5>NEW BOOK</h5>
							</div>
					<div class="row">
						<div class="col-sm-6 col-xs-6 goleft">
							<p><i class="fa fa-book"></i>My Deer</p>
						</div>
						<div class="col-sm-6 col-xs-6"></div>
					</div>
					<div class="centered">
						<img src="<?php echo base_url(); ?>assets/img/ui-sam.jpg" width="120"> 
					</div>
					</div>
						
					</div>
					<!-- new book 3 end -->


					<!-- Diagram Pengunjung per hari start -->
<!-- 
					<div class="col-md-4 col-sm-4 mb">
						<div class="darkblue-panel pn">
							<div class="darkblue-header">
								<h5>Visitor diagram a month</h5>
							</div>
						<div class="chart mt">
							<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width ="1" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,168,267,287,150,240,367,301,405,309]"></div>
						</div>
						</div>
						<p class="mt"><b>98618919</b><br/>visitor</p>
					</div>
 -->
					<!-- Diagram Pengunjung per hari end -->


		</section>

	</section>