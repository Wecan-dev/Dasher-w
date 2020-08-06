<?php
 
  /***************** category_banner  ******************/
  $wp_customize->add_section('category_banner', array (
    'title' => 'Categoría Banner',
    'panel' => 'panel2'
  ));


  for ($i=1; $i <=3; $i++) { 

    $wp_customize->add_setting('category_banner'.$i.'_title', array(
      'default' => ''
    ));    
  
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'category_banner'.$i.'_title_control', array (
      'label' => 'Banner '.$i.'',
      'description' => 'Título  ',
      'section' => 'category_banner',
      'settings' => 'category_banner'.$i.'_title',
      'type' => 'textarea'
    )));


    $wp_customize->add_setting('category_banner'.$i.'_image_desktop');
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'category_banner'.$i.'_image_desktop_control', array (
      'description' => 'Imagen Desktop',
      'section' => 'category_banner',
      'settings' => 'category_banner'.$i.'_image_desktop'
    )));
 
  }//for  

 
?>