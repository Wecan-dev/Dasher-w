<?php get_header(); ?>
<?php
$store_user   = dokan()->vendor->get( get_query_var( 'author' ) );
?>


<div class="banner-tienda">
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
        <div class="dropdown-banner-category dropdown-banner-tienda d-none d-md-flex">
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


<div class="tienda-perfil pb-4">
    <div class="main-tienda-perfil">
        <div class="main-tienda-perfil__content padding-rl">
            <div class="tienda-perfil__content--item">
                <div class="perfil-content__item--img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/" alt="">
                </div>
            </div>
            <div class="tienda-perfil__content--item">
                <div class="perfil-content__item--content">
                    <h3>Nombre del local<?php echo $store_info   = $store_user->get_shop_info(); ?></h3>
                    <span>Horario: 0:00am a 0:00pm</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ut assumenda, minus iste velit officiis, voluptatum sapiente modi expedita facere vero consequatur</p>
                </div>
            </div>
            <div class="tienda-perfil__content--item">
                <div class="perfil-content__item--info">
                    <div class="content-item__info--services">
                        <div class="item-info__services--content">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/entrega-de-comida.svg" alt="">
                            <p>Delivery</p>
                        </div>
                        <div class="item-info__services--content">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/bolso.svg" alt="">
                            <p>Pick up</p>
                        </div>
                    </div>
                    <div class="content-item__info--ubica">
                        <div class="item-info__info--content">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/location.svg" alt="">
                            <p>Ubicación del local 1, calle 2</p>
                        </div>
                        <div class="item-info__info--content">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/location.svg" alt="">
                            <p>Ubicación del local 2, calle 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="tienda-menu pb-5">
    <div class="main-tienda-menu">
        <div class="main-tienda-menu__content">
            <div class="tienda-menu__content--item">
                <div class="tienda-menu--item__menu">
                    <p>Menú</p>
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/burguer.svg" alt="">
                            <a class="active" href="">Comida rápida</a>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/parrilla.svg" alt="">
                            <a href="">Carnes</a>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/pastas.svg" alt="">
                            <a href="">Almuerzos</a>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/postres.svg" alt="">
                            <a href="">Postres</a>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/saludable.svg" alt="">
                            <a href="">Ensaladas</a>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/desayuno.svg" alt="">
                            <a href="">Desayunos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tienda-menu__content--item">
                <div class="tienda-menu--item__products">
                    <div class="menu--item__products--content">
                        <a href="#" class="menu-products__content--img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
                        </a>
                        <a href="#" class="menu-products__content--content">
                            <div class="menu-products--content__title">
                                <p>Articulo o alimento</p>
                                <span>4,00</span>
                            </div>
                            <div class="menu-products--content__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <a href="" class="menu-products--content--boton">
                                 Agregar
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/carrito.png" alt="">
                            </a>
                        </a>
                        <div class="card-oferta">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/Grupo 1694.png" alt="">
                        </div>
                    </div>
                    <div class="menu--item__products--content">
                        <a href="#" class="menu-products__content--img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
                        </a>
                        <a href="#" class="menu-products__content--content">
                            <div class="menu-products--content__title">
                                <p>Articulo o alimento</p>
                                <span>4,00</span>
                            </div>
                            <div class="menu-products--content__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <a href="" class="menu-products--content--boton">
                                 Agregar
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/carrito.png" alt="">
                            </a>
                        </a>
                    </div>
                    <div class="menu--item__products--content">
                        <a href="#" class="menu-products__content--img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
                        </a>
                        <a href="#" class="menu-products__content--content">
                            <div class="menu-products--content__title">
                                <p>Articulo o alimento</p>
                                <span>4,00</span>
                            </div>
                            <div class="menu-products--content__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <a href="" class="menu-products--content--boton">
                                 Agregar
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/carrito.png" alt="">
                            </a>
                        </a>
                    </div>
                    <div class="menu--item__products--content">
                        <a href="#" class="menu-products__content--img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
                        </a>
                        <a href="#" class="menu-products__content--content">
                            <div class="menu-products--content__title">
                                <p>Articulo o alimento</p>
                                <span>4,00</span>
                            </div>
                            <div class="menu-products--content__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <a href="" class="menu-products--content--boton">
                                 Agregar
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/carrito.png" alt="">
                            </a>
                        </a>
                    </div>
                    <div class="menu--item__products--content">
                        <a href="#" class="menu-products__content--img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
                        </a>
                        <a href="#" class="menu-products__content--content">
                            <div class="menu-products--content__title">
                                <p>Articulo o alimento</p>
                                <span>4,00</span>
                            </div>
                            <div class="menu-products--content__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <a href="" class="menu-products--content--boton">
                                 Agregar
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/carrito.png" alt="">
                            </a>
                        </a>
                    </div>
                    <div class="menu--item__products--content">
                        <a href="#" class="menu-products__content--img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/card-product.jpeg" alt="">
                        </a>
                        <a href="#" class="menu-products__content--content">
                            <div class="menu-products--content__title">
                                <p>Articulo o alimento</p>
                                <span>4,00</span>
                            </div>
                            <div class="menu-products--content__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <a href="" class="menu-products--content--boton">
                                 Agregar
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/carrito.png" alt="">
                            </a>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tienda-menu__content--item">
                <div class="tienda-menu--item__promo">
                    <p>Promociones Dasher</p>
                    <div class="menu-item__promo--content">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>