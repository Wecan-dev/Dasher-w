<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php wp_title('|', true, 'right'); ?></title>
<?php wp_head(); ?>

</head>
<body>
	
<header id="home">
    <nav class="navbar navbar-expand-lg " id="navbar">
      <div class="main-brand">
        <a itemprop="url" class="navbar-brand" href="<?php bloginfo('url'); ?>">
			<img id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/logo dasher narvbar.png" alt="" />
        </a>
        <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas"
          type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
      <div class="navbar-collapse offcanvas-collapse">
        <ul class="navbar-nav ml-auto">
			<li class="nav-item ">
				<a class="nav-link  " href="<?php bloginfo('url'); ?>">Home</a>
			</li>

			<li class="nav-item">
				<a class="nav-link " href="<?php bloginfo('url'); ?>/tienda">Sobre Nosotros</a>

			</li>
			<li class="nav-item">
				<a class="nav-link "href="<?php bloginfo('url'); ?>">Registra tu negocio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link "href="<?php bloginfo('url'); ?>/promociones">Promociones</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nav-ingresar"href="#">Ingresar</a>
			</li>
			<li class="nav-item">
				<a class="nav-link "href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/carrito.png" alt=""></a>
			</li>

			
		</ul>
      </div>
	</nav>
	<div id="nav-responsive" class="nav-responsive d-block d-md-none">
		<div class="nav-responsive__main">
			<a href="#">
				<div class="nav-responsive__content">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/Grupo 887.png" alt="">
				</div>
			</a>
			<a href="#">
				<div class="nav-responsive__content">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/serch bottom.png" alt="">
				</div>
			</a>
			<a href="#">
				<div class="nav-responsive__content nav-box">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/cart.png" alt="">
				</div>
			</a>
			<a href="#">
				<div class="nav-responsive__content">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/whatsapp.png" alt="">
				</div>
			</a>
			<a href="#">
				<div class="nav-responsive__content">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/user.png" alt="">
				</div>
			</a>
		</div>
	</div>
</header>
