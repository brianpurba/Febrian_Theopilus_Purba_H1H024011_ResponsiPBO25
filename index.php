<?php
require_once "classes/Parasect.php";

$pokemon = new Parasect("Parasect", "Bug/Grass", 12, 180, "Spore Burst");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beranda - Parasect</title>
</head>
<body>

<h1>Pokémon Kamu</h1>

<p><b>Nama Pokémon:</b> <?= $pokemon->getName(); ?></p>
<p><b>Tipe:</b> <?= $pokemon->getType(); ?></p>
<p><b>Level Awal:</b> <?= $pokemon->getLevel(); ?></p>
<p><b>HP Awal:</b> <?= $pokemon->getHP(); ?></p>
<p><b>Jurus Spesial:</b> <?= $pokemon->getSpecialMove(); ?></p>

<br>
<a href="latihan.php">Mulai Latihan</a><br>
<a href="riwayat.php">Riwayat Latihan</a>

</body>
</html>
