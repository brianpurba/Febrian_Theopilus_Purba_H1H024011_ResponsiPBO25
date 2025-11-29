<?php
require_once "classes/History.php";

$history = new History();
$data = $history->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Latihan</title>
</head>
<body>

<h1>Riwayat Latihan Parasect</h1>

<?php if(count($data) == 0): ?>
    <p>Belum ada riwayat latihan.</p>
<?php else: ?>

<table border="1" cellpadding="5">
    <tr>
        <th>Jenis Latihan</th>
        <th>Intensitas</th>
        <th>Level Sebelum</th>
        <th>Level Sesudah</th>
        <th>HP Sebelum</th>
        <th>HP Sesudah</th>
        <th>Waktu</th>
    </tr>

    <?php foreach($data as $row): ?>
    <tr>
        <td><?= $row['jenis'] ?></td>
        <td><?= $row['intensitas'] ?></td>
        <td><?= $row['level_before'] ?></td>
        <td><?= $row['level_after'] ?></td>
        <td><?= $row['hp_before'] ?></td>
        <td><?= $row['hp_after'] ?></td>
        <td><?= $row['time'] ?></td>
    </tr>
    <?php endforeach; ?>

</table>

<?php endif; ?>

<br>
<a href="index.php">Kembali ke Beranda</a>

</body>
</html>
