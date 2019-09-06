<?php
/*
Title: Link de Compra
Post Type: imgd_actividad
Description: Campo para el link de compra

Order: 30
Priority: default
Context: side
Collapse: false

Author: Federico Reinoso
Author email: admin@imgdigital.com.ar
*/

// piklist('field', array(
//     'type' => 'editor',
//     'field' => 'imgd_aspectos_importantes_field',
//     'label' => __('Datos a tener en cuenta en esta excursi&oacute;n', 'imgd')
// ));

piklist('field', array(
  'type' => 'text',
  'field' => 'imgd_texto_link_compra_field',
  'label' => __('Texto a mostrar en el botón para acceder al link', 'imgd'),
));

piklist('field', array(
    'type' => 'text',
    'field' => 'imgd_link_compra_field',
    'label' => __('Link de Compra y / o Mercado Pago', 'imgd'),
 ));
