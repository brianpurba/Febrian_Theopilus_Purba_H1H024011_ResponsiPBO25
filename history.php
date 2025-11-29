<?php
class History {
    private $file = "storage/history.json";

    public function save($data){
        $history = [];

        if(file_exists($this->file)){
            $history = json_decode(file_get_contents($this->file), true);
        }

        $history[] = $data;
        file_put_contents($this->file, json_encode($history, JSON_PRETTY_PRINT));
    }

    public function getAll(){
        if(!file_exists($this->file)) return [];
        return json_decode(file_get_contents($this->file), true);
    }
}
?>
