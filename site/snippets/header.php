<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $site->language() ?>"> <!--<![endif]-->
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link rel="shortcut icon" type="image/ico" href="<?php echo $site->url() ?>/assets/images/favicon.ico"/>

  <link type="text/javascript" href="https://code.jquery.com/jquery-2.2.2.min.js">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

  <?php echo css('assets/css/bootstrap.min.css') ?>
  <?php echo css('assets/css/main.css') ?>
  
  <?php echo js('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>

</head>
<body>
	<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<nav class="navbar navbar-default navbar-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $site->url() ?>"><img src="<?php echo url('assets/images/logo_IC_mtl.png') ?>" alt="<?php echo $site->title()->html() ?>" class="img-responsive" /></a>
			</div>
	    <?php snippet('menu') ?>
		</div>
	</nav>
