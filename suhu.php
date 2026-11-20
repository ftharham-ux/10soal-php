<?php
$hasil = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $celcius = $_POST["celcius"] ?? "";

    if ($celcius !== "" && is_numeric($celcius)) {

        $c = (float) $celcius;

        // Rumus konversi suhu
        $reamur = (4 / 5) * $c;
        $fahrenheit = (9 / 5) * $c + 32;
        $kelvin = $c + 273;

        $hasil = true;

    } else {
        $error = "masukkan suhu Celcius yang VALIDD!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

    <h2>Mengkonversi Suhu</h2>

    <form method="POST">
        <label><h3>Masukkan Suhu Celcius:</h3></label>
        <input type="number" name="celcius"step="any" placeholder="Masukan suhu" required>

        <button type="submit">Konversi</button>
    </form>

    <br>

    <?php if ($hasil) { ?>

        <h3>Hasil Konversi:</h3>

        <p>Celcius: <?= $c ?> °C</p>
        <p>Reamur: <?= $reamur ?> °R</p>
        <p>Fahrenheit: <?= $fahrenheit ?> °F</p>
        <p>Kelvin: <?= $kelvin ?> K</p>

    <?php } ?>

    <?php if ($error != "") { ?>
        <p><?= $error ?></p>
    <?php } ?>

</body>
</html>