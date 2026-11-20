<?php
session_start();
$pesan = "";
$sukses = false;

if (isset($_POST['daftar'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $user_email = htmlspecialchars($_POST['user_email']);
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    if ($password !== $konfirmasi) {
        $pesan = "<p style='color: red;'>Konfirmasi password tidak cocok!</p>";
    } else {
        // Simpan data registrasi ke SESSION agar bisa dibaca oleh file login.php
        $_SESSION['akun_terdaftar'] = [
            'nama' => $nama,
            'user_email' => $user_email,
            'password' => $password
        ];
        $sukses = true;
        $pesan = "<p style='color: green;'>Registrasi berhasil! Silakan lanjut ke halaman Login.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form REGISTRASI</h2>
    <?php echo $pesan; ?>

    <form method="POST" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Username / Email</td>
                <td>: <input type="text" name="user_email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password" maxlength="8" required></td>
            </tr>
            <tr>
                <td>Konfirmasi Password</td>
                <td>: <input type="password" name="konfirmasi" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="daftar">DAFTAR</button>
                    <button type="reset">BATAL</button>
                </td>
            </tr>
        </table>
    </form>

    <br>
    <!-- Penghubung ke File B (soal12b.php) -->
    <?php if ($sukses): ?>
        <a href="soal12b.php"><button type="button">Lanjut ke Halaman LOGIN →</button></a>
    <?php else: ?>
        <p>Sudah punya akun? <a href="soal12b.php">Login di sini</a></p>
    <?php endif; ?>
</body>
</html>