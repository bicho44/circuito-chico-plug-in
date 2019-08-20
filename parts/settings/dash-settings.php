<?php
/*
Title: Home Page Settings
Setting: xopciones_imgd
Order: 10
Tab: Home
Flow: IMGD Settings
*/

piklist (
    'field',
    array(
        'type' => 'radio',
        'scope' => 'post_meta',
        'field' => 'imgd_slider',
        'label' => __('Activar Slideshow en Home Page', 'imgd'),
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

$sliders=array();
$sliders['boo']=__('Carousel Bootstrap','imgd');

if(function_exists('revslider')) {
  $sliders['rev']=__('Revolution Slider','imgd');
}
if(function_exists('owlslider')) {
  $sliders['owl']=__('Owl Slider','imgd');
}

piklist (
    'field',
    array(
        'type' => 'radio',
        'scope' => 'post_meta',
        'field' => 'imgd_slider_type',
        'label' => __('Seleccione el Slideshow para el Home Page', 'imgd'),
        'value' => 'boo',
        'attributes' => array(
            'class' => 'radio'
        )
        , 'choices' => $sliders
        , 'position' => 'wrap'
        , 'conditions' => array(
                array(
                    'field' => 'imgd_slider'
                    , 'value' => 1
                )
            )
    )
);

$thumbnail_post_types = array();

$registered_post_types = piklist(
   get_post_types(
     array()
     ,'objects'
   )
   ,array(
     'name'
     ,'label'
   )
  );

foreach ($registered_post_types as $post_type => $value)
{
  if(post_type_supports($post_type, 'thumbnail'))
  {
    $thumbnail_post_types[$post_type] = $value;
  }
}

  piklist('field', array(
    'type' => 'checkbox'
    ,'field' => 'imgd_slider_post'
    ,'label' => 'Post Type Disponibles'
    ,'choices' => $thumbnail_post_types
    , 'conditions' => array(
            array(
                'field' => 'imgd_slider'
                , 'value' => 1
            )
        )
  ));


/*piklist('field', array(
    'type' => 'group'
,'field' => 'insta_group'
,'label' => __('Instagram Setting', 'imgd')
,'list' => false
,'columns'=> 6
,'description' => __('Titles You use in the news section.', 'imgd')
,'fields' =>  array (

 array(
    'type' => 'text'
,'field' => 'imgd_news_title2'
,'value' => 'Instagram'
,'label' => __('Social Column Title', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
)
, array(
    'type' => 'text'
,'field' => 'imgd_news_link2'
,'value' => ''
,'label' => __('Social Column Title Link', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
        , 'placeholder'=>__('Type the URL', 'imgd')
    )
)
    , array(
    'type' => 'text'
,'field' => 'imgd_news_shortcode'
,'value' => ''
,'label' => __('Shortcode', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    , 'placeholder'=>__('[ISW id=XXXX]', 'imgd')
    )
))));*/
