<?php
/*
Title: Home Page Abby
Setting: xopciones_imgd
Tab: Abby
Order: 20
Flow: IMGD Settings
*/


piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_slider_shortcode'
,'description' => __('Insert the Slider Shortcode', 'imgd')
,'value' => 'home'
,'label' => __('Slider Shortcode', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));


piklist('field', array(
    'type' => 'group'
    ,'field' => 'banner_group'
    ,'label' => __('Store Setting', 'imgd')
    ,'list' => false
    ,'description' => __('Insert here the Store banner data.', 'imgd')
    ,'fields' => array(
        array(
            'type' => 'text'
            ,'field' => 'imgd_banner_text'
            ,'value' => __('Save Up to 40% on selected items','imgd')
            ,'label' => __('Promo Text', 'imgd')
            ,'attributes' => array(
                'class' => 'regular-text'
            )
        )
    , array(
            'type' => 'text'
            ,'field' => 'imgd_banner_button'
            ,'value' => 'Shop Now!'
            ,'label' => __('Button Text', 'imgd')
            ,'attributes' => array(
                    'class' => 'regular-text'
                )
            )
    , array(
            'type' => 'text'
            ,'field' => 'imgd_banner_url'
            ,'value' => ''
            ,'placeholder'=>__('URL to the button','imgd')
            ,'label' => __('Button Link', 'imgd')
            ,'attributes' => array(
                    'class' => 'regular-text'
                )
            )
    )
    ));
