<?php

namespace models;

use core\Database;
use PDO;

class Users
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db = $this->db->connect();
    }

    public function register($name, $email, $password): bool
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        return $stmt->execute();
    }

    public function login($email, $password)
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        if ($user && password_verify($password, $user->password)) {
            return $user;
        } else {
            return false;
        }
    }
}
