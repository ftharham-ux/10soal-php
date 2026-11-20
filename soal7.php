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
function luas($r) {
    return 22/7 * $r * $r;
}
function keliling($r) {
    return 2 * 22/7 * $r;
}

foreach ([7, 14] as $r) {
    echo "Jari-jari: $r <br>";
    echo "Luas: " . luas($r) . "<br>";
    echo "Keliling: " . keliling($r) . "<br><br>";
}
?>

</body>
</html>

?>