<?php
/*  header.php
 *  the navigation bar for every pages
 * 
 *   Revision
 * 	Created by Terence at 10/29/2014
 *      Modified to adapt new template by Terence: 11/04/2014
 */
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
        <link href="/UWAFT/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- echo all required css if page's css is set -->
        <?php
        if (isset($page_css) && is_array($page_css)) {
            foreach ($page_css as $css) {
                echo $css;
            }
        }
        ?>
        <link href="/UWAFT/css/navbar-fixed-top.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">UWAFT</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#contact">Vehicle</a></li>
                        <li><a href="#contact">Team</a></li>
                        <li><a href="#about">Sponsorship</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Environment <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Teaching Tool</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Outreach Information</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/UWAFT/blog/wordpress/">Blog</a></li>
                        <li><a href="#contact">Contact us</a></li>
                        <!--<li class="active"><a href="./">Fixed top</a></li>-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

