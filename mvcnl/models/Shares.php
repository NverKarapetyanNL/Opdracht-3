<?php

namespace models;

use core\Database;
use PDO;

class Shares
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db = $this->db->connect();
    }

    public function getShares(): false|array
    {
        $stmt = $this->db->query('SELECT shares.*, users.name FROM shares INNER JOIN users ON shares.user_id = users.id ORDER BY create_date DESC');
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function addShare($user_id, $title, $body, $link): bool
    {
        $stmt = $this->db->prepare('INSERT INTO shares (user_id, title, body, link) VALUES (:user_id, :title, :body, :link)');
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':body', $body);
        $stmt->bindParam(':link', $link);
        return $stmt->execute();
    }

    public function deleteShare($id): bool
    {
        $query = 'DELETE FROM shares WHERE id = :id';

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}


