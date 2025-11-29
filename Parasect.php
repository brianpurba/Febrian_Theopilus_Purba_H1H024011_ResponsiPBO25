<?php
require_once "Pokemon.php";

class Parasect extends Pokemon {

    public function specialMove() {
        return "🍄 {$this->name} menggunakan {$this->specialMove}! Spora menyebar luas!";
    }

    public function specialMoveDescription() {
        return "Spore Burst adalah serangan spora jamur yang memiliki efek status dan meningkatkan ketahanan Parasect.";
    }
}
?>
