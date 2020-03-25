<?php
class Pojacalo{
    public $manufacturer;
    public $model;
    public $price;

    public static function parse($podatak){
        $red = explode(",", $podatak);
        $pojacalo = new Pojacalo();
        $pojacalo->manufacturer = $red[0];
        $pojacalo->model = $red[1];
        $pojacalo->price = $red[2];
        return $pojacalo;
    }
    public function render(){
        echo "<div class='container render'>";
        echo "<div class='row render-row'>";
        echo "<div class='col-md-6 manufacturer'>{$this->manufacturer}</div>";
        echo "<div class='col-md-6 model'>{$this->model}</div>";
        echo "</div>";
        echo "</div>";
    }
}