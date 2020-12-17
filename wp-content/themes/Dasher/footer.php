<footer>
	<div class="footer footer-envios">
		<div class="main-footer padding-rl">
			<div class="main-footer__text">
				<p>¿Quisieras tener tu tienda favorita o un nuevo servicio en Dasher?</p>
			</div>
			<div class="main-footer__afiliar">
				<div class="main-footer__afiliar--input">
				    <input class="" type="text" placeholder="Algún ejemplo">
				    <button class="btn btn-afiliar" >Sugiérela aquí</button>
				</div>			
				<div class="main-footer__afiliar--link">
					<a href="">Rastrea tu pedido</a>
					<a href="">Deseo vender con Dasher</a>
					<a href="">Quiero ser repartidor</a>
					<a href="">Términos y condiciones</a>
					<a data-toggle="modal" data-target="#modal-form">Contáctanos</a>
				</div>
			</div>
			<div class="main-footer__copy">
				<div class="main-footer__copy--copy">©2020 <a target="_blank" href="http://wecan.company">We can! Company</a></div>
				<div class="main-footer__copy--redes"></div>
			</div>
		</div>
	</div>
</footer>


<div class="modal fade bd-example-modal-xl" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="content-modal">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="content-modal__title subtitle-general">
					<p>Crea tu cuenta y accede a las mejores tiendas</p>
				</div>
				<div class="formulario-modal">
					<?php echo do_shortcode('[user_registration_form id="23"]');  ?>
					<a href="#" class="boton-google">
						Accede con tu cuenta <span>Google</span>
					</a>
				</div>
				<div class="fondo-modal">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/Enmascarar grupo 28.png">
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
</body>
<?php wp_footer(); ?>

</html>

