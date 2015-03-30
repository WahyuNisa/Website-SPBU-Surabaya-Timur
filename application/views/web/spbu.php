<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ASIK Surabaya</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?=base_url()?>assets/css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">

        <script src="<?=base_url()?>assets/<?=base_url()?>assets/<?=base_url()?>assets/<?=base_url()?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.html">ASIK Surabaya</a></li>
						<li>
							<a href="<?php echo site_url('web'); ?>">SPBU</a>
						</li>
						<li>
							<a href="features.html">Hotel</a>
						</li>
						<li>
							<a href="credits.html">Sport Center</a>
						</li>
						<li>
							<a href="credits.html">Kuliner</a>
						</li>
						<li>
							<a href="credits.html">Bengkel</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

        <!-- Homepage Slider -->
        <div class="homepage-slider">
        	<div id="sequence">
				<ul class="sequence-canvas">
					<?php foreach ($slide as $data):?>
					<!-- Slide 1 -->
					<li class="bg4">
						<!-- Slide Title -->
						<h2 class="title"><?php echo $data->nama_spbu; ?></h2>
						<!-- Slide Text -->
						<h3 class="subtitle"><?php echo $data->alamat; ?></h3>
						<!-- Slide Image -->
						<img class="slide-img" src="<?=base_url()?>assets/img/<?php echo $data->gambar; ?>" alt="Slide 1" />
					</li>
					<?php endforeach;?>
				</ul>
				<div class="sequence-pagination-wrapper">
					<ul class="sequence-pagination">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</div>
			</div>
        </div>
        <!-- End Homepage Slider -->

		<!-- Press Coverage -->
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<?php foreach ($spbusearch as $data):?>
							<div class="row service-wrapper-row">
			        			<div class="col-sm-4">
			        				<div class="service-image">
			        					<img src="<?=base_url()?>assets/img/<?php echo $data->gambar; ?>" alt="Service Name">
			        				</div>
			        			</div>
			        			<div class="col-sm-8">
			    					<h3><a href="<?php echo site_url('web/info/'.$data->id_spbu); ?>"><?php echo $data->nama_spbu; ?></a></h3>
			    					<table>
			    						<tr>
			    							<td width="15%">No SPBU </td>
			    							<td width="5%"> : </td>
			    							<td><?php echo $data->no_spbu; ?></td>
			    						</tr>
			    						<tr>
			    							<td>Alamat </td>
			    							<td> : </td>
			    							<td><?php echo $data->alamat; ?></td>
			    						</tr>
			    					</table>
			    				</div>
							</div>
							<?php endforeach;?>
							<div class="pagination-wrapper ">
								<ul class="pagination pagination-lg">
									<li class="disabled"><a href="#">Previous</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">6</a></li>
									<li><a href="#">7</a></li>
									<li><a href="#">8</a></li>
									<li><a href="#">9</a></li>
									<li><a href="#">10</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Blog Post -->
					<!-- Sidebar -->
					<div class="col-sm-4 blog-sidebar">
						<h4>Pencarian Lokasi SPBU</h4>
						<form action="<?php echo site_url('web/cari'); ?>" method="post">
							<div class="input-group">
								<input class="form-control input-md" name="lokasi" id="appendedInputButtons" type="text">
								<span class="input-group-btn">
									<button class="btn btn-md" type="submit">Cari</button>
								</span>
							</div>
						</form>
						<h4>Pencarian Fasilitas SPBU</h4>
						<form action="<?php echo site_url('web/cari'); ?>" method="post">
							<div class="input-group">
								<input class="form-control input-md" name="fasilitas" id="appendedInputButtons" type="text">
								<span class="input-group-btn">
									<button class="btn btn-md" type="submit">Cari</button>
								</span>
							</div>
						</form>
						<h4>SPBU Terpopuler</h4>
						<ul class="recent-posts">
							<?php foreach ($spbu as $data):?>
							<li><a href="#"><?php echo $data->nama_spbu; ?></a></li>
							<?php endforeach;?>
						</ul>
					</div>
	    		</div>
			</div>
		</div>
		<!-- Press Coverage -->

		<!-- Services -->

	    <!-- Footer -->
	   

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.fitvids.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.sequence-min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.bxslider.js"></script>
        <script src="<?=base_url()?>assets/js/main-menu.js"></script>
        <script src="<?=base_url()?>assets/js/template.js"></script>

    </body>
</html>