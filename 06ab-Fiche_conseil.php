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
    <link rel="stylesheet" href="CSS/06a-Fiche_conseil.css">
    
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
    <div class="timing">
        <h1 class="timing_recipe">Les temps de cuisson</h1>
    </div>

        <div class="articles_container">
            <!-- <div class="article">
                <img src="/IMG/Aliments/pates-coquillettes-blanches-bio-min.jpg" alt="" class="visu_ingredient">
                <h2>Coquillettes blanches</h2>
                <p>7 à 9 minutes</p>
            </div> -->
        </div>
        <script src="JS/06a-Fiche_conseil.js"></script>
     

    













 
</main>




<?php require_once'includes/footer.php' ?>


   
</body>