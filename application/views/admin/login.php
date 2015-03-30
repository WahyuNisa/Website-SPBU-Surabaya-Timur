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

        <script src="<?=base_url()?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
						<h1>Login</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<?php if(!empty($message)){
                                echo $message;}
                            ?>
							<form role="form" role="form" action="<?php echo site_url('admin'); ?>" method="post">
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Username or Email</b></label>
									<input class="form-control" name="username" id="login-username" type="text" value="<?php echo set_value('username'); ?>">
		        				 	<?php echo form_error('username'); ?>
								</div>
								<div class="form-group">		        				 	
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" name="password" id="login-password" type="password" value="<?php echo set_value('password'); ?>">
									<?php echo form_error('password'); ?>
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Login</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

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