<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- title -->
    <title><?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Arunkumar M">
    <!-- description -->
    <meta name="description" content="POS is good site for purchasing the stationary items">
    <!-- keywords -->
    <meta name="keywords" content="Retails business, buy boards online">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default navbar-expand-lg bg-white pt-2">
            <div class="container nav-header-container">
                <!-- start logo -->
                <div class="col-md-12 p-0">
                    <div class="col-md-3 p-0 float-left">
                        <a href="/" title="" class="logo navbar-brand">
                            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="POS Logo"
                                class="logo-white">
                        </a>
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-9 p-0 float-left">
                        <div class="row">
                            <div class="col-md-12 p-0 d-none d-lg-block">
                                <!-- Search -->
                                <div class="col-md-8 float-left p-0">
                                    <form action="#" method="post" class="form-inline">
                                        <div class="form-group search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="keyword" placeholder="Search entire store here">
                                                <span class="input-group-addon">
                                                    <a href="" class="justify-item-center">Search</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- Email Id -->
                                <div class="col-md-4 float-right d-none d-md-block float-right text-right">
                                    <a href="mailto:prakathiofficesupplies@gmail.com">prakathiofficesupplies@gmail.com</a>
                                </div>
                            </div>  
                        </div>
                        <div class="row mt-3">
                                <div class="col-md-3 float-left p-0 d-none d-lg-block">
                                    <div class="row contact_header">
                                        <div class="col-md-3">
                                            <i class="fa fa-headphones"></i>
                                        </div>
                                        <div class="col-md-9 p-0">
                                           <p>Contact us 24/7</p>
                                           <p class="font-weight-bold"> +123 4567 8901</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 float-right float-right text-right p-0">
                                    <div class="col-md-12 p-0">
                                        <div class="navbar-collapse collapse alt-font" id="navbar-collapse-toggle-1">
                                            <?php
                                                wp_nav_menu(
                                                    array(
                                                        'theme-location' => 'top-menu',
                                                        'menu_class' => 'nav navbar-nav font-weight-700',
                                                    )
                                                )
                                            ?>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
