    <?php get_header();

    /*
    Template Name: Home Template
    
    */
    ?>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <?php
                $args = array(
                   'post_type' => 'sliders',
                   'post_per_page' => 3
                );
                $query = new WP_Query($args);
                while( $query -> have_posts()) {
                   $query -> the_post();
                ?>
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url();?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 mx-auto">
                                <div class="hero__caption">
                                    <?php
                                    if(class_exists('ACF')){
                                        $subtitle = get_field('slider_subtitle');
                                        $btn_text = get_field('slider_btn_text');
                                        $btn_url = get_field('slider_btn_link');
                                    }
                                    ?>
                                    <p><?php echo $subtitle;?></p>
                                    <h1><?php the_title();?></h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <?php
                                        if(get_field('slider_btn_link')){
                                            ?>
                                            <a href="<?php echo $btn_url;?>" class="btn hero-btn"><?php echo $btn_text;?></a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?> 
            </div>
        </div>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <?php
                $args = array(
                   'post_type' => 'trusted',
                   'posts_per_page' => 1
                );
                $query = new WP_Query($args);
                while( $query -> have_posts()) {
                   $query -> the_post();
                ?>
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                           <h2><?php the_title();?></h2>
                           <p><?php the_content();?></p>
                            <a href="<?php the_field('trusted_btn_link');?>" class="btn trusted-btn"><?php the_field('trusted_btn');?></a>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
            
        </div>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                $args = array(
                   'post_type' => 'services',
                   'posts_per_page' => 6
                );
                $query = new WP_Query($args);
                while( $query -> have_posts()) {
                   $query -> the_post();
                ?>
                         <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                            </div>
                            <div class="services-caption">
                                <h4><?php the_title();?></h4>
                                <p><?php the_content();?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
                </div>
            </div>
        </div>
        <!-- services Area End-->

        <!-- Request Back Start -->
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <?php
                            if(class_exists('ACF')){
                            $heading = get_field('request_heading','option');
                            $text = get_field('request_designation','option');
                            $btn_text = get_field('request_btn_text','option');
                            $btn_url = get_field('request_btn_url','option');
                            }
                            ?>
                            <h3><?php echo $heading;?></h3>
                            <p><?php echo $text;?></p>
                            <?php
                            if(get_field('request_btn_url','option')){

                                ?>
                                <a href="<?php echo $btn_url;?>" class="btn trusted-btn"><?php echo $btn_text;?></a>
                                <?php   
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>Completed Cases</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali
                                quUt enim ad minim veniam.
                                quis nostrud exercitation ullamco laboris 
                                nierci si ut.</p>
                            <a href="gallery.html" class="border-btn border-btn2">See more</a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 
                            <div class="single-cases-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/service/completed_case_1.png" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                               </div>
                            </div>
                            <div class="single-cases-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/service/completed_case_2.png" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                   <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                               </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                $args = array(
                   'post_type' => 'teams',
                   'posts_per_page' => 4
                );
                $query = new WP_Query($args);
                while( $query -> have_posts()) {
                   $query -> the_post();
                ?>
                <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4><?php the_title();?><span><?php the_field('team_subtitle');?></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
                    
                    
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- Testimonial Start -->
        <div class="testimonial-area fix">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <?php
                            $args = array(
                            'post_type' => 'testimonials',
                            'posts_per_page' => 4
                            );
                            $query = new WP_Query($args);
                            while( $query -> have_posts()) {
                            $query -> the_post();
                            ?>
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="<?php the_post_thumbnail_url();?>" class="ani-btn " alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p><?php the_content();?></p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span><?php the_title();?><span><?php the_field('testimonial_subtitle');?></span> </span>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <div class="recent-area section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Recent News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                    );
                    $query = new WP_Query($args);
                    while( $query -> have_posts()) {
                    $query -> the_post();
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                            </div>
                            <div class="recent-cap">
                                <span><?php ?></span>
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                <p><?php the_date();?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                    }
                    wp_reset_postdata();
                    ?>
                    
                </div>
            </div>
        </div>
        <!-- Recent Area End-->
    </main>
    <?php get_footer();?>
  