<?php
include 'database.php';
class User extends Database{
    private string $username;
    private string $email;
    private string $password;

    public function __construct($username='',$email='',$password=''){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    public function setUser(): void{
        $sql = "INSERT INTO users(username, email, password) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->username, $this->email, $this->password]);
    }

    public function emailCheck($email): bool{
        $sql = "SELECT count(username) FROM users WHERE email = ? ";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $result = $stmt->fetchColumn();
        if($result > 0){
            return true;
        }
        return false;
    }
}