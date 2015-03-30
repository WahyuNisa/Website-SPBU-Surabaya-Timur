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

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php 
		foreach($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>
		<style type='text/css'>
		body
		{
			font-family: Arial;
			font-size: 14px;
		}
		a {
		    color: blue;
		    text-decoration: none;
		    font-size: 14px;
		}
		a:hover
		{
			text-decoration: underline;
		}
		</style>
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
						<li class="logo-wrapper"><a href="<?php echo site_url('admin/user'); ?>">ASIK Surabaya</a></li>
						<li>
							<a href="<?php echo site_url('admin/user'); ?>">User</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/spbu'); ?>">SPBU</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/produk'); ?>">Produk</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/fasilitas'); ?>">Fasilitas</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/komentar'); ?>">Komentar</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/logout'); ?>">Logout</a>
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
						<h1>User</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="row service-wrapper-row">
        				<?php echo $output; ?>
    				</div>
				</div>
			</div>
		</div>

	    <!-- Footer -->

    </body>
</html>