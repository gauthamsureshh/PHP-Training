<?php
include 'user.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $confirmPwd = $_POST['confirmPwd'];

        if(empty($username) || empty($email) || empty($pwd) || empty($confirmPwd))
        {
            throw new Exception("empty");
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('invalid');
        }

        if($pwd !== $confirmPwd){
            throw new Exception('nomatch');
        }
        $check = new User();
        if($check->emailCheck($email)){
            throw new Exception('exists');
        }

        $hashPwd =password_hash($pwd, PASSWORD_DEFAULT);
        $user = new User($username, $email, $hashPwd);
        $user->setUser();
        header("Location: index.php?message=success");

    } catch (Exception $e) {
        $message = $e->getMessage();
        header("Location: index.php?message=$message");
    }
}