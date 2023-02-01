<?php

// on se connecte à la BDD

$pdo = require './database.php';

require './isLoggedIn.php';
$user = isLoggedIn();

// on récupére les recettes

$stateRecettes = $pdo->prepare('SELECT * from recettes');
$stateRecettes->execute();
$recettes = $stateRecettes->fetchAll();

// echo "<pre></pre>";
// var_dump($recettes);
// echo "<pre></pre>";
// die();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Header-Footer.css">
  <link rel="stylesheet" href="CSS/06b-Recettes.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">

  <title>BOKO Local Vrac et Bio</title>
</head>

<body>


  <?php require_once 'includes/header.php' ?>



  <div class="btn--return">
    <a href="/06-Astuces.php"><img src="/Icons/btn-return-fb.png" alt="return" id="btn-return" width="200px"></a>
  </div>

<!-- <div class="connexion_inscription">
<div class="lien">
    <a href="connexion.php" class="connexion"><img class="connect" src="Icons/user_icon.png" alt="connexion" width="40px"></a>
  </div>
  <div class="lien">
    <a href="profile.php"><img class="profil" src="Icons/form_document_file_icon_147462.png" alt="panier" width="33px"><span class="spanny"></span></a>
  </div>
</div> -->


  <main>
    <div class="recipe">
      <!-- on boucle sur les recettes -->
      <?php foreach ($recettes as $r) : ?>
        <div class="card-container">
          <div class="card u-clearfix">
            <div class="card-body">
              <!-- <span class="card-number card-circle subtle">01</span> -->
              <h2 class="card-title"><?= $r['titre'] ?></h2>
              <span class="card-description subtle"><?= substr($r['presentation'], 0, 250)  ?> ...</span>
              <div class="card-read"> <a href="/06b1-Fiche_recette.php?id=<?= $r['idrecette'] ?>"> Lire</a></div>
              <!-- <span class="card-tag card-circle subtle">A</span> -->
            </div>
            <img src="<?= $r['img1'] ?>" alt="" class=" card-media" />
          </div>
          <div class="card-shadow"></div>
        </div>
      <?php endforeach; ?>

      <!-- <div class="card-container">
        <div class="card u-clearfix">
          <div class="card-body">
            <span class="card-number card-circle subtle">02</span>
            <span class="card-author subtle">Marion</span>
            <h2 class="card-title">Sirop gourmand</h2>
            <span class="card-description subtle">These last few weeks I have been working hard on a new brunch recipe for you all.</span>
            <div class="card-read">Lire</div>
            <span class="card-tag card-circle subtle">B</span>
          </div>
          <img src="/IMG/Banque d'img/sirop.jpg" alt="" class="card-media" />
        </div>
        <div class="card-shadow"></div>
      </div>

       <div class="card-container">
        <div class="card u-clearfix">
          <div class="card-body">
            <span class="card-number card-circle subtle">03</span>
            <span class="card-author subtle">Marion</span>
            <h2 class="card-title">Crackers aux aromates</h2>
            <span class="card-description subtle">These last few weeks I have been working hard on a new brunch recipe for you all.</span>
            <div class="card-read">Lire</div>
            <span class="card-tag card-circle subtle">A</span>
          </div>
          <img src="/IMG/Banque d'img/pexels-cottonbro-4874534.jpg" alt="" class="card-media" />
        </div>
        <div class="card-shadow"></div>
      </div>

      <div class="card-container">
        <div class="card u-clearfix">
          <div class="card-body">
            <span class="card-number card-circle subtle">04</span>
            <span class="card-author subtle">Marion</span>
            <h2 class="card-title">Pickles maison</h2>
            <span class="card-description subtle">These last few weeks I have been working hard on a new brunch recipe for you all.</span>
            <div class="card-read">Lire</div>
            <span class="card-tag card-circle subtle">A</span>
          </div>
          <img src="/IMG/Banque d'img/pickles-de-legumes-dans-bocaux.jpg" alt="" class="card-media" />
        </div>
        <div class="card-shadow"></div>
      </div> -->

    </div>


  </main>






  <?php require_once 'includes/footer.php' ?>

</body>