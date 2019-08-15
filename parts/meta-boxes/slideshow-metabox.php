<?php
/*
Title: Slide Show
Post Type: page,post,portfolio_item,portfolio_project,product,imgd_programa
Description: Un Meta Box para que este post aparezca en el slideshow del Front Page
Priority: high
Order: 3
Context: side
Author: Federico Reinoso
Author email: admin@imgdigital.com.ar
*/

piklist (
    'field',
    array(
        'type' => 'radio',
        'scope' => 'post_meta',
        'field' => 'imgd_slideshow',
        'label' => __('Mostrar en SlideShow', 'imgd'),
        'value' => 0,
        'attributes' => array(
            'class' => 'radio'
        ),
        'choices' => array(
            0 => __('No mostrar', 'imgd'),
            1 => __('Mostrar', 'imgd')
        ),
        'position' => 'wrap'
    )
);

piklist (
    'field',
    array(
        'type' => 'radio',
        'scope' => 'post_meta',
        'field' => 'imgd_home',
        'label' => __('Destacar', 'imgd'),
        'description'=>__('Colocar este item en la Home Page en la segunda línea','imgd'),
        'value' => 0,
        'attributes' => array(
            'class' => 'radio'
        ),
        'choices' => array(
            0 => __('No Destacar', 'imgd'),
            1 => __('Destacar', 'imgd')
        ),
        'position' => 'wrap'
    )
);
piklist (
    'field',
    array(
        'type' => 'radio',
        'scope' => 'post_meta',
        'field' => 'imgd_home_news',
        'label' => __('Destacar News', 'imgd'),
        'description'=>__('Colocar este item en la Home Page en la Seccion de noticias','imgd'),
        'value' => 0,
        'attributes' => array(
            'class' => 'radio'
        ),
        'choices' => array(
            0 => __('No Destacar', 'imgd'),
            1 => __('Destacar', 'imgd')
        ),
        'position' => 'wrap'
    )
);