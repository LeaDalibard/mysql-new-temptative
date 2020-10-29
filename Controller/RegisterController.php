<?php


class RegisterController
{
    public function render(array $GET, array $POST)
    {

        //-----------------------------------Set Session
        if (!isset($_SESSION["first_name"])) {
            $_SESSION["first_name"] = "";
        }
        if (!isset($_SESSION["last_name"])) {
            $_SESSION["last_name"] = "";
        }
        if (!isset($_SESSION["email"])) {
            $_SESSION["email"] = "";
        }


        //-----------------------------------Check if email valid
        $messageregister ='';

        if (!empty($_POST['email'])) {
            $_SESSION["first_name"] = $_POST['first_name'];
            $_SESSION["last_name"] = $_POST['last_name'];
            $_SESSION["email"] = $_POST['email'];
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $messageregister = "Email is not a valid email address";
            }
        }
        //-----------------------------------    Check if password and password confirm are equal

        if (!empty($_POST['psw']) && !empty($_POST['pswrpt'])) {
            if ($_POST['psw'] != $_POST['pswrpt']) {
                $_SESSION["first_name"] = $_POST['first_name'];
                $_SESSION["last_name"] = $_POST['last_name'];
                $_SESSION["email"] = $_POST['email'];
                $messageregister = "Password and Password confirm do not match, please enter your password again";
            }
        }

        //-----------------------------------    Register

       if (isset($_POST['register']) && $messageregister==''){
           $register=new Student($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['psw']);
           $messagesucess="You have been registered";
       }


        require 'View/register.php';
    }
}