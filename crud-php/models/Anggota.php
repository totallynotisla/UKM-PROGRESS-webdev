<?php
require_once 'config/database.php';

class Anggota
{
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = Database::connect();
    }

    public function getAll()
    {
        $query = "SELECT * FROM anggota";
        $result = $this->koneksi->query($query);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function insert(string $nim, string $nama, string $kelas)
    {
        $sql = "INSERT INTO anggota (nim, nama, kelas) VALUES (?, ?, ?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bind_param("sss", $nim, $nama, $kelas);
        $stmt->execute();
    }

    public function find(string $nim)
    {
        $query = "SELECT * FROM anggota WHERE nim = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("s", $nim);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();

    }

    public function update(string $nim, string $nama, string $kelas)
    {
        $query = "UPDATE  anggota SET nama = ?, kelas = ? WHERE nim = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("sss", $nama, $kelas, $nim);
        $stmt->execute();
    }

    public function delete(string $nim)
    {
        $query = "DELETE FROM anggota WHERE nim = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("s", $nim);
        $stmt->execute();
    }
}