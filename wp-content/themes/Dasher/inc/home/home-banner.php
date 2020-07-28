<?php
 
  /***************** home_banner  ******************/
  $wp_customize->add_section('home_banner', array (
    'title' => 'Home Banner',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('home_banner1_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner1_title_control', array (
    'label' => 'Banner 1',
    'description' => 'Título  ',
    'section' => 'home_banner',
    'settings' => 'home_banner1_title',
  )));

  $wp_customize->add_setting('home_banner1_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner1_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'home_banner',
    'settings' => 'home_banner1_subtitle',
  )));

  $wp_customize->add_setting('home_banner1_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner1_button_control', array (
    'label' => 'Botón',
    'section' => 'home_banner',
    'settings' => 'home_banner1_button',
  ))); 

  $wp_customize->add_setting('home_banner1_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner1_urlbutton_control', array (
    'label' => 'Url Botón',
    'section' => 'home_banner',
    'settings' => 'home_banner1_urlbutton',
  )));

  $wp_customize->add_setting('home_banner1_image_desktop');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_banner1_image_desktop_control', array (
    'description' => 'Imagen Desktop',
    'section' => 'home_banner',
    'settings' => 'home_banner1_image_desktop'
  )));

  $wp_customize->add_setting('home_banner1_image_responsive');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_banner1_image_responsive_control', array (
    'description' => 'Imagen Responsive',
    'section' => 'home_banner',
    'settings' => 'home_banner1_image_responsive'
  )));  

  /*****************home_banner2 ******************/

  $wp_customize->add_setting('home_banner2_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner2_title_control', array (
    'label' => 'Banner 1',
    'description' => 'Título  ',
    'section' => 'home_banner',
    'settings' => 'home_banner2_title',
  )));

  $wp_customize->add_setting('home_banner2_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner2_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'home_banner',
    'settings' => 'home_banner2_subtitle',
  )));

  $wp_customize->add_setting('home_banner2_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner2_button_control', array (
    'label' => 'Botón',
    'section' => 'home_banner',
    'settings' => 'home_banner2_button',
  ))); 

  $wp_customize->add_setting('home_banner2_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner2_urlbutton_control', array (
    'label' => 'Url Botón',
    'section' => 'home_banner',
    'settings' => 'home_banner2_urlbutton',
  )));

  $wp_customize->add_setting('home_banner2_image_desktop');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_banner2_image_desktop_control', array (
    'description' => 'Imagen Desktop',
    'section' => 'home_banner',
    'settings' => 'home_banner2_image_desktop'
  )));

  $wp_customize->add_setting('home_banner2_image_responsive');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_banner2_image_responsive_control', array (
    'description' => 'Imagen Responsive',
    'section' => 'home_banner',
    'settings' => 'home_banner2_image_responsive'
  )));  

  /*****************home_banner3 ******************/ 

  $wp_customize->add_setting('home_banner3_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner3_title_control', array (
    'label' => 'Banner 1',
    'description' => 'Título  ',
    'section' => 'home_banner',
    'settings' => 'home_banner3_title',
  )));

  $wp_customize->add_setting('home_banner3_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner3_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'home_banner',
    'settings' => 'home_banner3_subtitle',
  )));

  $wp_customize->add_setting('home_banner3_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner3_button_control', array (
    'label' => 'Botón',
    'section' => 'home_banner',
    'settings' => 'home_banner3_button',
  ))); 

  $wp_customize->add_setting('home_banner3_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner3_urlbutton_control', array (
    'label' => 'Url Botón',
    'section' => 'home_banner',
    'settings' => 'home_banner3_urlbutton',
  )));

  $wp_customize->add_setting('home_banner3_image_desktop');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_banner3_image_desktop_control', array (
    'description' => 'Imagen Desktop',
    'section' => 'home_banner',
    'settings' => 'home_banner3_image_desktop'
  )));

  $wp_customize->add_setting('home_banner3_image_responsive');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_banner3_image_responsive_control', array (
    'description' => 'Imagen Responsive',
    'section' => 'home_banner',
    'settings' => 'home_banner3_image_responsive'
  )));  

?>