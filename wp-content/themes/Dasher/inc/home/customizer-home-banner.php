<?php
 
  /***************** home_banner  ******************/
  $wp_customize->add_section('home_banner', array (
    'title' => 'Home Banner',
    'panel' => 'panel1'
  ));


  for ($i=1; $i <=3; $i++) { 

    $wp_customize->add_setting('home_banner'.$i.'_title', array(
      'default' => ''
    ));    
  
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner'.$i.'_title_control', array (
      'label' => 'Banner '.$i.'',
      'description' => 'Título  ',
      'section' => 'home_banner',
      'settings' => 'home_banner'.$i.'_title',
      'type' => 'textarea'
    )));

    $wp_customize->add_setting('home_banner'.$i.'_subtitle', array(
      'default' => ''
    ));
  
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner'.$i.'_subtitle_control', array (
      'description' => 'Subtítulo',
      'section' => 'home_banner',
      'settings' => 'home_banner'.$i.'_subtitle',
      'type' => 'textarea'
    )));

    $wp_customize->add_setting('home_banner'.$i.'_button', array(
      'default' => ''
    ));
  
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner'.$i.'_button_control', array (
      'label' => 'Botón',
      'section' => 'home_banner',
      'settings' => 'home_banner'.$i.'_button',
    ))); 

    $wp_customize->add_setting('home_banner'.$i.'_urlbutton', array(
      'default' => ''
    ));
  
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_banner'.$i.'_urlbutton_control', array (
      'label' => 'Url Botón',
      'section' => 'home_banner',
      'settings' => 'home_banner'.$i.'_urlbutton',
    )));

    $wp_customize->add_setting('home_banner'.$i.'_image_desktop');
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_banner'.$i.'_image_desktop_control', array (
      'description' => 'Imagen Desktop',
      'section' => 'home_banner',
      'settings' => 'home_banner'.$i.'_image_desktop'
    )));

    $wp_customize->add_setting('home_banner'.$i.'_image_responsive');
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
      'home_banner'.$i.'_image_responsive_control', array (
      'description' => 'Imagen Responsive',
      'section' => 'home_banner',
      'settings' => 'home_banner'.$i.'_image_responsive'
    )));  
  }//for  

 
?>