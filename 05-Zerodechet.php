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
    <link rel="stylesheet" href="/CSS/05-Zerodechet.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">

    <title>BOKO Local Vrac et Bio</title>
</head>
<body>
    

<?php require_once'includes/header.php' ?>




<main>
  
<div class="contenu">

  <div class="background">
    <div class="container1">
      <h2>Le zéro-déchet, on vous explique ....</h2>
    
      <div class="z-d">
        <p>Le Zéro Déchet est une démarche visant à réduire au maximum notre production de déchets. 
Il s'agit bien de revoir son mode de consommation afin de produire moins de déchets à la source, 
et non pas simplement de mieux intégrer le recyclage dans nos modes de vie.</p>

<p>Car en premier lieu, le meilleur déchet, c’est celui qu’on ne produit pas.</p>

<p>Pour réduire nos déchets, le problème doit être pris à la source par les politiques et les industriels 
(revoir les modes de production, l’utilisation de matières premières, les circuits de distribution, etc.).</p>

<p>Mais cela peut aussi venir d’une action individuelle. Par des actions simples, il est tout à fait possible 
de réduire la quantité de déchets générés par un foyer et de limiter ainsi notre impact sur la planète.</p>
<br>
<p>Chacun peut, pour cela, s’aider de quelques règles simples, comme celles des 5 R préconisées par Béa Johnson :</p>
<br>
<p><strong>Refuser </strong>ce dont on n’a pas besoin (courriers, publicité, échantillons ...)</p>
<p><strong>Réduire </strong> ce dont on a besoin (meubles, habits…)</p>
<p><strong>Réutiliser</strong> ,opter pour les produits durables et réutilisables plutôt que les produits jetables 
et acheter d’occasion.</p>
<p><strong>Recycler</strong> ce qu’on ne peut pas refuser, réduire ou réutiliser</p>
<p><strong>Composter</strong> le reste (déchets organiques : épluchures, peluches de sèche-linge, ongles et cheveux 
coupés, balayures, etc).</p>
<br>
<p>Enfin, comme le rappelle la Famille (presque) Zéro Déchet : En visant le Zéro Déchet, vous touchez logiquement à 
tous les pans de votre vie. Le Zéro Déchet, ce n’est pas seulement une question d’emballages dans votre poubelle, 
c’est une occasion de faire un choix de vie et de société.</p>
      </div>
  </div>
  
  </div>

  <div class="container2">
    <h2>Le vrac, comment ça marche ?</h2>
    
    <div class="parag1">
      <div class="txt1">
        <h3>1ère étape, la Tare !</h3>
        <br>
        <p class="laTare" >Lorsque vous venez à l’épicerie pour la premier fois avec votre contenant, nous devons le tarer. 
            Pour cela nous allons l’étiqueter avec un code barre qui enregistre son poids dans notre logiciel 
            de caisse. Vous le remplissez et nous défalquons le poids du contenant de ce que vous avez mis 
            dedans. Vous êtes ainsi libre de la quantité que vous achetez.</p>
      </div>

      <div class="img1">
        <img class="vrac" src="IMG/MDE.png" alt="MDE vrac" width="500px">
      </div>
  </div>


    <div class="parag2">
        <div class="txt2">
          <h3>2ème etape, la consigne pour liquides !</h3>
          <br>
          <p>Nous remettons également la consigne au goût du jour pour nos sirop, nos huiles 
              et nos vinaigres grâce au partenariat avec l’entreprise "Jean Bouteille". 
              (Encore un partenaire local puisqu’il se trouve au port de Lille)</p>
        </div>
    

    <div class="img2">
      <img class="consign" src="IMG/jean-bouteille-1.jpg" alt="la consigne" width="500px">
    </div> 
  </div>

  </div>

<div class="lign_img_before_footer">
  <img src="IMG/081021/le vrac épicerie.jpg" alt="" id="img_before_footer">
  <img src="IMG/081021/Tawashis.jpg" alt="" id="img_before_footer">
  <img src="IMG/081021/Etale 1.jpg" alt="" id="img_before_footer">
  <img src="IMG/081021/les essentiels bis.jpg" alt="" id="img_before_footer">
  <img src="IMG/081021/Bocaux verre.jpg" alt="" id="img_before_footer">
  <img src="IMG/081021/Cosmeto.jpg" alt="" id="img_before_footer">
  <img src="IMG/081021/Kit KDo.jpg" alt="" id="img_before_footer">
</div>


</div>


</main>







<?php require_once'includes/footer.php' ?>

  </body>