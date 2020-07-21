<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


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


