<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./css/main.css">
<?php
   if( isset($_POST['manufacturer'])){
        $podaci = [$_POST['manufacturer'], $_POST['model'], $_POST['price']];
        file_put_contents("pojacala.txt", PHP_EOL . implode(",", $podaci), FILE_APPEND);
    }

?>

<form class="form" method="post" action="">
    <div class="container">
        <div class="row">
            <div class="col-6 naslov">
                <h3>Proizvodjac:</h3>
            </div>
            <div class="col-6">
                <input class="input forma-proizvodjac" type="text" name="manufacturer"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-6 naslov">
                <h3>Model:</h3>
            </div>
            <div class="col-6">
                <input class="input forma-model" type="text" name="model"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-6 naslov">
                <h3>Cena:</h3>
            </div>
            <div class="col-6">
                <input class="input forma-cena" type="text" name="price"><br>
            </div>
        </div>
        <input class="input btn forma-submit" type="submit" value="Dodaj">
    </div>
</form>
<button class="btn unos-btn lista-btn" onclick="window.location.href='./index.php'">Lista</button>
