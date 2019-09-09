<?php
/*
Title: Actividades Settings
Setting: opciones_imgd
Order: 10
Tab: Home
Flow: IMGD Settings
*/


piklist('field', array(
    'type' => 'date',
    'field' => 'imgd_actividades_fecha_inicio_alta',
    'label' => __('Inicio de Temporada Alta', 'imgd'),
  ));

  piklist('field', array(
    'type' => 'date',
    'field' => 'imgd_actividades_fecha_inicio_media',
    'label' => __('Inicio de Temporada Media', 'imgd'),
  ));


piklist('field', array(
    'type' => 'date',
    'field' => 'imgd_actividades_fecha_inicio_baja',
    'label' => __('Inicio de Temporada Baja', 'imgd'),
  ));
