<?php
 
  /***************** promo_tienda ******************/
  $wp_customize->add_section('promo_tienda', array (
    'title' => 'Promo Tienda',
    'panel' => 'panel3'
  ));

  $wp_customize->add_setting('promo_tienda_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'promo_tienda_image_control', array (
    'description' => 'Imagen Promoción',
    'section' => 'promo_tienda',
    'settings' => 'promo_tienda_image'
  )));
 
?>