<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>

<?php


	//if ( wc_get_loop_prop( 'total' ) ) {
		//while ( have_posts() ) {
			//the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */

			//do_action( 'woocommerce_shop_loop' );

			//wc_get_template_part( 'content', 'product' );

global $wpdb;  
$category_id = $cat_id = get_queried_object_id();
$category_child = category_child( $category_id );
$category_name = single_cat_title("", false);
if ($category_child > 0) {
	global $wpdb;  
	$result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."terms WHERE term_id = '$category_child'"); 
	foreach($result_link as $r)
	{
		$category_name = $r->name;
		$category_id = $r->term_id;                    
	}
}
//$category_name = single_cat_title("", false);
$category_thumbnail_id = get_woocommerce_term_meta(  $category_id, 'thumbnail_id', true );
$category_image = wp_get_attachment_url( $category_thumbnail_id );
?>

<section class="pb-5">
	<div class="banner banner-category">
		<div class="main-banner">
			<div class="main-banner__content main-banner-category__content">
			<?php for ($i=1; $i <=3 ; $i++) { ?>
			  <?php if (get_theme_mod('category_banner'.$i.'_title') != NULL) { ?>
				<div class="main-banner__item">
					<div class="main-banner__text">
						<div class="main-banner__title title-general">
							<p><p><?php echo str_replace("\n", '<br>', get_theme_mod('category_banner'.$i.'_title')); ?></p>
						</div>
					</div>
					<div class="main-banner__img">
						<div class="main-banner__img--content main-banner-category__img--content">						
							<img class="" src="<?php echo get_theme_mod('category_banner'.$i.'_image_desktop'); ?>" alt="">	    
						</div>
					</div>
				</div>
		      <?php } ?>		
			<?php } ?>		
			</div>
			<div class="dropdown-banner-category d-none d-md-flex">
				<div class="dropdown-regresar">
					<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
				</div>
				<div class="dropdown">
					<img src="<?php echo $category_image; ?>" alt="">
					<a class=" dropdown-toggle" href="#" role="button" id="dropdowncategory1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <?= $category_name ?>
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdowncategory1">
						<?php             
						$product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'parent' => '0', 'orderby' => 'menu_order', 'order' => 'asc' ));  
						foreach($product_categories as $categor): 
							$categoria = $categor->name; $categor_id = $categor->term_id; $categor_link = get_category_link( $categor_id );
						$thumbnail_id = get_woocommerce_term_meta(  $categor_id, 'thumbnail_id', true );
						$image = wp_get_attachment_url( $thumbnail_id );
						if ($category_id != $categor_id) {
						?> 					
						    <div class="dropdown-menu__content">
							    <img src="<?php echo $image; ?>" alt="">
							    <a class="dropdown-item" href="<?php echo $categor_link; ?>"><?= $categoria ?></a>
						    </div>
                        <?php } endforeach; ?> 	
					</div>
				</div>
			</div>
			<div class="dropdown-banner-category__resposive d-block d-md-none">
				<div class="dropdown-category__responsive-content">
					<div class="dropdown-menu__content--resposive">
						<?php             
						$product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'parent' => '0', 'orderby' => 'menu_order', 'order' => 'asc' ));  
						foreach($product_categories as $categor): 
							$categoria = $categor->name; $categor_id = $categor->term_id; $categor_link = get_category_link( $categor_id );
						$thumbnail_id = get_woocommerce_term_meta(  $categor_id, 'thumbnail_id', true );
						$image = wp_get_attachment_url( $thumbnail_id );
						if ($category_id != $categor_id) {
						?>					
						   <a href="<?php echo $categor_link; ?>"><?= $categoria ?></a>
						<?php } endforeach; ?> 
					</div>
					<div class="dropdown-responsive">
						<div class="dropdown-regresar">
							<a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
						</div>
						<a href="#" class="dropdown-responsive__content">
							<img src="<?php echo $category_image; ?>" alt="">
							<?= $category_name ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="subanner-category padding-rl fadeInUp wow"  >
		<?php $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'child_of' => $category_id, 'orderby' => 'menu_order', 'order' => 'asc' ));?>

		<?php foreach($product_categories as $categor): ?>
			<?php $categoria = $categor->name; $categor_id = $categor->term_id; $categor_link = get_category_link( $categor_id ); ?> 
			<?php $thumbnail_id = get_woocommerce_term_meta(  $categor_id, 'thumbnail_id', true ); $image = wp_get_attachment_url( $thumbnail_id ); ?>
				<a class="subanner-content-category  <?php if ($categoria == single_cat_title("", false)) { echo ' active-sub';} ?>" href="<?php echo $categor_link; ?>">
					<img src="<?php echo $image; ?>" alt="">
					<p><?= $categoria ?></p>
					
					
				</a>
			<?php endforeach; ?>
	</div>
	<div class="search-content search-content-category">
		
		<button class="" type="submit"><img src="<?php echo get_template_directory_uri();?>/assets/img/serch bottom.png" alt=""></button>
	    <input class="form-control mr-sm-2" type="search" placeholder="Busca tus productos o tiendas favoritas" aria-label="Search">
	    <button class="btn btn-outline btn-search" type="submit">Buscar</button>
	    
    </div>
