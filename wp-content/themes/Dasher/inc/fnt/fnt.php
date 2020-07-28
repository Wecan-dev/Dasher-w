<?php

/************* General wordpress ************/
the_post_thumbnail();
the_post_thumbnail('thumbnail');       
the_post_thumbnail('medium');          
the_post_thumbnail('large');           
the_post_thumbnail('full');            

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 
set_post_thumbnail_size( 1568, 9999 );

/**Excerpt general***/
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


?>