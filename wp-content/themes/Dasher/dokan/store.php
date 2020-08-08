<?php get_header(); 

$store_user   = dokan()->vendor->get( get_query_var( 'author' ) );
//if ($_GET['orderby'] == 'price-desc' ){ $selectpr_desc = 'selected="selected"';}    
//$args = arg($_GET["cat"],$_GET["tax"],$_GET["lower"],$_GET["upper"],$_GET['orderby'],$paged); 
$cat = $_GET["cat"];
?>
                <?php if ($_GET["cat"] == NULL) { ?>
                    <?php if ( have_posts() ) { ?>             
                        <?php woocommerce_product_loop_start(); ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php foreach((get_the_terms( get_the_ID(), 'product_cat' )) as $category) {               
                               $cat_id = $category->term_id; $i = 0;   
                               if ($array_cat[$cat_id] == NULL && $category->parent == '0' && $i == '0') {
                                  $array_cat[$cat_id] = $cat_id;
                                  $categoria_p = $category->name;
                                  $categoria_id = $category->term_id;                                 
                                  termmeta_value( 'thumbnail_id', $cat_id );
                                  $queried_post = get_post(termmeta_value( 'thumbnail_id', $cat_id ));
                                  $img_cat = $queried_post->guid; $i = $i+1;

                                } 
                            } 
                        endwhile; 
                    } $cat = $categoria_id;
                }  
                if ($_GET["cat"] != NULL) { 
                    $queried_post = get_post(termmeta_value( 'thumbnail_id', $cat ));
                    $img_cat = $queried_post->guid; $i = $i+1;
                    $queried_cat = get_the_terms( $_GET["cat"], 'product_cat' );
                    $categoria_p = $queried_cat->guid;
                    $categoria_id = $queried_cat->term_id;  
                } ?>



<div class="banner-tienda">
    <div class="main-banner-tienda">
        <div class="main-banner-tienda__content">
            <div class="banner-tienda__item">
                <div class="banner-tienda__item--img">
                    <img src="<?php echo esc_url( $store_user->get_banner() ); ?>" alt="">
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
                 
                    <img src="<?php echo  $img_cat; ?>" alt="">
                    <a class=" dropdown-toggle" href="?cat=<?php echo $categoria_id; ?>" role="button" id="dropdowncategory1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $categoria_p ?>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdowncategory1">
                        <?php             
                        $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'parent' => '0', 'orderby' => 'menu_order', 'order' => 'asc' ));  
                        foreach($product_categories as $categor): 
                            $categoria = $categor->name; $categor_id = $categor->term_id; $categor_link = get_category_link( $categor_id );
                        $thumbnail_id = get_woocommerce_term_meta(  $categor_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                        if ($categoria_id != $categor_id &&  $array_cat[$categor_id] == $categor_id) {
                        ?>                    
                            <div class="dropdown-menu__content">
                                <img src="<?php echo $image; ?>" alt="">
                                <a class="dropdown-item" href="?cat=<?php echo $categor_id; ?>"><?= $categoria ?></a>
                            </div>
                        <?php } endforeach; ?>                       

                    </div>
                </div>
            </div>
            <div class="dropdown-banner-category__resposive d-block d-md-none">
                <div class="dropdown-category__responsive-content">
                    <div class="dropdown-menu__content--resposive">
                        <?php             
                        $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'parent' => '0', 'orderby' => 'menu_order', 'order' => 'asc' ));  
                        foreach($product_categories as $categor): 
                            $categoria = $categor->name; $categor_id = $categor->term_id; $categor_link = get_category_link( $categor_id );
                        $thumbnail_id = get_woocommerce_term_meta(  $categor_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                        if ($categoria_id != $categor_id &&  $array_cat[$categor_id] == $categor_id) {
                        ?>                     
                           <a href="?cat=<?php echo $categoria_id; ?>"><?= $categoria ?></a>
                        <?php } endforeach; ?>

                    </div>
                    <div class="dropdown-responsive">
                        <div class="dropdown-regresar">
                            <a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                        </div>
                        <a href="?cat=<?php echo $categoria_id; ?>" class="dropdown-responsive__content">
                            <img src="<?php echo  $img_cat; ?>" alt="">
                           <?= $categoria_p ?>
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
                    <img src="<?php echo esc_url( $store_user->get_avatar() ) ?>" alt="">
                </div>
            </div>
            <div class="tienda-perfil__content--item">
                <div class="perfil-content__item--content">
                    <h3><?php echo esc_attr( $store_user->get_shop_name() ); ?></h3>
                    <span>Horario: 0:00am a 0:00pm</span>
                    <p><?php echo usermeta_value( 'description', $store_user->get_id() ); ?></p>
                    <p><i class="fa fa-mobile"></i><a href="tel:<?php echo esc_html( $store_user->get_phone() ); ?>"><?php echo esc_html( $store_user->get_phone() ); ?></a> <i class="fa fa-envelope-o"></i>
                                <a href="mailto:<?php echo esc_attr( antispambot( $store_user->get_email() ) ); ?>"><?php echo esc_attr( antispambot( $store_user->get_email() ) ); ?></a></p>
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
                            <p> <?php echo wp_kses_post( $store_address ); ?></p>
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
                    <p>Menú</p><?php echo $cat; ?>
                    <ul>
                    <?php if ( have_posts() ) { ?>             
                    <?php woocommerce_product_loop_start(); ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php foreach((get_the_terms( get_the_ID(), 'product_cat' )) as $category) {               
                               $cat_id = $category->term_id;    
                               if ($array_cat[$cat_id] == NULL && $category->parent == $cat) {
                                  $array_cat[$cat_id] = $cat_id;
                                  $categoria_p = $category->name;
                                  termmeta_value( 'thumbnail_id', $cat_id );
                                  $queried_post = get_post(termmeta_value( 'thumbnail_id', $cat_id ));
                                  $queried_post->guid; ?>
                                  <li>
                                      <img src="<?php echo $queried_post->guid; ?>" alt="">
                                      <a class="active" href="<?php echo $categor_link; ?>"><?= $categoria_p ?></a>
                                  </li>
                                <?php } ?>
                            <?php } ?>
                        <?php endwhile; // end of the loop. ?>
                    <?php } ?>      
                       
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