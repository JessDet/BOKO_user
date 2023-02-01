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
    <link rel="stylesheet" href="CSS/boutique.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
    
     <!-- <?php require_once'includes/head.php' ?> -->

    <title>BOKO Local Vrac et Bio</title>
</head>

<body>


<?php require_once'includes/header.php' ?>


<main>



  <div class="intro">
    <h1>La boutique !</h1>
  </div>

<div class="bloc_img_global">

    <figure class="snip1361">
        <img src="IMG/081021/Pochons.jpg" alt="épicerie" />
        <figcaption>
            <h3>EPICERIE</h3>
            <p>Weekends don't count unless you spend them doing something completely 
                pointless.kjefhvnk,f;pds,odvkiohgn bvo,sdlwdpozeo,utngç_yrhçgunheuvgvhzveygziusc,
            piroytgieufdhfoviinyehfguijezpifgheod</p>
        </figcaption>
        <a href="#"></a>
    </figure>

    <figure class="snip1361"><img src="/IMG/081021/Kit_KDo.jpg" alt="idée cadeau" />
        <figcaption>
            <h3>IDEE CADEAUX</h3>
            <p>I'm killing time while I wait for life to shower me with meaning and happiness. -</p>
        </figcaption>
        <a href="#"></a>
    </figure>

    <figure class="snip1361"><img src="/IMG/081021/Pate_tartiner.jpg" alt="sample99" />
        <figcaption>
            <h3>LE SUCREE</h3>
            <p>The only skills I have the patience to learn are those that have no real application in life. </p>
        </figcaption>
        <a href="#"></a>
    </figure>

    <figure class="snip1361"><img src="/IMG/081021/Enfant.jpg" alt="sample99" />
        <figcaption>
            <h3>ENFANTILLAGES</h3>
            <p>The only skills I have the patience to learn are those that have no real application in life. </p>
        </figcaption>
        <a href="#"></a>
    </figure>

    <figure class="snip1361"><img src="/IMG/081021/les_accessoires.jpg" alt="sample99" />
        <figcaption>
            <h3>LE BIEN-ETRE</h3>
            <p>The only skills I have the patience to learn are those that have no real application in life. </p>
        </figcaption>
        <a href="#"></a>
    </figure>

    <figure class="snip1361"><img src="/IMG/081021/Legumes_en_folie.jpg" height="250px"  alt="sample99" />
        <figcaption>
            <h3>LEGUMES EN FOLIE</h3>
            <p>The only skills I have the patience to learn are those that have no real application in life. </p>
        </figcaption>
        <a href="#"></a>
    </figure>

    <figure class="snip1361"><img src="/IMG/081021/les_essentiels.jpg" alt="sample99" />
        <figcaption>
            <h3>LES ESSENTIELS</h3>
            <p>The only skills I have the patience to learn are those that have no real application in life. </p>
        </figcaption>
        <a href="#"></a>
    </figure>

    <figure class="snip1361"><img src="/IMG/081021/la_droguerie.jpg" alt="sample99" />
        <figcaption>
            <h3>LA DROGUERIE</h3>
            <p>The only skills I have the patience to learn are those that have no real application in life. </p>
        </figcaption>
        <a href="#"></a>
    </figure>

</div>
</main>
   

<script src="JS/boutique.js"></script>

  <?php require_once'includes/footer.php' ?>

  </body>
  </html>