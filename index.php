<?php
/*
Immaginiamo le classi per modellizzare un personal computer.
Un computer desktop é un computer.
Un computer portatile é un computer.
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.
BONUS:
pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari).
 */

require_once __DIR__ . '/Database/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<style>
    img{
        height: 200px;
        aspect-ratio: 1/1;
        object-fit: contain;
    }
</style>
<div class="container">
    <h1>Computer Products</h1>

    <?php foreach ($computers as $computer): ?>
        <div class="card mb-3 w-50">
            <?php if ($computer instanceof Desktop): ?>
                <img src="<?=$computer->getUrl();?>" class="card-img-top" alt="Desktop Image">
            <?php elseif ($computer instanceof Laptop): ?>
                <img src="<?=$computer->getUrl();?>" class="card-img-top" alt="Laptop Image">
            <?php endif;?>
            <div class="card-body text-center">
                <h5 class="card-title"><?=$computer->getBrand();?></h5>
                <p class="card-text">Price: <?=$computer->getPrice();?></p>
                <p class="card-text"><?=$computer->getProductType();?></p>
                <?php if ($computer instanceof Desktop): ?>
                    <p class="card-text">PSU: <?=$computer->getPsu();?></p>
                    <p class="card-text">Keyboard Type: <?=$computer->getTypeKeyboard();?></p>
                <?php elseif ($computer instanceof Laptop): ?>
                    <p class="card-text">Laptop: <?=$computer->getTypeBattery();?></p>
                    <p class="card-text">Keyboard Type: <?=$computer->getTypeKeyboard();?></p>
                <?php endif;?>
            </div>
        </div>
    <?php endforeach;?>
</div>

</body>
</html>
