<?php
require __DIR__ . '/vendor/autoload.php';// подключаем пакеты из composer
  $loader = new \Twig\Loader\FilesystemLoader('templates');
  $twig = new \Twig\Environment($loader, [
    'cache' => 'compilation_cache',
]);
  //render = выводит шаблон пишет страницу в кэш
  //display = выводит шаблон на прямую

  $template = $twig ->load('index.html');
  echo $template -> render();

?>