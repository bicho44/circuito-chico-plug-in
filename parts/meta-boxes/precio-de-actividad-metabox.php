<?php
/*
Title: Precio Actividad
Post Type: imgd_actividad
Description: Precio de la actividad según la temporada

Order: 10
Priority: default
Context: normal
Collapse: false

Author: Federico Reinoso
Author email: admin@imgdigital.com.ar
*/

// piklist('field', array(
//     'type' => 'editor',
//     'field' => 'imgd_aspectos_importantes_field',
//     'label' => __('Datos a tener en cuenta en esta excursi&oacute;n', 'imgd')
// ));
/**
 * <input type="number" name="price"
  *         pattern="[0-9]+([\.,][0-9]+)?" step="0.01"
 *           title="This should be a number with up to 2 decimal places.">
 */
piklist('field', array(
  'type' => 'number',
'pattern'=> '[0-9]+([\.,][0-9]+)?',
'step'=>'0.01',
  'field' => 'imgd_price_actividad_baja',
  'label' => __('Temporada Baja', 'imgd'),
));

piklist('field', array(
  'type' => 'number',
  'field' => 'imgd_price_actividad_media',
  'label' => __('Temporada Media', 'imgd'),
));
piklist('field', array(
  'type' => 'number',
  'field' => 'imgd_price_actividad_alta',
  'label' => __('Temporada Alta', 'imgd'),
));
