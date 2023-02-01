<?php

$pdo = require './database.php';

require './isLoggedIn.php';
$user = isLoggedIn();
// 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Header-Footer.css">
    <link rel="stylesheet" href="CSS/06-Astuces.css">
   
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">

    <title>BOKO Local Vrac et Bio</title>
</head>

<body>
  


<?php require_once'includes/header.php' ?>



<main>

 

<ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--fiche"><img src="IMG/logo.png" alt="fiche_conseil" width="300px"></div>
      <div class="card__content">
        <div class="card__title">Fiche conseils</div>
        <p class="card__text">Ne cherchez plus les temps de cuisson, on vous dit tout </p>
      <a href="06ab-Fiche_conseil.php"><input type="button" value="Entrer" id="btn-btn--block-card__btn"></a>
    
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--recette"><img src="IMG/pngegg.png" alt="recettes" width="250px" ></div>
      <div class="card__content">
        <div class="card__title">Recettes</div>
        <p class="card__text">En manque d'inspiration pour cuisiner, on vous partage nos recettes</p>
        <a href="06b-Recettes.php"><input type="button" value="Entrer" id="btn-btn--block-card__btn"></a>

      </div>
    </div>
  </li>
</ul>


</main>



<?php require_once'includes/footer.php' ?>

      </body>