<?php
$nim = $data["nim"];
$nama = $data["nama"];
$kelas = $data["kelas"];
?>

<h2>Edit Anggota</h2>

<form action="index.php?page=update" method="post">
    <input type="hidden" value="<?= $nim ?>" name="nim" minlength="1" maxlength="9" required>
    <br>

    <label for="">NAMA</label>
    <input value="<?= $nama ?>" type="text" name="nama" minlength="1" maxlength="50" required>
    <br>

    <label for="">KELAS</label>
    <select required name="kelas">
        <option value="">Pilih Kelas</option>

        <option value="BEGINNER" <?= ($kelas === "BEGINNER") ? "selected" : "" ?>>BEGINNER</option>
        <option value="UIUX" <?= ($kelas === "UIUX") ? "selected" : "" ?>>UIUX</option>
        <option value="WEBDEV" <?= ($kelas === "WEBDEV") ? "selected" : "" ?>>WEBDEV</option>
        <option value="INTERMEDIATE" <?= ($kelas === "INTERMEDIATE") ? "selected" : "" ?>>INTERMEDIATE</option>
    </select>
    <br>

    <button type="submit">Simpan</button>
    <a href="index.php"><button>Batal</button></a>
</form>