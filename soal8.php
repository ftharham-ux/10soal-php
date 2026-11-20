<form method="POST">
    Nama:
    <input type="text" name="nama"><br><br>
    Kelas:
    <input type="text" name="kelas"><br><br>
     Hobi:
    <input type="text" name="hobi"><br><br>
    Nis:
    <input type="integer" name="nis"><br><br>
    Email:
    <input type="text" name="email"><br><br>
    Tanggal Lahir:
    <input type="date" name="tanggal_lahir"><br><br>

    <button type="submit" name="daftar">
        Daftar
    </button>
</form>

<?php
if (isset($_POST['daftar'])) {
    $nama = trim($_POST['nama']);
    $kelas = trim($_POST['kelas']);
    $Tanggal_Lahir = trim($_POST['tanggal_lahir']);
    $Hobi = trim($_POST['hobi']);
    $Nis = trim($_POST['nis']);
    $email = trim($_POST['email']);
    

    if (empty($nama) || empty($kelas) || empty($Hobi) || empty($Nis) || empty($email) || empty($tanggal_Lahir)){
        echo "Semua kolom harus diisi!";
    } else {
        echo "Pendaftaran berhasil!<br>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Kelas: " . htmlspecialchars($kelas) . "<br>";
        echo "Hobi: " . htmlspecialchars($Hobi) . "<br>";
        echo "Nis: " . htmlspecialchars($Nis) . "<br>";
        echo "Email" . htmlspecialchars($email) . "<br>";       
        echo "Tanggal: " . htmlspecialchars($tanggal_Lahir);
    }
}
?>