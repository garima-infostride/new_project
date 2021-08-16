<?php 

function fetch_scripts(){

    //stylesheets
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('animate.min.css', get_template_directory_uri().'/assets/vendor/animate.css/animate.min.css');
    wp_enqueue_style('aos.css', get_template_directory_uri().'/assets/vendor/aos/aos.css');
    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons.css', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('glightbox.min.css', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');
    wp_enqueue_style('swiper-bundle.min.css', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');
    
    wp_enqueue_style('style.css', get_template_directory_uri().'/assets/css/style.css');

    // Vendor JS Files
    wp_enqueue_script('aos.js',get_template_directory_uri().'/assets/vendor/aos/aos.js',array(),'1.1', true);
    wp_enqueue_script('bootstrap.bundle.min.js',get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),'1.1', true);
    wp_enqueue_script('glightbox.min.js',get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js',array(),'1.1', true);
    wp_enqueue_script('isotope.pkgd.min.js',get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js',array(),'1.1', true);
    
    wp_enqueue_script('validate.js',get_template_directory_uri().'/assets/vendor/php-email-form/validate.js',array(),'1.1', true);    
    wp_enqueue_script('swiper-bundle.min.js',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),'1.1', true);
    
    wp_enqueue_script('typed.min.js',get_template_directory_uri().'/assets/vendor/typed.js/typed.min.js',array(),'1.1', true);
  
    //Template Main JS File
    wp_enqueue_script('main.js',get_template_directory_uri().'/assets/js/main.js',array(),'1.1', true);

    //javascripts
    // wp_enqueue_script('main.js',get_template_directory_uri().'/assets/js/main.js',array(),'1.1', true);
    // wp_enqueue_script('swiper-bundle.min.js',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),'1.1', true);
    // wp_enqueue_script('aos.js',get_template_directory_uri().'/assets/vendor/aos/aos.js',array(),'1.1', true);
    // wp_enqueue_script('validate.js',get_template_directory_uri().'/assets/vendor/php-email-form/validate.js',array(),'1.1', true);
    // wp_enqueue_script('purecounter.js',get_template_directory_uri().'/assets/vendor/purecounter/purecounter.js',array(),'1.1', true);
    // wp_enqueue_script('swiper-bundle.min.js',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),'1.1', true);
}

add_action('wp_enqueue_scripts','fetch_scripts');

function register_my_menus() {   
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


   /**starts first Services function */
 function my_custom_post_service() {
    $labels = array(
      'name'               => _x( 'Service', 'post type general name' ),
      'singular_name'      => _x( 'Service', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'book' ),
      'add_new_item'       => __( 'Add New service' ),
      'edit_item'          => __( 'Edit service' ),
      'new_item'           => __( 'New service' ),
      'all_items'          => __( 'All services' ),
      'view_item'          => __( 'View service' ),
      'search_items'       => __( 'Search services' ),
      'not_found'          => __( 'No services found' ),
      'not_found_in_trash' => __( 'No services found in the Trash' ), 
      'menu_name'          => 'services'
    );
    $args = array(
      'labels'        => $labels,
      'description'   => 'Holds our services and service specific data',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'service', $args ); 
  }
  add_action( 'init', 'my_custom_post_service' );
  /**ends first service function */


  function profotech_register_sidebar(){
    //Footer Sidebar 1 will created
    register_sidebar(array(
        'name' => __('contact-side-1', 'theme_name'),
        'id' => 'contact-1',
        'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
      ));
      
    }

     add_action("widgets_init","profotech_register_sidebar");
?>