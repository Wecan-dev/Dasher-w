<?php 

/****************** Styles *****************/
function dasher_styles(){
  wp_enqueue_style('anonymous', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" );
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css' );
  wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css' );  
  wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css' ); 
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css' ); 
  wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css' );
  wp_enqueue_style('animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" );  
  wp_enqueue_style('font-awesome-min', "path/to/font-awesome/css/font-awesome.min.css" );
  wp_enqueue_style('favicon', get_stylesheet_directory_uri() . '/assets/img/favicon-32x32.png' ); 


  wp_enqueue_script( 'slim-min','https://code.jquery.com/jquery-3.3.1.slim.min.js');
  wp_enqueue_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
  wp_enqueue_script( 'jquerymin',get_bloginfo('stylesheet_directory') . '/assets/js/jquery-3.3.1.slim.min.js', array( 'jquery' ) ); 
  wp_enqueue_script( 'bootstrap-min',get_bloginfo('stylesheet_directory') . '/assets/js/bootstrap.min.js', array( 'jquery' ) );   
  wp_enqueue_script( 'popper-min',get_bloginfo('stylesheet_directory') . '/assets/js/popper.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'slick-min',get_bloginfo('stylesheet_directory') . '/assets/js/slick.min.js', array( 'jquery' ) );  
  wp_enqueue_script( 'setting-slick',get_bloginfo('stylesheet_directory') . '/assets/js/setting-slick.js', array( 'jquery' ) );
  wp_enqueue_script( 'main-js',get_bloginfo('stylesheet_directory') . '/assets/js/main.js', array( 'jquery' ) );
  wp_enqueue_script( 'wow.','https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');  

}

add_action('wp_enqueue_scripts', 'dasher_styles');

/***************Functions theme ********************/

function theme_customize_register($wp_customize){
  $wp_customize->add_panel('panel1',
        array(
            'title' => 'Secciones Home',
            'priority' => 1,
            )
        );
  require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-home-banner.php';
  require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-home-publicidad.php';
  
 

} 
add_action('customize_register','theme_customize_register');

/***************** FNT General ************/

require_once trailingslashit( get_template_directory() ) . 'inc/fnt/fnt.php';

