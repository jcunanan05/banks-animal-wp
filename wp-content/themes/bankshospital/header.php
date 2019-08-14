<!doctype html>

<!--[if IEMobile 7 ]>
<html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]>
<html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>
<html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->
    <!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
    <!-- media-queries.js (fallback) -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- html5.js -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- respond.js -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>
<!--Header-->
<header class="header--fixed-wrapper">
    <div class="white-bg block">
        <div class="content-container">
            <div class="header--container pv15">
                <!--logo-->
                <div class="col-sm-2 header--logo">
                    <a href="<?php echo home_url(); ?>" class="block">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.jpg"
                             alt="Banks Animal Hospital" class="img-responsive"/>
                    </a>
                </div>

                <!--mobile nav trigger-->
                <div class="mobile-nav-trigger visible-xs menu-button">
                    <span class="hidden">Menu</span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <!--Main menu-->
                <nav class="col-sm-8" id="nav--container">
                    <?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
                </nav>

                <!--App links-->
                <div class="col-sm-2 hidden-xs header--sub-app">
                    <a href="<?php echo home_url(); ?>/contact-us" class="btn btn--subscribe hidden-xs ">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="block header--fixed-spacer" id="home">
    <div class="application-container">
        <div class="block white-bg">
            <div class="row">
