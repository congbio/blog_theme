<!DOCTYPE html>
<![if|E 8]>
<html <?php language_attributes(); ?> class="ie8">
<![endif]>
<![if!|E]>
<html <?php language_attributes(); ?>>
<![endif]>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
   
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> -->
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="profile" href="http://gmgp.org/xfn/11" /> -->

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">

        <header class="header">
           
            <?php congbio_logo(); ?>
            <div class="nav_icon" id="nav_reponsive">
            <i onclick="hide()" class="fa fa-times" aria-hidden="true"></i>
                <?php congbio_menu('primary-menu'); ?>
                <div class="header_icon">
                    <a href="https://facebook.com/"> <i class="fa  fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="https://youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="header__bars" id="header_baricon">
                <i onclick="show()" class="fa fa-bars" aria-hidden="true"></i>
            </div>


        </header>
      