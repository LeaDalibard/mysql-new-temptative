<?php


class ProfileController
{
    public function render(array $GET, array $POST)

    {

        $students = new Allstudents();
        $profileStudent = $students->getStudentFromId($_SESSION["profileId"]);


        if(isset($_POST['delete']) && $_SESSION['user']==$profileStudent->getId()){
            $students->DeleteFromId($_SESSION['user']);
            $messageDelete='Your record has been deleted';
            $_SESSION['user']="";
        }

        if(isset($_POST['update']) && $_SESSION['user']==$profileStudent->getId()){
            if(isset($_POST['new_first_name'])&&isset($_POST['new_last_name'])&&isset($_POST['new_email'])&&isset($_POST['new_image'])){
                $students->updateStudent($_POST['new_first_name'],$_POST['new_last_name'],$_POST['new_email'],$_POST['new_image'],$_SESSION['user']);
                $messageUpdate='Your record has been updated';
            }
        }


        require 'View/profile.php';
    }

}