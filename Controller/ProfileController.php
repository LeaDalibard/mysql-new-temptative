<?php


class ProfileController
{
    public function render(array $GET, array $POST)

    {

        $students = new Allstudents();
        $profileStudent = $students->getStudentFromId($_SESSION["profileId"]);
        var_dump($profileStudent);
        var_dump($_SESSION['user']);

        require 'View/profile.php';
    }

}