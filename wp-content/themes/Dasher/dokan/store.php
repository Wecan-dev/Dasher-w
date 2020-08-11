<?php get_header(); 

$store_user   = dokan()->vendor->get( get_query_var( 'author' ) );
//if ($_GET['orderby'] == 'price-desc' ){ $selectpr_desc = 'selected="selected"';}    
//$args = arg($_GET["cat"],$_GET["tax"],$_GET["lower"],$_GET["upper"],$_GET['orderby'],$paged); 
$cat = $_GET["cat"];

global $wpdb; 
$seller_id  = (int) get_query_var( 'author' );
$categories = $wpdb->get_results( $wpdb->prepare( "SELECT t.term_id,t.name, tt.parent FROM $wpdb->terms as t
    LEFT JOIN $wpdb->term_taxonomy as tt on t.term_id = tt.term_id
    LEFT JOIN $wpdb->term_relationships AS tr on tt.term_taxonomy_id = tr.term_taxonomy_id
    LEFT JOIN $wpdb->posts AS p on tr.object_id = p.ID
    WHERE tt.taxonomy = 'product_cat'
    AND tt.parent = '0'
    AND p.post_type = 'product'
    AND p.post_status = 'publish'
    AND p.post_author = %d GROUP BY t.term_id", $seller_id
    ) );

foreach($categories as $r)
{
  $cat_p[] = $r->term_id; 
}

if ($_GET["cat"] == NULL) {
    $cat_just =  $cat_p[0];
}
if ($_GET["cat"] != NULL && get_term($_GET["cat"])->parent == 0) {
    $cat_just =  $_GET["cat"];
}
if ($_GET["cat"] != NULL && get_term($_GET["cat"])->parent != 0) {
    $cat_just =  get_term($_GET["cat"])->parent;
    $subcat_just = $_GET["cat"];
}

?>



<div class="banner-tienda">
    <div class="main-banner-tienda">
        <div class="main-banner-tienda__content">
            <div class="banner-tienda__item">
                <div class="banner-tienda__item--img">
                    <img src="<?php echo esc_url( $store_user->get_banner() ); ?>" alt="">
                </div>
                <a href="#" class="banner-tienda__item--destacar">
                    <p class="d-none d-md-block"><?php echo wp_kses_post( dokan_get_readable_seller_rating( $store_user->get_id() ) ); ?></p>
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
                 
                    <img src="<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $cat_just, 'thumbnail_id', true ) ) ?>" alt="">
                    <a class=" dropdown-toggle" href="?cat=<?php echo $cat_just; ?>" role="button" id="dropdowncategory1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo get_term($cat_just)->name; ?>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdowncategory1">
                        <?php        
                        $count_cat_p=count($cat_p);
                        for ($i=0; $i < $count_cat_p; $i++) { 
                            if ($cat_p[$i] != $cat_just) { ?>                   
                                <div class="dropdown-menu__content">
                                    <img src="<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $cat_p[$i], 'thumbnail_id', true ) ); ?>" alt="">
                                    <a class="dropdown-item" href="?cat=<?php echo $cat_p[$i]; ?>"><?= get_term($cat_p[$i])->name; ?></a>
                                </div>
                        <?php }} ?>                  
                    </div>
                </div>
            </div>
            <div class="dropdown-banner-category__resposive d-block d-md-none">
                <div class="dropdown-category__responsive-content">
                    <div class="dropdown-menu__content--resposive">
                        <?php        
                        $count_cat_p=count($cat_p);
                        for ($i=0; $i < $count_cat_p; $i++) { 
                            if ($cat_p[$i] != $cat_just) { ?>                     
                               <a href="?cat=<?php echo $cat_p[$i]; ?>"><?= get_term($cat_p[$i])->name; ?></a>
                        <?php }} ?> 

                    </div>
                    <div class="dropdown-responsive">
                        <div class="dropdown-regresar">
                            <a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                        </div>
                        <a href="?cat=<?php echo $cat_just; ?>" class="dropdown-responsive__content">
                            <img src="<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $cat_just, 'thumbnail_id', true ) ) ?>" alt="">
                          <?php echo get_term($cat_just)->name; ?>
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
                            <p> <?php echo wp_kses_post(dokan_get_seller_short_address( $store_user->get_id(), false )); ?></p>
                        </div>
                        <div class="item-info__info--content">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/location.svg" alt="">
                            <p> <?php echo wp_kses_post(dokan_get_seller_short_address( $store_user->get_id(), false )); ?></p>
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
                        <?php       
                        $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'parent' => $cat_just, 'orderby' => 'menu_order', 'order' => 'asc' ));  
                        foreach($product_categories as $category): ?>
                            <li>
                                <img src="<?php echo wp_get_attachment_url( get_woocommerce_term_meta(  $category->term_id, 'thumbnail_id', true ) ); ?>" alt="">
                                <a class="<?php if( $subcat_just == $category->term_id) { echo 'active'; } ?>" href="?cat=<?php echo $category->term_id; ?>"><?= $category->name ?></a>
                            </li>
                        <?php endforeach; ?>      
                    </ul>
                </div>
            </div>
            <div class="tienda-menu__content--item">
                <div class="tienda-menu--item__products">
                   <?php 
                   if ($_GET["cat"] != NULL) {
                     $args = 
                     array(
                       'post_type' => 'product',
                       'paged' => $paged,
                       'posts_per_page' => 9,        
                       'post_status' => 'publish',
                       'tax_query' => array(
                       'relation'=>'AND', // 'AND' 'OR' ...
                         array(
                         'taxonomy'        => 'product_cat',
                         'field'           => 'term_id',
                         'terms'           => array($cat),
                         'operator'        => 'IN',
                         )),
                     );
                   } 
        
                   if ($_GET["cat"] == NULL) {
                     $args = 
                     array(
                                        'post_type' => 'product',
                       'paged' => $paged,
                       'posts_per_page' =>9,
                     );
                   } ?>
                   <?php $loop = new WP_Query( $args ); ?>
                   <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?>                 
                    <div class="menu--item__products--content">
                        <a href="<?php the_permalink(); ?>" class="menu-products__content--img">
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                        </a>
                        <a href="#" class="menu-products__content--content">
                            <div class="menu-products--content__title">
                                <p><?php the_title(); ?></p>
                                <span><?php echo $product->get_price_html(); ?></span>
                            </div>
                            <div class="menu-products--content__text">
                                <p><?php  echo strip_tags(cut_text(content(get_the_ID(),'product'),10));?></p>
                            </div>
                            <a href="?add-to-cart=<?php echo get_the_ID(); ?>" class="menu-products--content--boton">
                                 Agregar
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/carrito.png" alt="">
                            </a>
                        </a>
                        <?php if ($sale = get_post_meta( get_the_ID(), '_sale_price', true) != NULL){ ?>
                            <div class="card-oferta">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/Grupo 1694.png" alt="">
                            </div>
                        <?php } ?>
                    </div>
                   <?php endwhile; ?>          
                </div>
            </div>
            <div class="tienda-menu__content--item">
                <div class="tienda-menu--item__promo">
                    <p>Promociones Dasher</p>
                    <div class="menu-item__promo--content">
                        <img src="<?php echo get_theme_mod('promo_tienda_image'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>