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


<?php if(get_field('template_dasher') == 'Envíos'){ ?> 
<section>
	<div class="banner-envios">
		<div class="main-banner-envios">
			<div class="banner-envios__content">
				<div class="banner-envios__text">
					<p><?php the_field('title-banner-envios'); ?></p>
				</div>
				<div class="banner-envios__img">					
					<?php if (wp_is_mobile() ) : ?>	
				       <img src="<?php the_field('image-responsive-banner-envios'); ?>" alt="">
                    <?php else: ?>
                       <img src="<?php the_field('image-desktop-banner-envios'); ?>" alt="">        
                    <?php endif; ?>					
				</div>
			</div>
		</div>
	</div>
</section>


<section class="padding-tb">
	<div class="category-envios">
		<div class="main-category-envios">
			<div class="category-envios__content padding-rl">
				<div class="category-envios__text">
					<h3><?php the_field('title-category-envios'); ?></h3>
					<p><?php the_field('subtitle-category-envios'); echo meta_value_img('image-category-envios', get_the_ID() );?></p>
					<div class="subanner subanner-envios  fadeInUp wow"  >
                    <?php             
                    $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'parent' => '0', 'orderby' => 'menu_order', 'order' => 'asc' ));  
                    foreach($product_categories as $category): 
                        $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id );
                        $thumbnail_id = get_woocommerce_term_meta(  $category_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?> 						
						<div class="subanner-content">
							<a href="<?php echo $category_link; ?>">
								<img src="<?php echo $image; ?>" alt="">
								<p><?= $categoria ?></p>
							</a>
						</div>
					<?php endforeach; ?> 
					</div>
				</div>
				<div class="category-envios__img">
					<img src="<?php echo meta_value_img('image-category-envios', get_the_ID() ); ?>" height="938" width="642" alt="">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="padding-tb">
	<div class="pasos-envios">
		<div class="main-pasos-envios padding-rl">
			<div class="pasos-envios__content">
				<div class="pasos-envios__img">
					<h3>Cómpralo todo en 4 sencillos pasos</h3>
					<img src="<?php echo get_template_directory_uri();?>/assets/img/Grupo 581.png" alt="">
				</div>
				<div class="pasos-envios__card">
					<div class="pasos-card__content">
						<div class="pasos-card__content--img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/Flat.png" alt="">
						</div>
						<div class="pasos-card__content--title">
							<p>Elige</p>
						</div>
						<div class="pasos-card__content--text">
							<p>Navega por el catálago para pedir justo lo que deseas.</p>
						</div>
					</div>
					<div class="pasos-card__content">
						<div class="pasos-card__content--img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/password.png" alt="">
						</div>
						<div class="pasos-card__content--title">
							<p>Regístrate</p>
						</div>
						<div class="pasos-card__content--text">
							<p>Ingresa tus datos</p>
						</div>
					</div>
					<div class="pasos-card__content">
						<div class="pasos-card__content--img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/surface1.png" alt="">
						</div>
						<div class="pasos-card__content--title">
							<p>Confirma tus datos</p>
						</div>
						<div class="pasos-card__content--text">
							<p>Rápido y seguro para tu comodidad</p>
						</div>
					</div>
					<div class="pasos-card__content">
						<div class="pasos-card__content--img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/Flat-1.png" alt="">
						</div>
						<div class="pasos-card__content--title">
							<p>Disfruta</p>
						</div>
						<div class="pasos-card__content--text">
							<p>Recibe en tu puerta en tiempo record</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="padding-tb">
	<div class="ruta-envios">
		<div class="main-ruta-envios padding-rl">
			<div class="ruta-envios__content">
				<div class="ruta-envios__text">
					<div class="ruta-envios__text--title">
						<h3>Envía o recibe todo lo que necesites con ruta personalizada</h3>
					</div>
					<div class="ruta-envios__text--text">
						<p>Pide todo lo que necesites, incluso fuera de nuestros aliados, también puedes enviar personalmente lo que desees a un amigo o familiar dentro de tu cuidad.</p>
					</div>
					<div class="ruta-envios__text--boton">
						<a class="btn-ruta-envios" href="#">Hacer mi ruta de envío</a>
					</div>
				</div>
				<div class="ruta-envios__img">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/Grupo 808.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="padding-tb">
	<div class="negocio-envios">
		<div class="main-negocio-envios">
			<div class="negocio-envios__content">
				<div class="negocio-envios__text">
					<div class="negocio-envios__text--title ">
						<h3>Haz crecer tu negocio con tu propia tienda en Dasher</h3>
					</div>
					<div class="negocio-envios__text--text">
						<p>Crea tu propia tienda online y se parte del mall online más grande de Venezuela. Logística, atención al cliente y delivery incluido.</p>
						<span>Únete y descubre la gran cantidad de beneficios que tenemos para tu negocio.</span>
					</div>
					<div class="negocio-envios__text--boton">
						<a class="btn-ruta-envios" href="#">Comienzo ahora es GRATIS por 30 días</a>
					</div>
				</div>
				<div class="negocio-envios__img">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/Enmascarar grupo 30.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="padding-tb">
	<div class="negocio-envios">
		<div class="main-negocio-envios">
			<div class="negocio-envios__content">
				<div class="negocio-envios__img repartir-envios__img">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/Grupo 850.png" alt="">
				</div>
				<div class="negocio-envios__text repartir-envios__text">
					<div class="negocio-envios__text--title ">
						<h3>Genera ingresos entregando pedidos</h3>
					</div>
					<div class="negocio-envios__text--text">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis aliquam error soluta dignissimos dolorem molestiae cum tempore sit, aspernatur ipsa optio saepe enim magni deserunt rem deleniti aperiam ad. Esse.</p>
						<span>Gana dinero con cada entrega</span>
					</div>
					<div class="negocio-envios__text--boton">
						<a class="btn-ruta-envios" href="#">Ser repartidor Dasher</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="padding-tb">
	<div class="form-envios ">
		<div class="main-form-envios padding-rl">
			<div class="form-envios__content">
				<div class="form-envios__content--content">
					<h3>Contacto Dasher</h3>
					<div class="form-envios__content--form">
						<input type="text" placeholder="Nombre y Apellido *">
						<input type="email" placeholder="Correo *">
					    <textarea name="" placeholder="Mensaje *" rows="4"></textarea>
					    <button class="btn-formulario btn-form-envios">Registrarse</button>
					</div>
				</div>
				<div class="form-envios__content--img">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/Enmascarar grupo 31.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>


<?php  endwhile; ?>
<?php get_footer(); ?>	