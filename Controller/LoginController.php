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
        //-----------------------------------Check Login

        $messagelogin ="";

        $students=new Allstudents();


        if (!empty($_POST["loginmail"])) {
            $_SESSION["loginmail"] =$_POST["loginmail"];
            $newuser=$students->checkUser($_POST["loginmail"]);
            if(empty($newuser)){$messagelogin ="Something went wrong";}
            else{$_SESSION["user"] = $newuser;}
        }
        if (!empty($_POST["loginpsw"])) {
            $valid=$students->checkPsw($_POST["loginmail"],$_POST["loginpsw"]);
            if($valid==false){
                $messagelogin ="Something went wrong";
                $_SESSION["user"] ="";
            } else {$_SESSION["user"] =$students->checkUser($_POST["loginmail"]);}
        }

        if (isset($_POST['login']) &&  $messagelogin==''){
            $messagesucess="You are now logged !";
        }



        require 'View/login.php';
    }
}