<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


<div class="banner-tienda banner_product">
	<div class="main-banner-tienda">
		<div class="main-banner-tienda__content">
			<div class="banner-tienda__item">
				<div class="banner-tienda__item--img">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/" alt="">
				</div>
				<a href="#" class="banner-tienda__item--destacar">
					<p class="d-none d-md-block">Destacar tienda</p>
					<div class="tienda-item__destacar--content">
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
				</a>
			</div>
		</div>
		<div class="tienda-perfil__content--item">
			<div class="perfil-content__item--img">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/" alt="">
			</div>
		</div>
	</div>
</div>

<div class="content__product padding-rl">
	<div class="content__product--product">
		<div class="title__product--product">
			Nombre del Producto
		</div>
		<div class="img__product--product">
			<img src="http://localhost/Dasher/wp-content/uploads/2020/07/Cocinillas_104501450_116245541_1024x576.jpg" alt="">
		</div>
	</div>
	<div class="content__product--info">
		<div class="text__product--info">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae non ex repellendus placeat, amet.</p>
		</div>
		<div class="size__product--info">
			<p>Escoge tu tamaño</p>
			<div class="size__product--info-check">
				<label class="btn btn-check-product">
					<input type="radio" checked="true" name="options">
						<div>
							Pequeño
						</div>
				</label>
				<label class="btn btn-check-product">
					<input type="radio" name="options">
						<div>
							Mediano
						</div>
				</label>
				<label class="btn btn-check-product">
					<input type="radio" name="options">
						<div>
							Grande
						</div>
				</label>
			</div>
		</div>
		<div class="zona__product--info">
			<p>Escoge tu sede más cerca</p>
			<div class="content-item__info--ubica">
				<div class="item-info__info--content active">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/location.svg" alt="">
					<p>Ubicación del local 1, calle 2</p>
				</div>
				<div class="item-info__info--content">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/location.svg" alt="">
					<p>Ubicación del local 2, calle 1</p>
				</div>
			</div>
		</div>
		<div class="adicional__product--info">
			<p>Adicionales</p>
			<div class="adicionales-content">
				<a href="#" class="adicionales-content--items">
					<span class="adicionales-content__name">Mostaza</span>
					<span class="adicionales-content__price">32.000</span>
					<span class="adicionales-content__icon">+</span>
				</a>
				<a href="#" class="adicionales-content--items">
					<span class="adicionales-content__name">Mostaza</span>
					<span class="adicionales-content__price">32.000</span>
					<span class="adicionales-content__icon">+</span>
				</a>
				<a href="#" class="adicionales-content--items">
					<span class="adicionales-content__name">Mostaza</span>
					<span class="adicionales-content__price">32.000</span>
					<span class="adicionales-content__icon">+</span>
				</a>
				<a href="#" class="adicionales-content--items">
					<span class="adicionales-content__name">Mostaza</span>
					<span class="adicionales-content__price">32.000</span>
					<span class="adicionales-content__icon">+</span>
				</a>
				<a href="#" class="adicionales-content--items">
					<span class="adicionales-content__name">Mostaza</span>
					<span class="adicionales-content__price">32.000</span>
					<span class="adicionales-content__icon">+</span>
				</a>
				<a href="#" class="adicionales-content--items">
					<span class="adicionales-content__name">Mostaza</span>
					<span class="adicionales-content__price">32.000</span>
					<span class="adicionales-content__icon">+</span>
				</a>
			</div>
		</div>
		<div class="adicional__product--extra">
			<p>Indicaciones extras</p>
			<input type="text" placeholder="Comentanos algun detalle extra">
		</div>
	</div>
	<div class="content__product--resumen">
		<div class="tabla-product__resumen">
			<div class="tabla-resumen__title">
				<div class="tabla-resumen__title--resu">
					<p>Resumen</p>
				</div>
				<div class="tabla-resumen__title--price">
					<p>Precio</p>
				</div>
			</div>
			<div class="tabla-resumen__content">
				<div class="tabla-resumen__content--item">
					<div class="tabla-resumen__item--text">
						<p>Nombre de articulo - adicional mas pus</p>
					</div>
					<div class="tabla-resumen__item--price">
						bsf <br>
						10.000
					</div>
				</div>
				<div class="tabla-resumen__content--item">
					<div class="tabla-resumen__item--text">
						<p>Nombre de articulo - adicional</p>
					</div>
					<div class="tabla-resumen__item--price">
						bsf <br>
						10.000
					</div>
				</div>
				<div class="tabla-resumen__content--item">
					<div class="tabla-resumen__item--text">
						<p>Nombre de articulo - adicional</p>
					</div>
					<div class="tabla-resumen__item--price">
						bsf <br>
						10.000
					</div>
				</div>
			</div>
			<div class="tabla-resumen__total">
				<p>Total</p>
				<span> bsf <br> 30.000</span>
			</div>
		</div>
		<div class="btn-quantity">
			<div class="btn-quantity__mas">+</div>
			<div class="btn-quantity__number">1</div>
			<div class="btn-quantity__menos">-</div>
		</div>
	</div>
</div>


	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
