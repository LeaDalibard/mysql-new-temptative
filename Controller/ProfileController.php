<?php


class ProfileController
{
    public function render(array $GET, array $POST)

    {

        $students = new Allstudents();
        $profileStudent = $students->getStudentFromId($_SESSION["profileId"]);
        var_dump($profileStudent);
        var_dump($_SESSION['user']);

        if(isset($_POST['delete']) && $_SESSION['user']==$profileStudent->getId()){
            $students->getStudentFromId($_SESSION['user']);
            $messageDelete='Your record has been deleted';
            $_SESSION['user']="";
        }


        require 'View/profile.php';
    }

}