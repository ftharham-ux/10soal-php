<?php
session_start();
$pesan = "";

if (isset($_POST['login'])) {
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];

    if (isset($_SESSION['akun_terdaftar'])) {
        $akun = $_SESSION['akun_terdaftar'];

        if ($user_email === $akun['user_email'] && $password === $akun['password']) {
            $_SESSION['is_logged_in'] = true;
            header("Location: tampilan_login.php");
            exit;
        } else {
            $pesan = "<p style='color: red;'>Username/Email atau Password salah!</p>";
        }
    } else {
        $pesan = "<p style='color: orange;'>Belum ada akun terdaftar. Silakan registrasi terlebih dahulu.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
</head>
<body>
    <h2>Form LOGIN</h2>
    <?php echo $pesan; ?>

    <form method="POST" action="">
        <table>
            <tr>
                <td>Username / Email</td>
                <td>: <input type="text" name="user_email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="login">LOGIN</button>
                    <button type="reset">BATAL</button>
                </td>
            </tr>
        </table>
    </form>

    <br>
    <p>Belum punya akun? <a href="soal12.php">Daftar di sini</a></p>
</body>
</html>