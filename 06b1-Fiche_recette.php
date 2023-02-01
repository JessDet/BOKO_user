<?php
// on recharge la page quand on rentre des données

if ($_COOKIE['idrecette']) {
    setcookie('idrecette', '', time() -1, '/');
}


// vérification de la connexion user
require './isLoggedIn.php';
$user = isLoggedIn();

if (!$user) {
    header('Location: /connexion.php');
}


// on récupére l'id de dans l'url

$id = $_GET['id'];
setcookie('idrecette', $id, time() + 60 * 5, "","",false, true);


// on se connecte à la BDD

$pdo = require './database.php';

// on récupére la recette en question

$stateOneRecette = $pdo->prepare('SELECT * from recettes WHERE idrecette=:id');
$stateOneRecette->bindValue(':id', $id);
$stateOneRecette->execute();
$recette = $stateOneRecette->fetch();

// on récupère les ingredients qui correspondent à cette recette

$stateIngredients = $pdo->prepare('SELECT * FROM ingredients, possede WHERE ingredients.idIng = possede.idIng and possede.idrecette=:id ');
$stateIngredients->bindValue(':id', $id);
$stateIngredients->execute();
$ingredients = $stateIngredients->fetchAll();

// echo "<pre></pre>";
// var_dump($ingredients);
// echo "<pre></pre>";
// die();

//--------------------------------------------------------------------------- partie commentaires

// $statementUser = $pdo->prepare('SELECT * FROM utilisateur');
// $statementUser->execute();
// $users = $statementUser->fetchAll();

// $statementRecipe = $pdo->prepare('SELECT * FROM recettes');
// $statementRecipe->execute();
// $recipe = $statementRecipe->fetchAll();


$statement = $pdo->prepare('SELECT commentaire.*, utilisateur.pseudo
 FROM commentaire, utilisateur WHERE commentaire.idUser = utilisateur.idUser and idrecette=:id');
$statement->bindValue(':id', $id);
$statement->execute();
$comments = $statement->fetchAll();


$stateCreate = $pdo->prepare('
INSERT INTO commentaire (
    note,
    titre,
    commentaire,
    idUser,
    idrecette
    ) VALUES (
       :note,
       :titre,
       :commentaire,
       :idUser,
       :idrecette
       )
');


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $_input = filter_input_array(INPUT_POST, [
        'titre' => [
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_NO_ENCODE_QUOTES
        ],
        'commentaire' => [
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_NO_ENCODE_QUOTES
        ],
    ]);

    $titre = $_input['titre'] ?? '';
    $commentaire = $_input['commentaire'] ?? '';
    $note = $_POST['note'] ?? '';

    $stateCreate->bindValue(':note',  $note);
    $stateCreate->bindValue(':titre',  $titre);
    $stateCreate->bindValue(':commentaire',  $commentaire);
    $stateCreate->bindValue(':idUser',  $user['idUser']);
    $stateCreate->bindValue(':idrecette', $_COOKIE['idrecette']);
    $stateCreate->execute();

    


    // vider les champs input des commentaires
    $titre = '';
    $commentaire = '';



    header('Location: /06b-Recettes.php?id', $_COOKIE['idrecette']);
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/Header-Footer.css">
    <link rel="stylesheet" href="CSS/06b1-Fiche_recette.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">

    <title>BOKO Local Vrac et Bio</title>
</head>

<body>


    <!-- <?php require_once 'includes/header.php' ?> -->

    <div class="btn--return">
            <a href="06b-Recettes.php"><img src="Icons/btn-return-fb.png" alt="return" id="btn-return" width="150px"></a>
    </div>



    <main>



        <div class="info_recipe">
            <h1><?= $recette['titre'] ?></h1>
            <p><?= $recette['presentation'] ?></p>
        </div>

        <div class="container-recipe-global">
            <div class="container-recipe-ingredient">
                <div class="recipe">
                    <h2>Recette</h2>
                    <div class="deroul-recipe">
                        <div class="time-prepa">
                            <img src="Icons/hourglass_icon_178153.png" alt="" id="icon-recipe" width="40px">
                            <p>Préparation : <strong><?= $recette['duree'] ?> minutes</strong></p>
                        </div>
                        <div class="difficult">
                            <img src="Icons/leaf_icon-icons.com_48277.png" alt="icon-recipe" width="40px">
                            <p>difficulté : <strong><?= $recette['difficulte'] ?></strong></p>
                        </div>
                        <div class="price">
                            <img src="Icons/etiquette-tn---2.png" alt="icon-recipe" width="40px">
                            <p>Budget : <strong><?= $recette['budget'] ?></strong></p>
                        </div>

                    </div>
                </div>


                <div class="ingredient">
                    <h2>Ingrédients</h2>
                    <div class="list-ingredients">
                        
                        <!-- on boucle pour afficher les ingrédients -->
                        <?php foreach ($ingredients as $i) : ?>
                            <?= "- " . $i['name'] . " : " . $i['qte'] . " " .  $i['type'] . "<br>" ?>
                        <?php endforeach; ?>
                       
                    </div>
                </div>
            </div>

            <div class="container_img">
                <div class="illustration-recipe">
                    <img src="<?= $recette['img1'] ?>" alt="prepa_pickels" width="400px">
                </div>
            </div>
        </div>


        <div class="container_prepa">

            <div class="illustra">

                <div class="deroule_prepa">
                    <h2>Préparation</h2>
                    <div class="txt_deroule_prepa">
                        <?= $recette['preparation'] ?>
                        
                    </div>
                </div>
            </div>
        </div>
    <div class="favoris">
        <h3>Pour ne pas perdre cette recette de vue, ... un p'tit clic</h3>
        <a href="PHP/action.php?id=<?=$idrecette ?>"><img src="Icons/outline_favorite_border_black_24dp.png" alt="like"></a> (1)
    </div>
    <br>
    </main>


    <h1>Commentaires</h1>


    <div class="input-container">
        <div class="titre-bloc-comm">
        <h3>Laisser un commentaire</h3><br>
        </div>
        <form action="/06B1-Fiche_recette.php<?= $id ? "?id=$id" : '' ?>" method="POST">
            <div class="title_comment">
                <label for="titre">Titre</label>
                <textarea name="titre" id="titre"><?= $titre ?? '' ?></textarea>
            </div>
            <div class="commentaire_comment">
                <label for="commentaire">Commentaire</label>
                <textarea name="commentaire" id="commentaire"><?= $commentaire ?? '' ?></textarea>
            </div>
            <div class="title_comment">
                <label for="note">Note</label>
                <input type="number" name="note" min="1" max="10" value="10" id="note">/10
            </div>
            <div class="form-action">
                <button class="btn btn-primary">Publier</button>
            </div>
        </form>
    </div>

        <!-- afficher les commentaires -->
        <div class="tchat">
        <?php foreach ($comments as $a) : ?>
            <span class="titre"><?= $a['titre'] ?></span>
            <span class="comment"><?= $a['commentaire'] ?></span><br>
            <span class="date"><?= $a['date'] ?></span>
            <span class="pseunote"><?= $a['pseudo'] . " | Note : " . $a['note'] ?></span>
        <?php endforeach; ?>
    </div>




    <?php require_once 'includes/footer.php' ?>


</body>

</html>