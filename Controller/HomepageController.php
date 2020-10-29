<?php


class HomepageController
{

    public function render(array $GET, array $POST)
    {
        $students = new Allstudents();

        if (!isset($_SESSION["profileId"])) {
            $_SESSION["profileId"] = "";
        }

        if (isset($_POST['logout'])) {
            $_SESSION["user"] = "";
        }



        require 'View/homepage.php';
    }
}