<?php
$pdo = require './database.php';

require './isLoggedIn.php';
$user = isLoggedIn();
if (!$user) {
    header('Location: /connexion.php');
}


$files = [];


// ----------------pour ajout avatar 



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/profile.css">
    <link rel="stylesheet" href="/CSS/Header-Footer.css">
    <title>Connexion</title>
</head>

<body>
<?php require_once 'includes/header.php' ?>

<div class="top_page">

    <div class="deco">
        <img src="/IMG/feuillage.jpg" alt="feuillage" class="img_feuilles">
    </div>

    <h1>PROFIL</h1>

    </div>

<main>
        
<br>

<div class="mes_infos">
    <h3 class="mesinfos"> Mes coordonnées</h2>
</div>
<div class="detail_info_profil">
    <div class="info_coordonnees">         
        <p>Prénom : <span><?= $user['firstname'] ?></span></p>
        <p>Nom : <span><?= $user['lastname'] ?></span></p>
        <p>Date de naissance : <span><?= $user['birthday'] ?></span></p>
        <p>Adresse : <span><?= $user['adress'] ?></span></p>
        <p>Téléphone : <span><?= $user['phone'] ?></span></p>
        <p>Email : <span><?= $user['email'] ?></span></p>
    </div>

    <div class="hello">
        <h2 class="helloh2">Hello <?= $user['pseudo'] ?></h2>
    </div>

    <!-- --------------ajout avatar  -->

            <div class="avatar">
                
            <img><span><?= $user['avatar'] ?></span></img>

            </div>

            <!-- <div class="avatar">
            <?php foreach ($files as $user) : ?>
            <div class="img" style="margin: 2px;">
                <img src="<?= $user ? $files['photo'] : '' ?>" alt="" style="width: 300px; height:300px">
            </div>
            <?php endforeach; ?>
        </div> -->

        
</div>
        <br>  
    <!-- ---------------modif profil      -->
        <div class="modif-profil">
            <a href="/modif_profil.php">Modifier le profil</a><br>
        </div>
    
    
</main>

<div class="favoris">
    <h3>Mes favoris</h3>
</div>

    <?php require_once 'includes/footer.php' ?>
</body>

</html>