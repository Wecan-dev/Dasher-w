<section class="pb-5">
	<div class="banner">
		<div class="main-banner">
			<div class="main-banner__content">
			<?php for ($i=1; $i <=3 ; $i++) { ?>
				<div class="main-banner__item">
					<div class="main-banner__text">
						<div class="main-banner__title title-general">
							<p><?php echo str_replace("\n", '<br>', get_theme_mod('home_banner'.$i.'_title')); ?></p>
						</div>
						<div class="subtitle-general">
							<p><?php echo str_replace("\n", '<br>', get_theme_mod('home_banner'.$i.'_subtitle')); ?></p>
						</div>
						<div class="boton-banner">
							<a class="btn btn-banner boton-general" href="<?php echo get_theme_mod('home_banner'.$i.'_urlbutton'); ?>"><?php echo get_theme_mod('home_banner'.$i.'_button'); ?></a>
						</div>
					</div>
					<div class="main-banner__img">
						<div class="main-banner__img--content">
						    <?php if (wp_is_mobile() ) : ?>
						    	<img class="d-block d-md-none" src="<?php echo get_theme_mod('home_banner1_image_responsive'); ?>" alt="">
								
							<?php else: ?>
							    <img class="d-none d-md-block" src="<?php echo get_theme_mod('home_banner'.$i.'_image_desktop'); ?>" alt="">
							<?php endif; ?>    
						</div>
					</div>
				</div>
			<?php } ?>	

			</div>
		</div>
	</div>
	<div class="subanner padding-rl fadeInUp wow"  >
		<div class="subanner-content">
			<a href="<?php the_permalink(); ?>"> 
				<img src="<?php echo get_template_directory_uri();?>/assets/img/restaurantes.png" alt="">
				<p>Resturantes</p>
			</a>
		</div>
		<div class="subanner-content">
			<a href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/bodegones.png" alt="">
				<p>Bodegón</p>
			</a>
		</div>
		<div class="subanner-content">
			<a href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/farmacias.png" alt="">
				<p>Viveres</p>
			</a>
		</div>
		<div class="subanner-content">
			<a href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/viveres.png" alt="">
				<p>Farmacias</p>
			</a>
		</div>
		<div class="subanner-content">
			<a href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/shopping.png" alt="">
				<p>Shopping</p>
			</a>
		</div>
	</div>
	<div class="search-content">
		
		<button class="" type="submit"><img src="<?php echo get_template_directory_uri();?>/assets/img/serch bottom.png" alt=""></button>
	    <input class="form-control mr-sm-2" type="search" placeholder="Busca tus productos o tiendas favoritas" aria-label="Search">
	    <button class="btn btn-outline btn-search" type="submit">Buscar</button>
	    
    </div>
</section>