<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dasher</title>
  <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">
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
