<?php
/*
Title: Actividades Settings
Setting: opciones_imgd
Order: 15
Tab: Actividades
Flow: Settings
*/

/* Línea de Actividades */
piklist(
  'field',
  array(
    'type' => 'radio',
    'scope' => 'post_meta',
    'field' => 'imgd_actividades',
    'label' => __('Mostar Línea de actividades en la Home Page', 'imgd'),
    'value' => 0,
    'attributes' => array(
      'class' => 'radio'
    ),
    'choices' => array(
      0 => __('No', 'imgd'),
      1 => __('Si', 'imgd')
    ),
    'position' => 'wrap'
  )
);

piklist(
  'field',
  array(
    'type' => 'select', 'field' => 'imgd_actividades_cant', 'description' => __('Cuantas Actividades Mostrar', 'imgd'), 'value' => '6', 'label' => __('Cantidad', 'imgd'), 'conditions' => array(
      array(
        'field' => 'imgd_actividades', 'value' => 1
      )
    ), 'attributes' => array(
      'class' => 'small-text'
    ), 'choices' => array(
      2 => 2,
      3 => 3,
      4 => 4,
      6 => 6,
      0 => 'Todas'
    )
  )
);

// Actividades Temporadas

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
