<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Asik Surabaya</title>
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

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCaIIcfxacs8oEWbTV0r4XwHADxQ6b4pw&sensor=false">
		</script>
		<?php
			foreach ($spbu as $data){
				$lat = $data->latitude;
				$long = $data->longitude;
				$nama = $data->nama_spbu;
			}
			
		?>
		<script type="text/javascript">
			var myCenter=new google.maps.LatLng(<?php echo $lat.', '.$long; ?>);
			var marker;
		   	function initialize() 
		   	{
		 	  	var mapOptions = {
			  	center:myCenter,
			  	zoom: 15, 
			  	};
				var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
				var marker=new google.maps.Marker({
				position:myCenter,
				animation:google.maps.Animation.BOUNCE
				});
				marker.setMap(map);
				var infowindow = new google.maps.InfoWindow({
				content:"<?php echo $nama; ?>"
				});
				infowindow.open(map,marker);
		   	}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
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

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Informasi SPBU</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<?php 
								foreach ($spbu as $data):
									$id = $data->id_spbu;
							?>
							<div class="single-post-title">
								<h3><?php echo $data->nama_spbu; ?></h3>
							</div>
							<div class="single-post-info">
							</div>
							<div class="single-post-image">
								<div id="googleMap" style="width:676px;height:380px;"></div>
							</div>
							<div class="single-post-content">
								<h3>Alamat</h3>
								<p><?php echo $data->alamat; ?></p>
							</div><div class="single-post-content">
								<h3>Jam Operasional</h3>
								<p><?php echo $data->jam_operasional; ?></p>
							</div>
							<?php endforeach;?>
							<div class="single-post-content">
								<h3>Fasilitas</h3>
								<?php foreach ($fasilitas as $data):?>
								<p><?php echo $data->fasilitas; ?></p>
								<?php endforeach;?>
							</div>
							<div class="single-post-content">
								<h3>Produk</h3>
								<?php foreach ($produk as $data):?>
								<p><?php echo $data->produk; ?> / <?php echo $data->harga; ?></p>
								<?php endforeach;?>
							</div>
							<!-- Comments -->
							<div class="post-coments">
								<h4>Komentar</h4>
								<?php foreach ($komentar as $data):?>
								<ul class="post-comments">
									<li>
										<div class="comment-wrapper">
											<div class="comment-author">
												<img src="<?=base_url()?>assets/img/user.png" alt="User Name"> <?php echo $data->nama; ?>(<?php echo $data->email; ?>)
											</div>
											<p>
												<?php echo $data->komentar; ?>
											</p>
											<!-- Comment Controls -->
											<div class="comment-actions">
												<span class="comment-date"><?php echo $data->tgl; ?></span>
												<a href="#" data-toggle="tooltip" data-original-title="Vote Up" class="show-tooltip"><i class="glyphicon glyphicon-thumbs-up"></i></a>
												<a href="#" data-toggle="tooltip" data-original-title="Vote Down" class="show-tooltip"><i class="glyphicon glyphicon-thumbs-down"></i></a>
												<span class="label label-success">+8</span>
												<a href="#" class="btn btn-micro btn-grey comment-reply-btn"><i class="glyphicon glyphicon-share-alt"></i> Reply</a>
											</div>
										</div>
									</li>
								</ul>
								<?php endforeach;?>
								<!-- Pagination -->
								<div class="pagination-wrapper ">
									<ul class="pagination pagination-sm">
										<li class="disabled"><a href="#">Previous</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
								<!-- Comments Form -->
								<h4>Tinggalkan Komentar</h4>
								<div class="comment-form-wrapper">
									<form class="" action="<?php echo site_url('web/info/'.$id); ?>" method="post">
				        				<div class="form-group">
				        				 	<label for="comment-name"><i class="glyphicon glyphicon-user"></i> <b>Nama</b></label>
											<input class="form-control" name="nama" id="comment-name" type="text" placeholder="">
										</div>
										<div class="form-group">
											<label for="comment-email"><i class="glyphicon glyphicon-envelope"></i> <b>Email</b></label>
											<input class="form-control" name="email" id="comment-email" type="text" placeholder="">
										</div>
										<div class="form-group">
											<label for="comment-message"><i class="glyphicon glyphicon-comment"></i> <b>Komentar</b></label>
											<textarea class="form-control" name="komentar" rows="5" id="comment-message"></textarea>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-large pull-right">Kirim</button>
										</div>
										<div class="clearfix"></div>
				        			</form>
								</div>
								<!-- End Comment Form -->
							</div>
							<!-- End Comments -->
						</div>
					</div>
					<!-- End Blog Post -->
					<!-- Sidebar -->
					<div class="col-sm-4 blog-sidebar">
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
							<?php foreach ($allspbu as $data):?>
							<li><a href="#"><?php echo $data->nama_spbu; ?></a></li>
							<?php endforeach;?>
						</ul>
					</div>
					<!-- End Sidebar -->
				</div>
			</div>
	    </div>

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