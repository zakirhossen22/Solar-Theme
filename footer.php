<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php the_field('logo','option');?>" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                   <p><?php the_field('after_logo_text','option');?></p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                            <?php
                               $footer_socials = get_field('footer_social','option');
                               foreach($footer_socials as $social) {
                                   ?>
                                <a href="<?php echo $social['footer_social_link'];?>"><i class="fab <?php echo $social['_footer_social_icon'];?>"></i></a>
                                <?php   
                               }
                               ?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                       <?php 
                        if (is_active_sidebar( 'footer-2' )) { 
                                dynamic_sidebar( 'footer-2' ); 
                        }
                        ?>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                       <?php 
                        if (is_active_sidebar( 'footer-3' )) { 
                                dynamic_sidebar( 'footer-3' ); 
                        }
                        ?>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                       <?php 
                        if (is_active_sidebar( 'footer-4' )) { 
                                dynamic_sidebar( 'footer-4' ); 
                        }
                        ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><?php the_field('footer_bottom','option');?></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
        <?php wp_footer();?>
    </body>
</html>