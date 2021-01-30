<?php

$page = 'home';

if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

switch ($page) {
    case 'home':
        $test = date("Y");
        require 'pages/home.php';
        break;

    case 'legalNotice':
        require 'pages/legalNotice.php';
        break;
    
    case 'weatherApplication':
        require 'pages/weatherApplication/weatherApplication.php';
        break;

    default:
        require 'pages/404.php';
        break;
}