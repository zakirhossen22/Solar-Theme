<?php get_header();
    /*
    Template Name: About Template
    
    */
    ?>

    <main>
    <?php get_template_part('inc/breadcump');?>
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
                                <span><?php?></span>
                                <h4><a href="single-blog.html"><?php the_title();?></a></h4>
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