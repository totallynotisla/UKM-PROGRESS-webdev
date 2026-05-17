<?php
require_once "database.driver.php";

class DatabaseAdapter
{
    private $con;

    public function __construct()
    {
        $this->con = getConnection();
    }

    public function query(string $query): array
    {
        $statement = $this->con->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execute(string $query): bool
    {
        $statement = $this->con->prepare($query);
        return $statement->execute();
    }

    public function update(string $query, array $params): bool
    {
        $statement = $this->con->prepare($query);
        return $statement->execute($params);
    }

    public function getConnection()
    {
        return $this->con;
    }

}