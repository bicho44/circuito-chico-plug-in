<?php
/*
Title: Itinerario
Post Type: imgd_actividad
Description: Datos del Itininerario
Priority: high
Order: 3
Author: Federico Reinoso
Author email: admin@imgdigital.com.ar
*/

// piklist('field', array(
//     'type' => 'editor',
//     'field' => 'imgd_itinerario_field',
//     'label' => __('Itinerario de la excursi&oacute;n', 'imgd')
// ));


piklist('field', array(
    'type' => 'editor',
    'field' => 'imgd_itinerario_field',
    'label' => __('Itinerario de la excursi&oacute;n', 'imgd'),
    'options' => array( // Pass any option that is accepted by wp_editor()
      'wpautop' => true,
      'media_buttons' => true,
      'shortcode_buttons' => true,
      'teeny' => false,
      'dfw' => false,
      'quicktags' => true,
      'drag_drop_upload' => true,
      'tinymce' => array(
        'resize' => false,
        'wp_autoresize_on' => true
      )
    )
 ));