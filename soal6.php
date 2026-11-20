<?php
$nilai = [
    "Angger" => 85,
    "Fatur" => 90,
    "radit" => 80,
    "Fatih" => 95,
    "Rifki" => 20
];

$total = array_sum($nilai);
$rata = $total / count($nilai);
$tertinggi = max($nilai);
$terendah = min($nilai);
?>

<h1>Daftar Nilai Siswa</h1>

<?php foreach ($nilai as $nama => $angka) { ?>
<tr>
    <td><?= $nama ?></td>
    <td><?= $angka ?></td>
</tr>
<?php } ?>

</table>

<p>Rata-rata: <?= $rata ?></p>
<p>Nilai Tertinggi: <?= $tertinggi ?></p>
<p>Nilai Terendah: <?= $terendah ?></p>