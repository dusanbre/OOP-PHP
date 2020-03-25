<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./css/main.css">
<?php
require "Pojacalo.php";
$filename = 'pojacala.txt';
$podaci = file($filename);
foreach($podaci as $podatak){
    $pojacalo = Pojacalo::parse($podatak);
    $pojacalo->render();
}
?>
<div class="container cnt">
    <div class="row row-button">
       <button class="btn unos-btn" onclick="window.location.href='./unos.php'">Unos Podataka</button>
    </div>
</div>