</section>

<section class="pb-5">
	<div class="cards-dropdown padding-rl">
		<div class="dropdown">
		  <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Ubicación
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <a class="dropdown-item" href="#">Action</a>
		    <a class="dropdown-item" href="#">Another action</a>
		    <a class="dropdown-item" href="#">Something else here</a>
		  </div>
		</div>
		<div class="dropdown">
		  <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Order por
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
		    <a class="dropdown-item" href="#">Action</a>
		    <a class="dropdown-item" href="#">Another action</a>
		    <a class="dropdown-item" href="#">Something else here</a>
		  </div>
		</div>
	</div>
	<div class="cards">
		<div class="main-cards main-cards__category">
			<div class="subtitle-general">
				<p>Cerca de tí</p>
			</div>
			<div class="subtitle-cards-category">
				<span>Lo que desees en minutos</span>
			</div>
			<div class="main-cards--category__slider">
			<?php 
                if ($category_child > 0) { $category_id = get_queried_object_id(); }
			    $args = 
				array(
					'post_type' => 'product',
					'paged' => $paged,
					'posts_per_page' => 100,        
					'post_status' => 'publish',
					'tax_query' => array(
                    'relation'=>'AND', // 'AND' 'OR' ...
                    array(
      	              'taxonomy'        => 'product_cat',
      	              'field'           => 'term_id',
      	              'terms'           => $category_id,
      	              'operator'        => 'IN',
      	              )),
                );
            ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?>				
				<div class="main-cards__slider--content">
					<a href="<?php the_permalink(); ?>">
						<div class="slider-card__img">
							<img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<div class="slider-card__conenttitle">
									<p><?php the_title(); ?></p>
								</div>
								<div class="slider-card__conentvalue">
									<small>valoración</small>
									<span>3 pts</span>
								</div>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p><?php  echo strip_tags(cut_text(content(get_the_ID(),'product'),20));?></p>
								<div class="content--text__logo">
									<?php echo get_avatar(get_the_author_email(), '50'); ?>
								</div>
							</div>
						</div>
					</a>
				</div>
		    <?php endwhile; ?> 		
				
			</div>
		</div>
	</div>
	<div class="cards">
		<div class="main-cards main-cards__category">
			<div class="subtitle-general">
				<p>Tiendas destacadas</p>
			</div>
			<div class="subtitle-cards-category">
				<span>Recomendados para ti</span>
			</div>
			<div class="main-cards--category__slider">
			<?php 
                if ($category_child > 0) { $category_id = get_queried_object_id(); }
			    $args = 
				array(
					'post_type' => 'product',
					'paged' => $paged,
					'posts_per_page' => 100,        
					'post_status' => 'publish',
                    'orderby' => 'meta_value', // orderby the meta_value of the following meta_key
                    'meta_key' => '_wc_average_rating', // the custom meta_key name
                    'order'=> 'DESC' // sort descending
                );
            ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?>					
				<div class="main-cards__slider--content">
					<a href="<?php the_permalink(); ?>">
						<div class="slider-card__img">
							<img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<div class="slider-card__conenttitle">
									<p><?php the_title(); ?></p>
								</div>
								<div class="slider-card__conentvalue">
									<small>valoración</small>
									<span>3 pts</span>
								</div>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p><?php  echo strip_tags(cut_text(content(get_the_ID(),'product'),20));?></p>
								<div class="content--text__logo">
									<?php echo get_avatar(get_the_author_email(), '50'); ?>
								</div>
							</div>
						</div>
					</a>
				</div>
			 <?php endwhile; ?>				
			</div>
		</div>
	</div>
</section>


<?php

//////////////////////////////////////

		//}
	//}


/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
//do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
