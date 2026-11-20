<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal7</title>
</head>
<h2>Luas dan Keliling Lingkaran</h2>
<body>
    <h3>Berikut hasil luas dan keliling lingkaran yang memiliki jari-jari 7 dan 14 berturut-turut:</h3>
</body>
</html>

<?php
function hitunglingkaran($r) {
    $pi = ($r % 7 == 0) ? 22 / 7 : 3.14;
    $luas = $pi * $r * $r;
    $keliling = 2 * $pi * $r;
    return [$luas, $keliling];
}

foreach ([7, 14] as $r) {
    [$luas, $keliling] = hitunglingkaran($r);
    
echo "jari-jari (r): $r <br>";
echo "Luas Lingkaran: $luas <br>";
echo "Keliling Lingkaran: $keliling <br>";
}
    
?>

