<?php

$DATABASE_HOST = "localhost";
$DATABASE_NAME = "latihan-php";
$DATABASE_USER = "root";
$DATABASE_PASSWORD = "";

try {
    global $conn;
    $conn = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

function getConnection()
{
    global $conn;
    return $conn;
}