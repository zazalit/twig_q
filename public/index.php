<?php

require_once '../vendor/autoload.php';


$loader = new Twig\Loader\FilesystemLoader('../src/views');
$twig = new Twig\Environment($loader);

$products = [
     ['Plat' =>'Lasagne'],
     ['Plat'=>'Pizza'], 
     ['Plat' =>'Fondant au chocolat'],
     ['Plat'=> 'Madeleines'],
     ['Plat' =>'Couscous'],
];

    echo $twig->render('_index.html.twig', ['products' => $products]);
