<?php

$pdo = require './database.php';


require './isLoggedIn.php';
$user = isLoggedIn();

// $filename = __DIR__ . '\IMG\img\\';

// ---------------------------------- récupération des données de l'utilisateur pour la modif
$firstname = $user['firstname'] ?? '';
$lastname = $user['lastname'] ?? '';
$birthday = $user['birthday'] ?? '';
$adress = $user['adress'] ?? '';
$phone = $user['phone'] ?? '';
$pseudo = $user['pseudo'] ?? '';
$email = $user['email'] ?? '';
$id = $user['idUser'] ?? '';
$avatar = $user['avatar'] ?? '';

// echo $firstname . "<br>";
// echo $lastname . "<br>";
// echo $birthday . "<br>";
// echo $adress . "<br>";
// echo $phone . "<br>";
// echo $pseudo . "<br>";
// echo $email . "<br>";
// echo $id . "<br>";
// echo $avatar . "<br>";
// die();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $birthday = $_POST['birthday'] ?? '';
    $adress = $_POST['adress'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $pseudo = $_POST['pseudo'] ?? '';
    $email = $_POST['email'] ?? '';
    $id = $_POST['id'] ?? '';

    // echo $firstname . "<br>";
    // echo $lastname . "<br>";
    // echo $birthday . "<br>";
    // echo $adress . "<br>";
    // echo $phone . "<br>";
    // echo $pseudo . "<br>";
    // echo $email . "<br>";
    // echo $id . "<br>";
    // echo $avatar . "<br>";
    // die();


    $stateUpdate = $pdo->prepare('
UPDATE utilisateur
SET
    firstname=:firstname,
    lastname=:lastname,
    birthday=:birthday,
    adress=:adress,
    phone=:phone,
    pseudo=:pseudo,
    email=:email
WHERE idUser=:id
');

    $stateUpdate->bindValue(':firstname', $firstname);
    $stateUpdate->bindValue(':lastname', $lastname);
    $stateUpdate->bindValue(':birthday', $birthday);
    $stateUpdate->bindValue(':adress', $adress);
    $stateUpdate->bindValue(':phone', $phone);
    $stateUpdate->bindValue(':pseudo', $pseudo);
    $stateUpdate->bindValue(':email', $email);
    $stateUpdate->bindValue(':id', $id);
    $stateUpdate->execute();
    header('Location: /profile.php');
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/modif_profil.css">
    <link rel="stylesheet" href="/CSS/Header-Footer.css">
    <title>Connexion</title>
</head>

<body>
    <?php require_once 'includes/header.php' ?>

    <div class="top_page">

        <div class="deco">
            <img src="/IMG/feuillage.jpg" alt="feuillage" class="img_feuilles">
        </div>

        <h1>Modifier mon profil</h1>



    </div>

    <body>

        <div class="box_modifications">
            <div class="avatar">
                <form action="/ajoutAvatar.php" method="POST" enctype="multipart/form-data">
                    <h2>Photo de profil</h2><br>
                    <div class="profil">
                        <img src="<?= $avatar === '' ? '/imgProfil/user.png' : $avatar ?>" alt="profil" style="width:150px;height:150px">
                    </div>
                    <label for="fileUpload">Fichier : </label>
                    <input type="file" name="photo" id="fileUpload">
                    <input type="submit" name="submit" value="Valider">
                </form>
            </div><br>

            <div class="container" id="container">
                <form class="maj-form" action="/modif_profil.php" method="POST">
                    <h2>Informations personnelles</h2><br>
                    <input class="maj" type="text" placeholder="firstname" name="firstname" value="<?= $firstname ?? '' ?>"><br>
                    <input class="maj" type="text" placeholder="lastname" name="lastname" value="<?= $lastname ?? '' ?>"><br>
                    <input type="date" name="birthday" value="<?= $birthday ?? '' ?>"><br><br>
                    <input class="maj" type="text" placeholder="adress" name="adress" value="<?= $adress ?? '' ?>"><br>
                    <input class="maj" type="text" placeholder="phone" name="phone" value="<?= $phone ?? '' ?>"><br>
                    <input class="maj" type="text" placeholder="pseudo" name="pseudo" value="<?= $pseudo ?? '' ?>"><br>
                    <input class="maj" type="text" placeholder="email" name="email" value="<?= $email ?? '' ?>"><br>
                    <input type="hidden" name="id" value=<?= $id ?? '' ?>>
                    <button>Modifier</button>
                </form>

            </div>



        </div>

        <?php require_once 'includes/footer.php' ?>
    </body>

</html>