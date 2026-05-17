<?php

$DATABASE_HOST = 'localhost';
$DATABASE_NAME = 'latihan';
$DATABASE_USERNAME = 'root';
$DATABASE_PASSWORD = '';

try {
    global $conn;
    $conn = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USERNAME, $DATABASE_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

function getConnection()
{
    global $conn;
    return $conn;
}