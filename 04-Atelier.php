<?php

$pdo = require './database.php';

require './isLoggedIn.php';
$user = isLoggedIn();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Header-Footer.css">
    <link rel="stylesheet" href="CSS/04-Atelier.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">

    <title>BOKO Local Vrac et Bio</title>
</head>
<body>
    

<?php require_once'includes/header.php' ?>



<!-- <div class="connexion_inscription">
<div class="lien">
            <a href="connexion.php" class="connexion"><img class="connect" src="Icons/user_icon.png" alt="connexion" width="40px"></a>
        </div>
        <div class="lien">
        <a href="profile.php"><img class="profil" src="Icons/form_document_file_icon_147462.png" alt="panier" width="33px"><span class="spanny"></span></a>
        </div>
</div> -->

<main>
  <div class="title_atelier">
    <h1>L'Atelier</h1>
  </div>

<div class="atelier_presentation">
  <div class="bloc_detail_atelier">
    <p class="detail_atelier"><br><br>
    Plus qu’un atelier, c’est la concrétisation d’une part importante du projet BOKŌ. Avec une vocation plus conviviale, cet espace est parfait pour partager, découvrir, avancer, se motiver, apprendre, déguster, se rencontrer… 
  Une part du projet remplie d’humanité, d’actions concrètes, véritable créatrice d’instant de vie ♥️
    </p>
  </div>
    <img class="atelier" src="/IMG/081021/Atelier_Boks.jpg" alt="atelier">
</div>

<div class="agenda_facebook"></div>
<div class="bloc_agenda">
  <p>L'agenda des ateliers ...</p><br>


<div class="facebook">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjessteatime&tabs=timeline&width=500&height=350&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=421190706012403" width="500" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
</div>
</div>

</main>





<?php require_once'includes/footer.php' ?>

</body>