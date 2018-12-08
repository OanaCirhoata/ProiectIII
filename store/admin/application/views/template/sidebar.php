<!DOCTYPE html>
<html>

    <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/admin/') ?>css/font-face.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css"> 

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/admin/') ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/admin/') ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/') ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/') ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/') ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/') ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/') ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/admin/') ?>css/theme.css" rel="stylesheet" media="all">

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
</head>
 
<body class="animsition" style="animation-duration: 900ms; opacity: 1;">

<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url('assets/') ?>img/logo.png" alt="Cool Admin">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 ps">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Catalog <span style="margin-left: 3px;"><i class="fas fa-sort-down"></i></span></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('categorii')?>">Categorii</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('produse')?>">Produse</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('comenzi')?>">
                                <i class="fas fa-table"></i>Comenzi</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('clienti')?>">
                                <i class="fas fa-table"></i>Clienti</a>
                        </li>
                                             
                    </ul>
                </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
        </aside>
