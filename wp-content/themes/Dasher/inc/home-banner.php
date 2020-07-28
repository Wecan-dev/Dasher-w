<?php
  /////Banner
  /*****************banner1 ******************/
  $wp_customize->add_section('banner', array (
    'title' => 'Main Banner',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('banner1_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner1_title_control', array (
    'label' => 'First Banner',
    'description' => 'Title',
    'section' => 'banner',
    'settings' => 'banner1_title',
  )));

  $wp_customize->add_setting('banner1_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner1_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'banner',
    'settings' => 'banner1_subtitle',
  )));

  $wp_customize->add_setting('banner1_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner1_button_control', array (
    'label' => 'Button',
    'section' => 'banner',
    'settings' => 'banner1_button',
  ))); 

  $wp_customize->add_setting('banner1_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner1_urlbutton_control', array (
    'label' => 'Url Button',
    'section' => 'banner',
    'settings' => 'banner1_urlbutton',
  )));

  $wp_customize->add_setting('banner1_image_desktop');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner1_image_desktop_control', array (
    'description' => 'Image Desktop',
    'section' => 'banner',
    'settings' => 'banner1_image_desktop'
  )));

  $wp_customize->add_setting('banner1_image_responsive');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner1_image_responsive_control', array (
    'description' => 'Image Responsive',
    'section' => 'banner',
    'settings' => 'banner1_image_responsive'
  )));  

  /*****************banner2 ******************/
   $wp_customize->add_setting('banner2_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner2_title_control', array (
    'label' => 'Second Banner',
    'description' => 'Title',
    'section' => 'banner',
    'settings' => 'banner2_title',
  )));

  $wp_customize->add_setting('banner2_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner2_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'banner',
    'settings' => 'banner2_subtitle',
  )));

  $wp_customize->add_setting('banner2_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner2_button_control', array (
    'label' => 'Button',
    'section' => 'banner',
    'settings' => 'banner2_button',
  ))); 

  $wp_customize->add_setting('banner2_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner2_urlbutton_control', array (
    'label' => 'Url Button',
    'section' => 'banner',
    'settings' => 'banner2_urlbutton',
  )));  

  $wp_customize->add_setting('banner2_image_desktop');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner2_image_desktop_control', array (
    'description' => 'Image Desktop',
    'section' => 'banner',
    'settings' => 'banner2_image_desktop'
  )));

  $wp_customize->add_setting('banner2_image_responsive');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner2_image_responsive_control', array (
    'description' => 'Image Responsive',
    'section' => 'banner',
    'settings' => 'banner2_image_responsive'
  ))); 

  /*****************banner3 ******************/ 
   $wp_customize->add_setting('banner3_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner3_title_control', array (
    'label' => 'Third Banner',
    'description' => 'Title',
    'section' => 'banner',
    'settings' => 'banner3_title',
  )));

  $wp_customize->add_setting('banner3_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner3_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'banner',
    'settings' => 'banner3_subtitle',
  )));

  $wp_customize->add_setting('banner3_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner3_button_control', array (
    'label' => 'Button',
    'section' => 'banner',
    'settings' => 'banner3_button',
  ))); 

  $wp_customize->add_setting('banner3_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner3_urlbutton_control', array (
    'label' => 'Url Button',
    'section' => 'banner',
    'settings' => 'banner3_urlbutton',
  )));

  $wp_customize->add_setting('banner3_image_desktop');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner3_image_desktop_control', array (
    'description' => 'Image Desktop',
    'section' => 'banner',
    'settings' => 'banner3_image_desktop'
  )));

  $wp_customize->add_setting('banner3_image_responsive');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner3_image_responsive_control', array (
    'description' => 'Image Responsive',
    'section' => 'banner',
    'settings' => 'banner3_image_responsive'
  ))); 
?>