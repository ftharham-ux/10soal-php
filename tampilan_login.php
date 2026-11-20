<?php
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$nama_user = $_SESSION['akun_terdaftar']['nama'];
$email_user = $_SESSION['akun_terdaftar']['user_email'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Halaman Utama</title>
</head>
<body>
    <h2>Selamat Datang di Halaman Utama (Dashboard)!</h2>
    
    <p>Halo, <b><?php echo $nama_user; ?></b>! Anda berhasil masuk ke sistem.</p>
    <p>Username / Email Anda: <b><?php echo $email_user; ?></b></p>
    
    <hr>
    <p>Ini adalah halaman rahasia yang hanya bisa dilihat setelah Anda melakukan login.</p>

    
    <br>
    <a href="logout.php">
        <button type="button" style="background-color: red; color: white; padding: 5px 10px; cursor: pointer;">LOGOUT</button>
    </a>
</body>
</html>