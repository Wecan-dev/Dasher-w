<?php get_header(); 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>	

<div class="main-banner__account">
	<div class="main-banner__accountimg">
		<img src="<?php echo get_template_directory_uri();?>/assets/img/banner.png" alt="">
	</div>
	<div class="main-accountinfo__boxprofile">
		<div class="main-accountimg__boxprofile">
			<div class="main-accountimg__profile">
				<div class="main-accountimg__smallprofile">
					<img src="" alt="">
				</div>
			</div>
			<div class="main-accountemail__profile">
				<h2>Gladibeth Franco</h2>
				<p>gladibethdelosa@gmail.com</p>
			</div>
		</div>
		<div class="main-accountbtn__profile">
			<a class="btn btn-banner boton-generalGray" href="#" tabindex="0">Soporte</a>
		</div>
	</div>
</div>
<div class="grid-woocommerce section-paddings" id="main_myaccount">
	<div class="padding-left-right padding-top-bottom">
		<?php echo do_shortcode('[woocommerce_my_account]'); ?>
	</div>
</div>


<?php get_footer(); ?>
<script>
	document.getElementById("account_first_name").placeholder = "Nombre *";
	document.getElementById("account_last_name").placeholder = "Apellido *";
	document.getElementById("password_current").placeholder = "Contraseña actual";
	document.getElementById("password_1").placeholder = "Nueva contraseña";
	document.getElementById("password_2").placeholder = "Confirmar nueva contraseña ";
</script>