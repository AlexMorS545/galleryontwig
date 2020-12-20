<?php
include_once 'loadTwig.php';

$data = array_slice(scandir('./images'), 2);

try {
  $scr = [
    'title'=>'Галерея путешествий',
    'image_src'=>'images',
    'images'=>$data
  ];

  $template = $twig->render('index.tmpl', $scr);
  echo $template;
} catch (Exception $e) {
    die('Error:'.$e->getMessage());
}
