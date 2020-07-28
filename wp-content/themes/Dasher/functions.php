<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       
the_post_thumbnail('medium');          
the_post_thumbnail('large');           
the_post_thumbnail('full');            

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 
set_post_thumbnail_size( 1568, 9999 );



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



/**truncar cantidad de palabras***/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/**truncar cantidad de palabras***/


// Register Custom Banner Home
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner ', 'Post Type General Name', 'fefi' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'fefi' ),
		'menu_name'             => __( 'Banners', 'fefi' ),
		'name_admin_bar'        => __( 'Post Type', 'fefi' ),
		'archives'              => __( 'Archivo', 'fefi' ),
		'attributes'            => __( 'Atributos', 'fefi' ),
		'parent_item_colon'     => __( 'Artículo principal', 'fefi' ),
		'all_items'             => __( 'Todos los artículos', 'fefi' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'fefi' ),
		'add_new'               => __( 'Añadir nuevo', 'fefi' ),
		'new_item'              => __( 'Nuevo artículo', 'fefi' ),
		'edit_item'             => __( 'Editar elemento', 'fefi' ),
		'update_item'           => __( 'Actualizar artículo', 'fefi' ),
		'view_item'             => __( 'Ver ítem', 'fefi' ),
		'view_items'            => __( 'Ver artículos', 'fefi' ),
		'search_items'          => __( 'Buscar artículo', 'fefi' ),
		'not_found'             => __( 'Extraviado', 'fefi' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'fefi' ),
		'featured_image'        => __( 'Foto principal', 'fefi' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'fefi' ),
		'remove_featured_image' => __( 'Remove featured image', 'fefi' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'fefi' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'fefi' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'fefi' ),
		'items_list'            => __( 'Lista de artículos', 'fefi' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'fefi' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'fefi' ),
	);
	$args = array(
		'label'                 => __( 'Banner Home', 'fefi' ),
		'description'           => __( 'Post Type Description', 'fefi' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );


