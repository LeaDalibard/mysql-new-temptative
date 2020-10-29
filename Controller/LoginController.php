<?php


class LoginController
{
    public function render(array $GET, array $POST)
    {
        //-----------------------------------Set Session

        if (!isset($_SESSION["loginmail"])) {
            $_SESSION["loginmail"] = "";
        }

        if (!isset($_SESSION["user"])) {
            $_SESSION["user"] = "";
        }

        $students = new Allstudents();

        //-----------------------------------Check Login

        $messagelogin = "";


        if (!empty($_POST["loginmail"])) {
            $_SESSION["loginmail"] = $_POST["loginmail"];
            $newuser = $students->checkUser($_POST["loginmail"]);
            if (empty($newuser)) {
                $messagelogin = "Something went wrong";
            } else {
                $_SESSION["user"] = $newuser->getId();
            }
        }
        if (!empty($_POST["loginpsw"])) {
            $valid = $students->checkPsw($_POST["loginmail"], $_POST["loginpsw"]);
            if ($valid == false) {
                $messagelogin = "Something went wrong";
                $_SESSION["user"] = "";
            } else {
                $newuser = $students->checkUser($_POST["loginmail"]);
                $_SESSION["user"] = $newuser->getId();
            }
        }

        if (isset($_POST['login']) && $messagelogin == '') {
            $messagesucess = "You are now logged !";
        }


        require 'View/login.php';
    }
}