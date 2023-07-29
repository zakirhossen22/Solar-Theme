<?php get_header();
    /*
    Template Name: Service Template
    
    */
    ?>
    <main>
    <?php get_template_part('inc/breadcump');?>

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
                                <span><?php the_category();?></span>
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