<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require 'Model/Database.php';
//include all your controllers here

require 'Controller/HomepageController.php';
require 'Controller/RegisterController.php';
require  'Controller/LoginController.php';




$controller = new HomepageController();

if(isset($_GET['page']) && $_GET['page'] === 'register') {
    $controller = new RegisterController();
}elseif (isset($_GET['page']) && $_GET['page'] === 'login'){ $controller = new LoginController();}


$controller->render($_GET, $_POST);