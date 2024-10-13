<?php
namespace core;
use PDO;

class Database {
    private string $host = 'localhost';
    private string $user = 'root';
    private string $pwd = 'mysql';
    private string $dbName = 'shareboard';

    public function connect(): PDO
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
