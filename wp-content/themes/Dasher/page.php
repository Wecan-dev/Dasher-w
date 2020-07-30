<?php get_header(); 
 while ( have_posts() ) : the_post();
 
 $main_instagram = get_field('main-instagram');

 ?>
<?php if(get_field('template_dasher') == 'Promociones'){ ?> 
<section class="pb-5">
	<div class="banner banner-promos">
		<div class="main-banner main-banner-promos">
			<div class="main-banner__content">
				<div class="main-banner__item">
					<div class="main-banner__text">
						<div class="subtitle-general">
							<p><?php the_field('subtitle-banner-promociones'); ?></p>
						</div>
						<div class="main-banner__title">
							<p><?php the_field('title1-banner-promociones'); ?></p>
						</div>
						<div class="main-banner__title-2">
							<p><?php the_field('title2-banner-promociones'); ?></p>
						</div>
						<div class="boton-banner">
						  <?php if (get_field('buttom1-banner-promociones')) : ?>	
							<a class="btn btn-banner-promos" href="<?php the_field('urlbuttom1-banner-promociones'); ?>"><?php the_field('buttom1-banner-promociones'); ?></a>
						  <?php endif; ?> 
						  <?php if (get_field('buttom2-banner-promociones')) : ?>	
							<a class="btn btn-banner-promos btn-banner-promos-2" href="<?php the_field('urlbuttom2-banner-promociones'); ?>"><?php the_field('buttom2-banner-promociones'); ?></a>
						  <?php endif; ?>	
						</div>
					</div>
					<div class="main-banner__img">
						<div class="main-banner__img--content">
						  <?php if (wp_is_mobile() ) : ?>	
							<img  src="<?php the_field('image-responsive-banner-promociones'); ?>" alt="">
                          <?php else: ?>
                            <img  src="<?php the_field('image-desktop-banner-promociones'); ?>" alt="">         
                          <?php endif; ?> 							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="">
	<div class="promos-general">
		<div class="promos-dasher">
			<div class="main-promos-dasher">
				<div class="main-promos-dasher__content">
					<div class="promos-dasher-content__title promos-content__title">
						<p><?php the_field('title-general-promociones'); ?></p>
						<span><?php the_field('subtitle-general-promociones'); ?></span>
					</div>
					<div class="promos-dasher-content__grid">
						<div class="promos-grid__content promos-dasher__grid--content" <?php if(get_field('image-general-promociones') != NULL){ ?> style="background: url('<?php the_field('image-general-promociones'); ?>') no-repeat ; )" <?php } ?>>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<ul class="nav nav-tabs" id="myTab" role="tablist">
<?php $i=0;          
 $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'parent' => '0', 'orderby' => 'menu_order', 'orderby'=> 'term_id', 'order' => 'ASC' ));  
 foreach($product_categories as $category): 
    $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id );
    $thumbnail_id = get_woocommerce_term_meta(  $category_id, 'thumbnail_id', true );
    $image = wp_get_attachment_url( $thumbnail_id );    
?>	
  <li class="nav-item">
    <a class="nav-link <?php if($i==0){ echo'active'; } ?>" id="<?= $categoria ?>-tab" data-toggle="tab" href="#<?= $categoria ?>" role="tab" aria-controls="<?= $categoria ?>" aria-selected="true">
		<div class="subanner-content subanner-promos-content">
				<img src="<?php echo $image; ?>" alt="">
				<p class="d-none d-md-block"><?= $categoria ?></p>
		</div>
    </a>
  </li>
<?php $i=$i+1; endforeach; ?>  

</ul>
<div class="tab-content" id="myTabContent">
<?php $i=0;          
  foreach($product_categories as $category): 
    $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id );
    $thumbnail_id = get_woocommerce_term_meta(  $category_id, 'thumbnail_id', true );
    $image = wp_get_attachment_url( $thumbnail_id );
?>	
  <div class="tab-pane fade <?php if($i==0){ echo'show active'; } ?>" id="<?= $categoria ?>" role="tabpanel" aria-labelledby="<?= $categoria ?>-tab">
  	<div class="promos-general">
		<div class="promos-restaurant">
			<div class="main-promos-restaurant">
				<div class="main-promos-restaurant__content">
					<div class="promos-restaurant-content__title promos-content__title">
						<p>Promociones <?= $categoria ?></p>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, quod.</span>
					</div>
					<div class="promos-restaurant-content__grid">
				      <?php 
                      $argsc = array(
                          'post_type' => 'items',
					      'posts_per_page' => 4,        
					      'post_status' => 'publish',
                          'meta_query' => array(
                              array(
                                  'key' => 'categoría-items-publicidad',
                                 'value' => $category_id,
                              )
                          )
                      );
				       ?>        
				      <?php $loop = new WP_Query( $argsc ); ?>
				      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>						
						<div class="promos-grid__content promos-restaurant__grid--content" <?php if(get_field('image-items-publicidad') != NULL){ ?> style="background: url('<?php the_field('image-items-publicidad'); ?>') no-repeat ; )" <?php } ?>>
							
						</div>
                      <?php endwhile; ?>						

					</div>
				</div>
			</div>
		</div>
	</div>
  </div>
 <?php $i=$i+1; endforeach; ?>  
</div>
<?php } ?>

<?php  endwhile; ?>
<?php get_footer(); ?>	