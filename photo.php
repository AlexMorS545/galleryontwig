<?php
include_once 'loadTwig.php';

$image = $_GET['img'];

try {
  $scr = [
    'title'=>'Фото путешествий',
    'image_src'=>'images',
    'images'=>$image
  ];

  $template = $twig->render('photo.tmpl', $scr);
  echo $template;
} catch (Exception $e) {
  die('Error:'.$e->getMessage());
}
