<?php


class Allstudents
{
    /** @var array Student[] */

    private array $students;

    public function __construct()
    {
        $pdo = openConnection();
        $arrayStudents = array();
        $getStudents = $pdo->prepare("SELECT * FROM student ORDER BY last_name ASC");
        $getStudents->execute();
        $students = $getStudents->fetchAll();
        foreach ($students as $student) {
            $student = new Student($student['id'], $student['first_name'], $student['last_name'], $student['email'], $student['created_at'], $student['password'], $student['image']);
            array_push($arrayStudents, $student);
        }
        $this->students = $arrayStudents;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function checkUser($user)
    {
        foreach ($this->getStudents() as $student) {
            if ($student->getEmail() == $user) {
                $newuser = $student;
            }
        }
        if (isset($newuser)) {
            return $newuser;
        } else {
            return $error = '';
        }

    }

    public function checkPsw($user, $psw)
    {
        $valid = false;
        foreach ($this->getStudents() as $student) {
            if ($student->getEmail() == $user) {
                if (password_verify($psw, $student->getPassword()) == true) {
                    $valid = true;
                }
            }
        }
        return $valid;
    }

    public function getStudentFromId($id)
    {
        foreach ($this->getStudents() as $student) {
            if ($student->getId() == $id) {
                return $student;
            }
        }
    }

    public function DeleteFromId($id)
    {
        foreach ($this->getStudents() as $student) {
            if ($student->getId() == $id) {
                $handle = $pdo->prepare('DELETE FROM student WHERE id = :id');
                $handle->bindValue(':id', $id);
                $handle->execute();
            }
        }
    }

    public function addStudent($first_name, $last_name, $email, $password)
    {
        $pdo = openConnection();
        date_default_timezone_set("Europe/Brussels");

        $image = getAPI();
        $created_at = date('Y-m-d H:i');
        $password = password_hash($password, PASSWORD_DEFAULT);
        $handle = $pdo->prepare('INSERT INTO student (first_name, last_name, email,created_at,password,image) VALUES (:first_name, :last_name, :email,:created_at, :password, :image)');
        $handle->bindValue(':first_name', $first_name);
        $handle->bindValue(':last_name', $last_name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':created_at', $created_at);
        $handle->bindValue(':password', $password);
        $handle->bindValue(':image', $image);
        $handle->execute();

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->created_at = $created_at;
        $this->password = $password;
        $this->image = $image;
    }

}