<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Buson</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">	
   </head>
    <?php wp_head();?>
   <body <?php body_class();?>>
       
    

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>  
                                        <?php
                                        $location = get_field('location','option');
                                        $email = get_field('email','option');
                                        ?>   
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $location;?></li>
                                        <li><i class="fas fa-envelope"></i><?php echo $email;?></li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                    <?php
                                        $socials = get_field('header_social','option');
                                        foreach($socials as $social) {
                                            ?>
                                            
                                            <li><a href="<?php echo $social['link'];?>"><i class="fab <?php echo $social['icon'];?>"></i></a></li>
                                        <?php
                                        } 
                                        ?>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                <?php 
                                    wp_nav_menu(array(
                                    'theme_location'=> 'primary-menu',


                                    ));
                                 ?>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
