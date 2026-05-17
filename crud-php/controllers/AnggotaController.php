<?php
require_once 'models/Anggota.php';

class AnggotaController
{
    public function index()
    {
        $anggotaModel = new Anggota();
        $data = $anggotaModel->getAll();
        include 'views/Home.php';
    }

    public function createForm()
    {
        include "views/Create.php";
    }

    public function store()
    {
        $anggotaModel = new Anggota();

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        $anggotaModel->insert($nim, $nama, $kelas);

        header("location: index.php");
        exit;
    }

    public function editForm()
    {
        $anggotaModel = new Anggota();

        $nim = $_GET["nim"];
        $data = $anggotaModel->find($nim);


        include "views/Edit.php";
    }

    public function update()
    {
        $anggotaModel = new Anggota();

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        $anggotaModel->update($nim, $nama, $kelas);

        header("location: index.php");
        exit;
    }

    public function delete()
    {
        $anggotaModel = new Anggota();

        $nim = $_GET["nim"];

        $anggotaModel->delete($nim);

        header("location: index.php");
        exit;
    }
}