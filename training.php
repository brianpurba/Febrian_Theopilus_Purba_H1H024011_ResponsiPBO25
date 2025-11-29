<?php
class Training {
    public $type;
    public $intensity;

    public function __construct($type, $intensity){
        $this->type = $type;
        $this->intensity = $intensity;
    }

    public function getEffect(){
        $levelUp = floor($this->intensity / 10);
        $hpUp = floor($this->intensity * 1.5);
        return [$levelUp, $hpUp];
    }
}
?>
