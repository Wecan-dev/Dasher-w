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
		<div class="main-cards padding-rl">
			<div class="subtitle-general">
				<p>Los más Populares</p>
			</div>
			<div class="main-cards__slider padding-rl">
			<?php $args = 
				array(
					'post_type' => 'product',
					'paged' => $paged,
					'posts_per_page' => 100,        
					'post_status' => 'publish',
                    'orderby' => 'meta_value', // orderby the meta_value of the following meta_key
                    'meta_key' => 'total_sales', // the custom meta_key name
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
								<p><?php the_title(); ?></p>
								<small>valoración</small>
								<span>3 pts</span>
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
		<div class="main-cards padding-rl">
			<div class="subtitle-general">
				<p>Los más nuevos</p>
			</div>
			<div class="main-cards__slider padding-rl">
            <?php
            $args = array (
               'post_type' => 'product',
               'posts_per_page' => 100,
            );
            $loop = new WP_Query( $args ); 
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>    				
				<div class="main-cards__slider--content">
					<a href="<?php the_permalink(); ?>">
						<div class="slider-card__img">
							<img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
						</div>
						<div class="slider-card__content">
							<div class="slider-card__content--title">
								<p><?php the_title(); ?></p>
								<small>valoración</small>
								<span>3 pts</span>
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