<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php wp_title(); ?>
    </title>
    <?php wp_head() ?>

</head>

<body>
    <!-- Navigation -->
    <header>
        <div class="whatsup">
            <a href="https://wa.me/971585302306" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/img/wahtsup-extended.png" alt="whatsUp" /></a>
        </div>
        <div class="img-for-nav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="<?php bloginfo("url"); ?>">
                        <img src="<?php bloginfo("template_directory"); ?>/img/offical-logo.png" alt="bule crayon logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php bloginfo("url"); ?>">HOME </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php bloginfo("url"); ?>/about-us">ABOUT </a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SERVICES
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php bloginfo("wpurl"); ?>/start-your-business">Start your business</a>
                                    <a class="dropdown-item" href="<?php bloginfo("wpurl"); ?>/run-your-business">Run your business</a>
                                    <a class="dropdown-item" href="<?php bloginfo("wpurl"); ?>/marketing">Marketing & Events</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php bloginfo("wpurl"); ?>/gallery">GALLERY <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php bloginfo("wpurl"); ?>/contact">CONTACT <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>