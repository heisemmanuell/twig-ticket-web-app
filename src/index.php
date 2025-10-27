<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader,[
    'cache' => __DIR__ . '/../cache/twig',
    'auto_reload' => true,
]);

// Simple case based router: Add your routes here
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($path){
    case '/':
    case '/home':
        echo $twig->render('landing.twig',[
            'title'=> "Landing Page - Twig Starter Template",
            
        ]);
        break;
    case '/dashboard':
        echo $twig->render('dashboard.twig',[
            'title'=> "Dashboard - Twig Starter Template",
        ]);
        break;
    default:
    echo $twig->render('404.twig',[
        'title'=> "404 Not Found - Twig Starter Template",
    ]);
};
?>