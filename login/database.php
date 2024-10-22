<?php

class Database {
    private string $host = "localhost";
    private string $username = "root";
    private string $pwd = "";
    private string $dbName = "test";

    protected function connect(): PDO | string{
        try {
            $conn = "mysql:host=$this->host; dbname=$this->dbName";
            return  new PDO($conn, $this->username, $this->pwd);

        } catch(PDOException $e) {
            return "Failed to establish connection with server". $e->getMessage();
        }
    }
}