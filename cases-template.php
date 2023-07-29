<?php get_header();
    /*
    Template Name: Cases Template
    
    */
    ?>

    <main>
    <?php get_template_part('inc/breadcump');?>
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                <?php
                    $args = array(
                    'post_type' => 'cases',
                    'posts_per_page' => 10
                    );
                    $query = new WP_Query($args);
                    while( $query -> have_posts()) {
                    $query -> the_post();
                    ?>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-cases-img  size mb-30">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                            <!-- img hover caption -->
                           <div class="single-cases-cap single-cases-cap2">
                               <h4><a href="single-case.html"><?php the_title(); ?></a></h4>
                                <p><?php the_content(); ?></p>
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
        <!-- Completed Cases end -->
    </main>
    <?php get_footer();?>