<?php


class HomepageController
{
    public function render(array $GET, array $POST)
    {
        if (isset($_POST['logout'])){
            $_SESSION["user"]="";
        }

        require 'View/homepage.php';
    }
}