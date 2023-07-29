<?php



function buson_setup(){
       add_theme_support('title-tag');
       add_theme_support('post-thumbnails',array('post','sliders','trusted','services','teams','testimonials','cases','gallerys'));
      
       load_theme_textdomain('buson');
       register_nav_menus(array(
              'primary-menu'=> __('Primary menu', 'buson')
       ));       
}
add_action( 'after_setup_theme', 'buson_setup');

function buson_assets() {
       wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
       wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
       wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), '1.0.0', 'all' );
       wp_enqueue_style( 'font-awsome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
       wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
       wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
       wp_enqueue_style( 'theme', get_stylesheet_uri() );

       wp_enqueue_script( 'min', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array('jquery'), '1.0.0', true );
       wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
       wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
       wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );
       wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
       wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
       wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), '1.0.0', true );
       wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true ); 
         
}    
add_action( 'wp_enqueue_scripts', 'buson_assets');

// ---custom-post-function---///
function buson_custom_posts() {
       register_post_type('sliders',array(
              'labels' => array(
                     'name' => __('Sliders','buson'),
                     'singular_name' =>__('Slider','buson')
              ),
              'public' => true,
              'show_ui' => true,
              'supports' => array( 'title', 'editor', 'thumbnail','custom-fields'),
              'show_in_rest'       => true,
              'menu_icon' => 'dashicons-slides'
       ));
       register_post_type('trusted',array(
              'labels' => array(
              'name' => __('Trusteds','buson'),
              'singular_name' =>__('Trusted','buson')
                     ),
              'public' => true,
              'show_ui' => true,
              'supports' => array( 'title', 'editor','custom-fields','thumbnail'),
              'show_in_rest'       => true,
              'menu_icon' => 'dashicons-admin-appearance'
       ));
       
       register_post_type('services',array(
              'labels' => array(
              'name' => __('Services','buson'),
              'singular_name' =>__('service','buson')
                     ),
              'public' => true,
              'show_ui' => true,
               'supports' => array( 'title', 'editor','thumbnail'),
              'show_in_rest'       => true,
               'menu_icon' => 'dashicons-admin-appearance'
       ));

       register_post_type('teams',array(
              'labels' => array(
              'name' => __('Teams','buson'),
              'singular_name' =>__('Team','buson')
              ),
              'public' => true,
              'show_ui' => true,
              'supports' => array( 'title','custom-fields','thumbnail'),
              'menu_icon' => 'dashicons-admin-appearance'
              ));

              register_post_type('testimonials',array(
              'labels' => array(
              'name' => __('Testimonials','buson'),
              'singular_name' =>__('Testimonial','buson')
              ),
              'public' => true,
              'show_ui' => true,
              'supports' => array( 'title','custom-fields','thumbnail','editor'),
              'menu_icon' => 'dashicons-testimonial'
              ));
              
              register_post_type('cases',array(
              'labels' => array(
              'name' => __('Cases','buson'),
              'singular_name' =>__('Case','buson')
              ),
              'public' => true,
              'show_ui' => true,
              'supports' => array( 'title','thumbnail','editor'),
              'menu_icon' => 'dashicons-testimonial'
              )); 
              
}
add_action( 'init', 'buson_custom_posts');
// ---buson-options-page-function--//
if( function_exists('acf_add_options_page')) {
       acf_add_options_page(array(
              'page_title' 	=> 'Buson Options','buson',
              'menu_title'	=> 'Buson Options','buson',
              'menu_slug' 	=> 'buson-options',
              'capability'	=> 'edit_posts',
              'redirect'	=> false,
       ));
       
       acf_add_options_sub_page(array(
              'page_title' 	=> 'Buson Call Settings','buson',
              'menu_title'	=> 'Request for call','buson',
              'parent_slug'	=> 'buson-options',
       ));
       
       acf_add_options_sub_page(array(
              'page_title' 	=> 'Buson Header Settings','buson',
              'menu_title'	=> 'Header','buson',
              'parent_slug'	=> 'buson-options',
       ));
       
       acf_add_options_sub_page(array(
              'page_title' 	=> 'Buson Footer Settings','buson',
              'menu_title'	=> 'Footer','buson',
              'parent_slug'	=> 'buson-options',
       ));       
}   

