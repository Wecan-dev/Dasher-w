<?php 

/****************** Styles *****************/
function dasher_styles(){
  wp_enqueue_style('anonymous', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" );
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css' );
  wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css' );  
  wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css' ); 
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css' ); 
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/woocommerce.css' ); 
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
  
  $wp_customize->add_panel('panel2',
        array(
            'title' => 'Categorías',
            'priority' => 1,
            )
        );
  require_once trailingslashit( get_template_directory() ) . 'inc/categorias/customizer-categorias-banner.php';

  $wp_customize->add_panel('panel3',
        array(
            'title' => 'Promociones Dasher',
            'priority' => 1,
            )
        );
  require_once trailingslashit( get_template_directory() ) . 'inc/promo/customizer-promo-tienda.php';   

} 
add_action('customize_register','theme_customize_register');

/***************** FNT General ************/

require_once trailingslashit( get_template_directory() ) . 'inc/fnt/fnt.php';

// Register Items Custom 

function custom_post_type_Items() {

  $labels = array(
    'name'                  => _x( 'Items Publicidad', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Items', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Items Publicidad', 'text_domain' ),
    'name_admin_bar'        => __( 'Items', 'text_domain' ),
    'archives'              => __( 'Archives', 'text_domain' ),
    'attributes'            => __( 'Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Main Items', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Items', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Items', 'text_domain' ),
    'edit_item'             => __( 'Edit Items', 'text_domain' ),
    'update_item'           => __( 'Update Items', 'text_domain' ),
    'view_items'            => __( 'See Items', 'text_domain' ),
    'search_items'          => __( 'Search Items', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'It is not in the trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
    'use_featured_image'    => __( 'Use Featured Image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert Into Item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'items List', 'text_domain' ),
    'items_list_navigation' => __( 'items List Navigation', 'text_domain' ),
    'filter_items_list'     => __( 'filter Items List', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Items', 'text_domain' ),
    'description'           => __( 'Items image', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'custom-fields' ),
    'taxonomies'            => array( '' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page', 
  );
  register_post_type( 'Items', $args );

}
add_action( 'init', 'custom_post_type_Items', 0 );

// Register Items Envíos Custom 

function custom_post_type_Items_envios() {

  $labels = array(
    'name'                  => _x( 'Items Envíos', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Items', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Items Envíos', 'text_domain' ),
    'name_admin_bar'        => __( 'Items', 'text_domain' ),
    'archives'              => __( 'Archives', 'text_domain' ),
    'attributes'            => __( 'Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Main Items', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Items', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Items', 'text_domain' ),
    'edit_item'             => __( 'Edit Items', 'text_domain' ),
    'update_item'           => __( 'Update Items', 'text_domain' ),
    'view_items'            => __( 'See Items', 'text_domain' ),
    'search_items'          => __( 'Search Items', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'It is not in the trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
    'use_featured_image'    => __( 'Use Featured Image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert Into Item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'items List', 'text_domain' ),
    'items_list_navigation' => __( 'items List Navigation', 'text_domain' ),
    'filter_items_list'     => __( 'filter Items List', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Items', 'text_domain' ),
    'description'           => __( 'Items image', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'custom-fields' ),
    'taxonomies'            => array( '' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page', 
  );
  register_post_type( 'Items_envios', $args );

}
add_action( 'init', 'custom_post_type_Items_envios', 0 );


function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {


add_theme_support( 'wc-product-gallery-slider' );
} 