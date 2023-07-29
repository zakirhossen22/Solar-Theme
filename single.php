   <?php get_header();?>

   <!-- slider Area Start-->
     <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php the_title();?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php the_title();?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i><?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                foreach($posttags as $tag) {
                                    echo $tag->name . ' , '; 
                                }
                            }
                                ?></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number();?></a></li>
                     </ul>
                    <?php the_content();?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                    <?php
                    global $post;
                    $author_id = $post ->post_author;
                    ?>
                    <img src="<?php echo esc_url( get_avatar_url( $author_id->id ) ); ?>" />
                    <?php
                  ?>
               
                     <div class="media-body">
                        <a href="#">
                           <h4><?php echo get_the_author_meta('display_name',$author_id); ?></h4>
                        </a>
                        <p><?php echo get_the_author_meta('description',$author_id); ?></p>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <?php
               if ( comments_open() || get_comments_number() ) :
                     comments_template();
                  endif;
                  ?>
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
   <?php get_footer();?>