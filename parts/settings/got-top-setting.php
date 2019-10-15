<?php
/*
Title: Go to Top
Setting: opciones_imgd
Order: 20
Tab: Go To Top
Flow: Settings
*/

piklist(
  'field',
  array(
    'type' => 'radio',
    'scope' => 'post_meta',
    'field' => 'imgd_goto_top',
    'label' => __('Muestra el GotoTop?', 'imgd'),
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

piklist('field', array(
  'type' => 'file', 'field' => 'imgd_image_to_top', 'label' => __('Imagen del Goto top', 'imgd'), 'options' => array(
    'basic' => true
  ), 'conditions' => array(
    array(
      'field' => 'imgd_goto_top', 'value' => 1
    )
  )
));
