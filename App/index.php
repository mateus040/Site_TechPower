<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case '/home':
        include 'View/home.php';
    break;

    case '/login':
        include 'View/login.php';
    break;

    case '/cadastrar':
        include 'View/cadastrar.php';
    break;


    
    default:
        header("Location: /login");
    break;
}