<?php

class Player{
    public $name;
    public $image;
    public $rank;

    public function __construct($name, $image, $rank){
        $this->name  = $name;
        $this->image = $image;
        $this->rank  = $rank;
    }
    public function show(){
        echo "<div class='player'>";
        echo "<img class='avatar' src='{$this->image}'/></br>";
        echo "<span class='p-title'>{$this->name}</span></br>";
        echo "<span class='p-rank'>{$this->rank}</span>";
        echo "</div>";
    }
}
class Display_Players{
    public $players = [];

    public function __construct($players){
        $this->players = $players;
    }
    public function render(){
        foreach($this->players as $player){
            $player->show();
        }
    }
}