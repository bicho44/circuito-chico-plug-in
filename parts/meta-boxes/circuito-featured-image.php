<?php
/*
Title: Imagenes y video
Post Type: imgd_actividad
Order: 40
Priority: default
Context: side
Collapse: false
Tab: All
Flow: Demo Workflow
*/
?>

<?php
  
  piklist('field', array(
    'type' => 'file'
    ,'field' => '_thumbnail_id' // Use this field to match WordPress featured image field name.
    ,'scope' => 'post_meta'
    ,'options' => array(
      'basic' => true,
      'title' => __('Imagen Principal', 'imgd')
      ,'button' => __('Cargue una Imagen Principal', 'imgd')
    )
  ));

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'imgd_youtube_url'
    ,'scope' => 'post_meta'
    ,'label' => __('Video Link', 'imgd')
    ,'help' => __('Coloque aquí el link del video YouTube', 'imgd')
    ,'attributes' => array(
      'class' => 'text'
    )
    ,'position' => 'wrap'
  ));

/*$uploaddir = wp_upload_dir();
$uploadfile = $uploaddir['path'] . '/' . $filename;

$contents= file_get_contents($uploadfile);
$savefile = fopen($uploadfile, 'w');
fwrite($savefile, $contents);
fclose($savefile);*/
?>
<div id="msg"></div>
<script type="text/javascript">

jQuery(document).ready(function( $ ) {

  $("#_post_meta_imgd_youtube_url_0").on('change',function () {
     var ytl = $( "#_post_meta_imgd_youtube_url_0" ).val();
     var yti = ytl.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
     //$('#_post_meta__thumbnail_id_0').val("http://i3.ytimg.com/vi/"+ yti[1] + "/hqdefault.jpg");
     $( "#msg" ).html( "<img src=\"http://i3.ytimg.com/vi/" + yti[1] + "/maxresdefault.jpg\" style=\"width: 150px;\" />");

     //<input name=\"imageURL\" id=\"copyimageURL\" class=\"text\" type=\"text\" value=\"http://i3.ytimg.com/vi/"+ yti[1] + "/maxresdefault.jpg\" onclick=\"this.select()\" readonly />" );
  });

});
</script>

<?php

  piklist('field', array(
    'type' => 'file'
    ,'field' => 'img_galeria_id'
    ,'scope' => 'post_meta'
    ,'options' => array(
      'title' => __('Galer&iacute; de Im&aacute;genes', 'imgd')
      ,'button' => __('Im&aacute;genes para la Galer&iacute;a', 'imgd')
    )
    ,'attributes' => array(
      'class' => 'galeria-admin'
    )
  ));