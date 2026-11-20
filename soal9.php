<form method="POST">
    Angka 1:
    <input type="number" name="a" required><br><br>

    Angka 2:
    <input type="number" name="b" required><br><br>

    Operasi:
    <select name="operator">
        <option value="+">Tambah</option>
        <option value="-">Kurang</option>
        <option value="*">Kali</option>
        <option value="/">Bagi</option>
    </select>

    <button type="submit" name="hitung">
        Hitung
    </button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $a = (float) $_POST['a'];
    $b = (float) $_POST['b'];
    $op = $_POST['operator'];

    switch ($op) {
        case "+":
            $hasil = $a + $b;
            break;

        case "-":
            $hasil = $a - $b;
            break;

        case "*":
            $hasil = $a * $b;
            break;

        case "/":
            if ($b == 0) {
                echo "Tidak bisa dibagi nol!";
                exit;
            }
            $hasil = $a / $b;
            break;

        default:
            echo "Operator tidak valid!";
            exit;
    }

    echo "Hasil: $hasil";
}
?>