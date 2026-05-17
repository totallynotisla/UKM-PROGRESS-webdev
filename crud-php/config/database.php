<?php

class Database
{
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '';
    private static $database = 'progress_db';

    public static function connect()
    {
        $koneksi = mysqli_connect(self::$host, self::$user, self::$password, self::$database);

        if ($koneksi->connect_error) {
            die('Gagal koneksi dengan DB: ' . $koneksi->connect_error);
        }

        return $koneksi;
    }
}