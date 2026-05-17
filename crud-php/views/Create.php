<h2>Tambah Anggota Anak Progress</h2>

<form action="index.php?page=simpan" method="post">
    <label for="">NIM (9 digit)</label>
    <input type="text" name="nim" minlength="1" maxlength="9" required>
    <br>

    <label for="">NAMA</label>
    <input type="text" name="nama" minlength="1" maxlength="50" required>
    <br>

    <label for="">KELAS</label>
    <select required name="kelas">
        <option value="">Pilih Kelas</option>

        <option value="BEGINNER">BEGINNER</option>
        <option value="UIUX">UIUX</option>
        <option value="WEBDEV">WEBDEV</option>
        <option value="INTERMEDIATE">INTERMEDIATE</option>
    </select>
    <br>

    <button type="submit">Simpan</button>
    <a href="index.php"><button>Batal</button></a>
</form>