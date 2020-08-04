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


	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */

			//do_action( 'woocommerce_shop_loop' );

			//wc_get_template_part( 'content', 'product' );

?>

<section class="pb-5">
	<div class="banner banner-category">
		<div class="main-banner">
			<div class="main-banner__content main-banner-category__content">
				<div class="main-banner__item">
					<div class="main-banner__text">
						<div class="main-banner__title title-general">
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</div>
					<div class="main-banner__img">
						<div class="main-banner__img--content main-banner-category__img--content">
							<img class="" src="<?php echo get_template_directory_uri();?>/assets/img/Grupo 339.png" alt="">
						</div>
					</div>
				</div>
				<div class="main-banner__item">
					<div class="main-banner__text">
						<div class="main-banner__title title-general">
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						
					</div>
					<div class="main-banner__img">
						<div class="main-banner__img--content main-banner-category__img--content">
							<img class="" src="<?php echo get_template_directory_uri();?>/assets/img/Grupo 339.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="dropdown-banner-category d-none d-md-flex">
				<div class="dropdown-regresar">
					<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
				</div>
				<div class="dropdown">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/restaurantes.png" alt="">
					<a class=" dropdown-toggle" href="#" role="button" id="dropdowncategory1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Restaurantes
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdowncategory1">
						<div class="dropdown-menu__content">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/bodegones.png" alt="">
							<a class="dropdown-item" href="#">Bodegones</a>
						</div>
					    <div class="dropdown-menu__content">
					    	<img src="<?php echo get_template_directory_uri();?>/assets/img/viveres.png" alt="">
					    	<a class="dropdown-item" href="#">Viveres</a>
					    </div>
					    <div class="dropdown-menu__content">
					    	<img src="<?php echo get_template_directory_uri();?>/assets/img/farmacias.png" alt="">
					    	<a class="dropdown-item" href="#">Farmacias</a>
					    </div>
					    <div class="dropdown-menu__content">
					    	<img src="<?php echo get_template_directory_uri();?>/assets/img/shopping.png" alt="">
					    	<a class="dropdown-item" href="#">Shopping</a>
					    </div>
					</div>
				</div>
			</div>
			<div class="dropdown-banner-category__resposive d-block d-md-none">
				<div class="dropdown-category__responsive-content">
					<div class="dropdown-menu__content--resposive">
						<a href="#">Bodegones</a>
						<a href="#">Viveres</a>
						<a href="#">Farmacias</a>
						<a href="#">Shopping</a>
					</div>
					<div class="dropdown-responsive">
						<div class="dropdown-regresar">
							<a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
						</div>
						<a href="#" class="dropdown-responsive__content">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/restaurantes.png" alt="">
							Restaurantes
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="subanner-category padding-rl fadeInUp wow"  >
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/pizza.svg" alt="">
				<p>Pizza</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/burguer.svg" alt="">
				<p>Hamburguesa</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/parrilla.svg" alt="">
				<p>Parrilla</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/gourmet.svg" alt="">
				<p>Gourmet</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/asiatica.svg" alt="">
				<p>Asiatica</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/pastas.svg" alt="">
				<p>Pastas</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/postres.svg" alt="">
				<p>Postres</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/sushi.svg" alt="">
				<p>Sushi</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/pollo.svg" alt="">
				<p>Pollo</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/criolla.svg" alt="">
				<p>Criolla</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/mexicana.svg" alt="">
				<p>Mexicana</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/saludable.svg" alt="">
				<p>Saludable</p>
			</a>
			<a class="subanner-content-category" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/desayuno.svg" alt="">
				<p>Desayuno</p>
			</a>
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
				<div class="main-cards__slider--content">
					<a href="">
						<div class="slider-card__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p>Nombre del producto</p>
								<small>valoración</small>
								<span>3 pts</span>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem velit magni magnam eius officia quaerat quae reiciendis aut ratione sit.</p>
								<div class="content--text__logo">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="main-cards__slider--content">
					<a href="">
						<div class="slider-card__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p>Nombre del producto</p>
								<small>valoración</small>
								<span>3 pts</span>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem velit magni magnam eius officia quaerat quae reiciendis aut ratione sit.</p>
								<div class="content--text__logo">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="main-cards__slider--content">
					<a href="">
						<div class="slider-card__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p>Nombre del producto</p>
								<small>valoración</small>
								<span>3 pts</span>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem velit magni magnam eius officia quaerat quae reiciendis aut ratione sit.</p>
								<div class="content--text__logo">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="main-cards__slider--content">
					<a href="">
						<div class="slider-card__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p>Nombre del producto</p>
								<small>valoración</small>
								<span>3 pts</span>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem velit magni magnam eius officia quaerat quae reiciendis aut ratione sit.</p>
								<div class="content--text__logo">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
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
				<div class="main-cards__slider--content">
					<a href="">
						<div class="slider-card__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p>Nombre del producto</p>
								<small>valoración</small>
								<span>3 pts</span>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem velit magni magnam eius officia quaerat quae reiciendis aut ratione sit.</p>
								<div class="content--text__logo">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="main-cards__slider--content">
					<a href="">
						<div class="slider-card__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p>Nombre del producto</p>
								<small>valoración</small>
								<span>3 pts</span>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem velit magni magnam eius officia quaerat quae reiciendis aut ratione sit.</p>
								<div class="content--text__logo">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="main-cards__slider--content">
					<a href="">
						<div class="slider-card__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p>Nombre del producto</p>
								<small>valoración</small>
								<span>3 pts</span>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem velit magni magnam eius officia quaerat quae reiciendis aut ratione sit.</p>
								<div class="content--text__logo">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="main-cards__slider--content">
					<a href="">
						<div class="slider-card__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p>Nombre del producto</p>
								<small>valoración</small>
								<span>3 pts</span>
							</div>
							<div class="slider-card__content--etiqueta">
								<div class="content--etiqueta__color"></div>
								<p>Abierto</p>
							</div>
							<div class="slider-card__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem velit magni magnam eius officia quaerat quae reiciendis aut ratione sit.</p>
								<div class="content--text__logo">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php

//////////////////////////////////////

		}
	}


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
