<?php


class Student
{
    private int $id;
    private string $first_name, $last_name, $email, $created_at;
    private $password, $image;

    public function __construct($first_name, $last_name, $email, $password)
    {
        $pdo = openConnection();

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