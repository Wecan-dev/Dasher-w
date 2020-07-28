<section class="pb-5">
	<div class="publicidad" >
		<div class="main-publicidad mb-5">
			<div class="main-publicidad__text padding-rl">
				<p class="title-general title-publicidad"><?php echo str_replace("\n", '<br>', get_theme_mod('home_publicidad_title'));?></p>
				<p class="subtitle-general subtitle-publicidad"><?php echo str_replace("\n", '<br>', get_theme_mod('home_publicidad_subtitle'));?></p>
			</div>
			<div class="main-publicidad__bg">
				<?php if (wp_is_mobile() ) : ?>
				   <img class="" src="<?php echo get_theme_mod('home_publicidad_image_responsive'); ?>" alt="">
                <?php else: ?>
				    <img class="" src="<?php echo get_theme_mod('home_publicidad_image_desktop'); ?>" alt="">
			    <?php endif; ?>   				   
			</div>
		</div>
	</div>
	<div class="cards">
		<div class="main-cards padding-rl">
			<div class="subtitle-general">
				<p>Cercanos a ti</p>
			</div>
			<div class="main-cards__slider padding-rl">
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
