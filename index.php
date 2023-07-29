<?php get_header();?>

     <!-- slider Area Start-->
     <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Our Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    <?php
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5
                    );
                    $query = new WP_Query($args);
                    while( $query -> have_posts()) {
                    $query -> the_post();
                    ?>
                <article class="blog_item">
                    <div class="blog_item_img">
                        <img class="card-img rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <a href="#" class="blog_item_date">
                            <h3><?php the_time( 'd')?></h3>
                            <p><?php the_time( 'M')?></p>
                        </a>
                    </div>

                    <div class="blog_details">
                        <a class="d-inline-block" href="<?php the_permalink();?>">
                            <h2><?php the_title();?></h2>
                        </a>
                        <p><?php the_excerpt();?></p>
                        <ul class="blog-info-link">
                            <li><a href="#"><i class="fa fa-user"></i>
                            <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                foreach($posttags as $tag) {
                                    echo $tag->name . ' '; 
                                }
                            }
                                ?>
                            </a>
                            </li>
                            <li><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number();?></a>
                            </li>
                        </ul>
                    </div>
                </article>
                    <?php
                    }
                    wp_reset_postdata();
                    
                    ?>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                    <?php echo do_shortcode('[contact-form-7 id="564" title="News Key"]');?>
                  </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                    <?php dynamic_sidebar('sidebar-4');?>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                  <?php dynamic_sidebar('sidebar-1');?>
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                  <?php dynamic_sidebar('sidebar-5');?>
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                     <?php echo do_shortcode('[contact-form-7 id="548" title="Newsletter"]'); ?>
                  </aside>
               </div>
            </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <?php get_footer();?>