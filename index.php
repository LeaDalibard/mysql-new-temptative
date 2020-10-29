<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();


require 'Model/Database.php';
require 'Model/Student.php';
require 'Model/Allstudents.php';
//include all your controllers here

require 'Controller/HomepageController.php';
require 'Controller/RegisterController.php';
require 'Controller/LoginController.php';
require 'Controller/ProfileController.php';



$controller = new HomepageController();

if (isset($_GET['page']) && $_GET['page'] === 'register') {
    $controller = new RegisterController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'login') {
    $controller = new LoginController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'profile') {
    if (isset($_GET['user'])) {
        $_SESSION["profileId"] = $_GET['user'];
    }
    $controller = new ProfileController();
}


$controller->render($_GET, $_POST);