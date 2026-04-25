<?php
require_once "database.driver.php";

class DatabaseAdapter
{
    private $conn;

    public function __construct()
    {
        $this->conn = getConnection();
    }

    public function query(string $query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update(string $query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function executeInsert(string $query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function getConnection()
    {
        return $this->conn;
    }
}