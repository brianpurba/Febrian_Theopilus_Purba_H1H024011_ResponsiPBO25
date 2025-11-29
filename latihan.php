<?php
require_once "classes/Parasect.php";
require_once "classes/Training.php";
require_once "classes/History.php";

$pokemon = new Parasect("Parasect", "Bug/Grass", 12, 180, "Spore Burst");
$result = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $jenis = $_POST['jenis'];
    $intensitas = (int) $_POST['intensitas'];

    $training = new Training($jenis, $intensitas);
    list($lvlUp, $hpUp) = $training->getEffect();

    $lvlBefore = $pokemon->getLevel();
    $hpBefore = $pokemon->getHP();

    $pokemon->increaseStats($lvlUp, $hpUp);

    $history = new History();
    $history->save([
        "jenis" => $jenis,
        "intensitas" => $intensitas,
        "level_before" => $lvlBefore,
        "level_after" => $pokemon->getLevel(),
        "hp_before" => $hpBefore,
        "hp_after" => $pokemon->getHP(),
        "time" => date("Y-m-d H:i:s")
    ]);

    $result = "
        <h3>Hasil Latihan:</h3>
        Level: $lvlBefore → {$pokemon->getLevel()} <br>
        HP: $hpBefore → {$pokemon->getHP()} <br>
        <p><b>Jurus Spesial:</b> {$pokemon->specialMove()}</p>
        <p><b>Deskripsi:</b> {$pokemon->specialMoveDescription()}</p>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Pokémon</title>
</head>
<body>

<h1>Latihan Pokémon Parasect</h1>

<form method="POST">
    <label>Jenis Latihan:</label>
    <select name="jenis">
        <option>Attack</option>
        <option>Defense</option>
        <option>Speed</option>
    </select>
    <br><br>

    <label>Intensitas Latihan:</label>
    <input type="number" name="intensitas" required>
    <br><br>

    <button type="submit">Mulai Latihan</button>
</form>

<hr>

<?= $result ?>

<br>
<a href="index.php">Kembali</a><br>
<a href="riwayat.php">Riwayat Latihan</a>

</body>
</html>
