<?php
require __DIR__ . '/vendor/autoload.php';
	$loader = new \Twig\Loader\FilesystemLoader('path/to/templates');
	$twig = new \Twig\Environment($loader, [
    'cache' => 'path/to/compilation_cache',

]);
	$tem = $twig->load('index.html');
	echo $tem->render();
?>