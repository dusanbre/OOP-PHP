<?php
class Team {
    public $name;
    public $flag;

    public function __construct($name, $flag){
        $this->name = $name;
        $this->flag = $flag;
    }
}
class Score {
    public $home;
    public $away;

    public function __construct($home, $away){
        $this->home = $home;
        $this->away = $away;
    }
}
class Match {
    public $hTeam;
    public $aTeam;
    public $score;

    public function __construct(Team $hTeam,Team $aTeam,Score $score){
        $this->hTeam = $hTeam;
        $this->aTeam = $aTeam;
        $this->score = $score;
    }

    public function show(){
        echo "<div class='match''>";
        echo "<img class='teams' src='{$this->hTeam->flag}'/><span class='title'>{$this->hTeam->name}</span><span class='score'>{$this->score->home}</span></br>";
        echo "<img class='teams' src='{$this->aTeam->flag}'/><span class='title'>{$this->aTeam->name}</span><span class='score'>{$this->score->away}</span></br>";
        echo "</div>";
    }
}
class Widget{
    public $matches = [];

    public function __construct($matches){
        $this->matches = $matches;
    }
    public function render(){
        foreach($this->matches as $match){
            $match->show();
        }
    }
}