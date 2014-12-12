<?php
/*  header.php
 *  the navigation bar for every pages
 *
 *   Revision
 * 	Created by Terence at 10/29/2014
 *      Modified to adapt new template by Terence: 11/04/2014
 */

include_once "includes/utilities.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php if (isset($page_description)) echo $page_description; ?>">
        <meta name="author" content="<?php if (isset($page_author)) echo $page_author; ?>">
        <!-- echo all required meta data if page's meta is set -->
        <?php
if (isset($page_meta) && is_array($page_meta)) {
    foreach ($page_meta as $meta) {
        echo $meta;
    }
}
        ?>

        <link rel="icon" href="../../favicon.ico">

        <!-- show page title if page's title is set -->
        <title><?php if (isset($page_title)) echo $page_title; ?></title>

        <!-- required for header -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- echo all required css if page's css is set -->
        <?php
if (isset($page_css) && is_array($page_css)) {
    foreach ($page_css as $css) {
        echo $css;
    }
}

//echo javascript files
if (isset($page_js) && is_array($page_js)) {
    foreach ($page_js as $js) {
        echo $js;
    }
}
        ?>

        <link href="css/navbar-fixed-top.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
        <script>
            $(document).ready(function () {
            });

        </script>
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" rel="home" href="index.php" title="UWAFT">
                    <img id="logo" src="images/ecologo.png">
                </a>
                <!--<a id="pageTitle" class="navbar-brand" href="#">UWAFT</a>-->
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">

                    <li class="dropdown <?php if (getCurrentFilename() == "aboutUs.php") echo "active"; ?>">
                        <a href="aboutUs.php" class="dropdown-toggle" data-toggle="dropdown">About us<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="aboutUs.php">History</a></li>
                            <li><a href="aboutUs.php#missionVision">Our Mission and Vission</a></li>
                        </ul>
                    </li>
                    <li class="dropdown <?php if (getCurrentFilename() == "carPage.php") echo "active" ?> ">
                        <a href="carpage.php" class="dropdown-toggle" data-toggle="dropdown">Our Fleet<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="carPage.php">Our Products</a></li>
                            <li><a href="carPage.php#present">201? Chevrolet Camaro</a></li>
                            <li><a href="carPage.php#2013">2013 Chevrolet Malibu</a></li>
                            <li><a href="carPage.php#2009">2009 Saturn Vue</a></li>
                            <li><a href="carPage.php#2005">2005 Chevrolet Equinox</a></li>
                            <li><a href="carPage.php#1999">1999 Chevrolet Silverado</a></li>
                        </ul>
                    </li>
                    <li <?php if (getCurrentFilename() == "teampage.php") echo "class=\"active\""; ?>><a href="teampage.php">Team</a></li>
                    <li class="dropdown <?php if (getCurrentFilename() == "publicEvent.php" || getCurrentFilename() == "teamSchedule.php") echo "active"; ?>">
                        <a href="publicEvent.php" class="dropdown-toggle" data-toggle="dropdown">Calendar<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li  <?php if (getCurrentFilename() == "publicEvent.php") echo "class=\"active\"" ?>><a href="publicEvent.php">Public Events</a></li>
                            <li <?php if (getCurrentFilename() == "teamSchedule.php") echo "class=\"active\"" ?>><a href="teamSchedule.php">Team Schedule</a></li>
                        </ul>
                    </li>
                    <li class="dropdown <?php if (getCurrentFilename() == "savingCal.php") echo "active"; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Environment and Sustainability</a></li>
                            <li><a href="#">Benefits of hybrids</a></li>
                            <li><a href="#">Classroom tools</a></li>
                            <li <?php if (getCurrentFilename() == "savingCal.php") echo "class=\"active\"" ?>><a href="savingCal.php">Savings Calculator</a></li>
                        </ul>
                    </li>
                    <li <?php if (getCurrentFilename() == "sponsorship.php") echo "class=\"active\""; ?>><a href="sponsorship.php">Our Sponsors</a></li>
                    <li><a href="/wordpress/">Blog</a></li>
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
            </div><!--/.nav-collapse -->
        </div>



