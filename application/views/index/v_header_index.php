<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="<?php echo base_url('assets/tealdark/vendor/perfect-scrollbar.css')?>" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="<?php echo base_url('assets/tealdark/vendor/fix-footer.css')?>" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="<?php echo base_url('assets/tealdark/css/material-icons.css')?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('assets/tealdark/css/material-icons.rtl.css')?>" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="<?php echo base_url('assets/tealdark/css/fontawesome.css')?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('assets/tealdark/css/fontawesome.rtl.css')?>" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="<?php echo base_url('assets/tealdark/css/preloader.css')?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('assets/tealdark/css/preloader.rtl.css')?>" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="<?php echo base_url('assets/tealdark/css/app.css')?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('assets/tealdark/css/app.rtl.css')?>" rel="stylesheet">





</head>

<body class="layout-navbar-mini-fixed-bottom">
    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header bg-dark js-mdk-header mb-0" data-effects="waterfall blend-background" data-fixed data-condenses>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt" id="default-navbar" data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="<?php echo base_url('')?>" class="navbar-brand">
                      <img class="navbar-brand-icon" src="<?php echo base_url('assets/tealdark/images/logo/white-100@2x.png')?>" width="30" alt="">
                      <img src="<?php echo base_url('assets/tealdark/images/logo/white-100@2x.png')?>" class="navbar-brand-icon" width="30" alt="">
                        <span class="d-none d-md-block">Tell Me Basdat</span>
                    </a>

                    <button class="btn btn-black mr-16pt" data-toggle="modal" data-target="#courses">Courses <i class="material-icons">arrow_drop_down</i></button>

                    <form class="search-form search-form--black search-form-courses d-none d-md-flex" action="library-filters.html">
                        <input type="text" class="form-control" placeholder="What would you like to learn?">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </form>

                    <!-- Main Navigation -->

                    <ul class="nav navbar-nav ml-auto flex-nowrap" style="white-space: nowrap;">
                        <li class="d-none d-sm-flex nav-item">
                            <a href="<?php echo base_url('index.php/Welcome/login')?>" class="btn btn-accent">LOGIN</a>
                        </li>
                    </ul>



                    <!-- // END Main Navigation -->

                </div>

            </div>
        </div>

        <!-- // END Header -->
