<?php
/*
Title: Aspectos Importantes
Post Type: imgd_actividad
Description: Espacio para las Recomendaciones Importantes
Priority: high
Order: 3
Author: Federico Reinoso
Author email: admin@imgdigital.com.ar
*/

// piklist('field', array(
//     'type' => 'editor',
//     'field' => 'imgd_aspectos_importantes_field',
//     'label' => __('Datos a tener en cuenta en esta excursi&oacute;n', 'imgd')
// ));

piklist('field', array(
    'type' => 'editor',
    'field' => 'imgd_aspectos_importantes_field', 
    'label' => __('Datos a tener en cuenta en esta excursi&oacute;n', 'imgd'),
    'options' => array( // Pass any option that is accepted by wp_editor()
      'wpautop' => true,
      'media_buttons' => true,
      'shortcode_buttons' => false,
      'teeny' => false,
      'dfw' => false,
      'quicktags' => true,
      'drag_drop_upload' => true,
      'tinymce' => array(
        'resize' => false,
        'wp_autoresize_on' => false,
        'toolbar1'=>'bold,italic,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink,pastetext,removeformat',
        'toolbar2' =>''
        )
    )
 ));