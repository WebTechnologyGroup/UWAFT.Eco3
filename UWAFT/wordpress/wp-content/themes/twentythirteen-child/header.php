<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
		<link href="/css/navbar-fixed-top.css" rel="stylesheet" type="text/css" >
        <link href="/css/font-awesome.css" rel="stylesheet" type="text/css" >
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="navbar navbar-default" role="navigation">
			
					<a class="navbar-brand" rel="home" href="http://localhost" title="UWAFT">
                        <img id="logo" src="/images/ecologo.png">
                    </a>

				<div class="navbar-collapse collapse" id="navbar">					
				<ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="http://localhost/aboutUs.php" class="dropdown-toggle" data-toggle="dropdown">About us<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="http://localhost/aboutUs.php">History</a></li>
                            <li><a href="http://localhost/aboutUs.php#missionVision">Our Mission and Vission</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="http://localhost/carpage.php" class="dropdown-toggle" data-toggle="dropdown">Our Fleet<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="http://localhost/carPage.php">Our Products</a></li>
                            <li><a href="http://localhost/carPage.php#present">201? Chevrolet Camaro</a></li>
                            <li><a href="http://localhost/carPage.php#2013">2013 Chevrolet Malibu</a></li>
                            <li><a href="http://localhost/carPage.php#2009">2009 Saturn Vue</a></li>
                            <li><a href="http://localhost/carPage.php#2005">2005 Chevrolet Equinox</a></li>
                            <li><a href="http://localhost/carPage.php#1999">1999 Chevrolet Silverado</a></li>
                        </ul>
                    </li>
                    <li ><a href="http://localhost/teampage.php">Team</a></li>
                    <li class="dropdown">
                        <a href="http://localhost/publicEvent.php" class="dropdown-toggle" data-toggle="dropdown">Calendar<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li ><a href="http://localhost/publicEvent.php">Public Events</a></li>
                            <li ><a href="http://localhost/teamSchedule.php">Team Schedule</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Environment and Sustainability</a></li>
                            <li><a href="#">Benefits of hybrids</a></li>
                            <li><a href="#">Classroom tools</a></li>
                            <li ><a href="http://localhost/savingCal.php">Savings Calculator</a></li>
                        </ul>
                    </li>
                    <li ><a href="../sponsorship.php">Our Sponsors</a></li>
                    <li class="active"><a href="/wordpress/">Blog</a></li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
                    <!-- search form -->
                    <form class="navbar-form navbar-right form-inline" role="search" action="http://www.google.ca/search" method="GET" style="margin-right:10px;">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Search..." name="q">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
                </ul>	
				</div>
			</div><!-- #navbar -->

				<h1 class="site-title">UWAFT Blog</h1>
				<h2 class="site-description">Our stories start here.</h2>
			</a>
			
		</header><!-- #masthead -->

		<div id="main" class="site-main">