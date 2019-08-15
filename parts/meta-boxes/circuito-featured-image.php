<?php
/*
Title: Imagenes y video
Post Type: imgd_actividad
Order: 40
Priority: default
Context: side
Collapse: false
Tab: All
Flow: Demo Workflow
*/
?>

<?php
  
  piklist('field', array(
    'type' => 'file'
    ,'field' => '_thumbnail_id' // Use this field to match WordPress featured image field name.
    ,'scope' => 'post_meta'
    ,'options' => array(
      'basic' => true,
      'title' => __('Imagen Principal', 'imgd')
      ,'button' => __('Cargue una Imagen Principal', 'imgd')
    )
  ));

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'imgd_youtube_url'
    ,'scope' => 'post_meta'
    ,'label' => __('Video Link', 'imgd')
    ,'help' => __('Coloque aquí el link del video YouTube', 'imgd')
    ,'attributes' => array(
      'class' => 'regular-text'
    )
  ));
  
  piklist('field', array(
    'type' => 'file'
    ,'field' => 'img_galeria_id'
    ,'scope' => 'post_meta'
    ,'options' => array(
      'title' => __('Galer&iacute; de Im&aacute;genes', 'imgd')
      ,'button' => __('Im&aacute;genes para la Galer&iacute;a', 'imgd')
    )
    ,'attributes' => array(
      'class' => 'galeria-admin'
    )
  ));