// ----register-sidebar----//
function buson_widgets_init() {
       register_sidebar( array(
              'name'          => __( 'Main Sidebar', 'buson' ),
              'id'            => 'sidebar-1',
              'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
              'before_widget' => ' ',
              'after_widget'  => ' ',
              'before_title'  => '<h4>',
              'after_title'   => '</h4>',
        ) );
       
       
        register_sidebar( array(
           'name'          => __( 'sidebar-4', 'buson' ),
           'id'            => 'sidebar-4',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
           'before_widget' => '',
           'after_widget'  => ' ',
           'before_title'  => '<h4>',
           'after_title'   => '</h4>',
       ) ); 
        register_sidebar( array(
           'name'          => __( 'sidebar-5', 'buson' ),
           'id'            => 'sidebar-5',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
           'before_widget' => '',
           'after_widget'  => ' ',
           'before_title'  => '<h4>',
           'after_title'   => '</h4>',
       ) ); 
       register_sidebar( array(
           'name'          => __( 'Footer 2', 'buson' ),
           'id'            => 'footer-2',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
           'before_widget' => '<div class="footer-tittle">',
           'after_widget'  => '</div>',
           'before_title'  => '<h4>',
           'after_title'   => '</h4>',
       ) ); 
       register_sidebar( array(
           'name'          => __( 'Footer 3', 'buson' ),
           'id'            => 'footer-3',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
           'before_widget' => '<div class="footer-tittle">',
           'after_widget'  => '</div>',
           'before_title'  => '<h4>',
           'after_title'   => '</h4>',
       ) );  
       register_sidebar( array(
           'name'          => __( 'Footer 4', 'buson' ),
           'id'            => 'footer-4',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
           'before_widget' => '<div class="footer-tittle">',
           'after_widget'  => '</div>',
           'before_title'  => '<h4>',
           'after_title'   => '</h4>',
       ) );
   }
   add_action( 'widgets_init', 'buson_widgets_init');

// ----classic-widgets-function----//   
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

 

// ----recent-post-widgets---//
class Latest_Post extends WP_Widget {
    function __construct() {
 
        parent::__construct(
            'latest-post-widget',  // Base ID
            __('Latest Post Widget')   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Latest_Post' );
        });
 
    }
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
    ?>
    
    <?php
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
        );
        $query = new WP_Query($args);
        while( $query -> have_posts()) {
        $query -> the_post();
        ?>
        <div class="media post_item">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="post">
        <div class="media-body">
            <a href="<?php the_permalink();?>">
                <h3><?php the_title();?></h3>
            </a>
            <p><?php the_date();?></p>
        </div>
        </div>
        
        <?php
        
        }
        
    }
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'buson' );
       
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'buson' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        
        <?php
    }
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        
        return $instance;
    }
}
$latest_post = new Latest_Post();

// ----category-count-widgets---//
class Buson_Category extends WP_Widget {
    function __construct() {
 
        parent::__construct(
            'catgory-widget',  // Base ID
            __(' Buson Category Widget')   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Buson_Category' );
        });
 
    }
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
    ?>
        
      
        <ul class="list cat-list">
            <?php
            $cats = get_categories();
            foreach($cats as $cat){
            ?>
            <li>
            <a href="#" class="d-flex">
                <p><?php echo $cat->cat_name;?></p>
                <p>(<?php echo $cat->category_count;?>)</p>
            </a>
            </li>
            <?php
            }
            ?>
        </ul>
   <?php
    }
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'buson' );
       
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'buson' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        
        <?php
    }
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        
        return $instance;
    }
}
$category = new Buson_Category();

// ----Nwesletter-widgets---//
class Newsletter extends WP_Widget {
    function __construct() {
 
        parent::__construct(
            'newsletter-widget',  // Base ID
            __(' Newsletter Widget')   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Newsletter' );
        });
 
    }
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
    ?>
        
      
       
   <?php
    }
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'buson' );
       
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'buson' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        
        <?php
    }
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        
        return $instance;
    }
}
$newsletter = new Newsletter();
// ----Tagclouds-widgets---//
class Tagclouds extends WP_Widget {
    function __construct() {
 
        parent::__construct(
            'tagclouds-widget',  // Base ID
            __(' Tagclouds Widget')   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Tagclouds' );
        });
 
    }
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
    ?>
        <ul class="list">
        <?php
            $tags = get_tags();
            foreach($tags as $tag){
            ?>
            <li>
            <a href="#"><?php echo  $tag->name;?></a>
            </li>
            <?php
            
            }
            ?>
        </ul>
   <?php
    }
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'buson' );
       
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'buson' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        
        <?php
    }
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        
        return $instance;
    }
}
$tagclouds = new Tagclouds();

//------comments-list-function-----//
function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            ?>
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <?php 
        } ?>
     
 
        <div class="comment-meta commentmetadata">
        <?php comment_text(); ?>
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
            printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); 
                /* translators: 1: date, 2: time */
                printf( 
                    __('%1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
             ?>
        </div>
 
        
        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

/**
 * Change comment form textarea to use placeholder
 *
 * @since  1.0.0
 * @param  array $args
 * @return array
 */
function ea_comment_textarea_placeholder( $args ) {
	$args['comment_field']        = str_replace( 'textarea', 'textarea placeholder="comment"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'ea_comment_textarea_placeholder' );

function be_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="name*"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="email*"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'be_comment_form_fields' );

add_filter( 'comment_form_default_fields', 'tu_comment_form_hide_cookies_consent' );
function tu_comment_form_hide_cookies_consent( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}