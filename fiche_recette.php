<?php


$pdo = require_once './database.php';

$statement = $pdo->prepare('SELECT * FROM commentaire');
$statement->execute();
$commentStatement = $pdo->prepare('SELECT * FROM commentaire natural join session');
$commentStatement->execute();

$commentaires = $statement->fetchAll();

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$stateCreate = $pdo->prepare('
INSERT INTO commentaire (
   titre,
   commentaire
   ) VALUES (
       :titre,
       :commentaire
       )
');

$stateUpdate = $pdo->prepare('
UPDATE commentaire
SET
titre=:titre
commentaire=:commentaire
WHERE idcommentaire=:id
');

$stateRead = $pdo->prepare('SELECT * FROM commentaire WHERE idcommentaire=:id');


// $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $_POST = filter_input_array(INPUT_POST, [
        'titre' => [
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_NO_ENCODE_QUOTES
        ],
        'commentaire' => [
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_NO_ENCODE_QUOTES
        ]
    ]);

    $titre = $_POST['titre'] ?? '';
    $commentaire = $_POST['commentaire'] ?? '';

    if ($id) {
        $commentaires['titre'] = $titre;
        $commentaires['commentaire'] = $commentaire;
        $stateUpdate->bindValue(':titre',  $commentaires['titre']);
        $stateUpdate->bindValue(':commentaire',  $commentaires['commentaire']);
        $stateUpdate->bindValue(':id',  $id);
        $stateUpdate->execute();
    } else {
        $stateCreate->bindValue(':titre',  $titre);
        $stateCreate->bindValue(':commentaire',  $commentaire);
        $stateCreate->execute();
    }
    header('Location: /fiche.php');
}



// require_once './isLoggedIn.php';

// $user = isLoggedIn();

// if (!$user) {
//     header('Location: /connexion.php');
// }







?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <?php require_once 'includes/header.php' ?>

    <nav class="btn--return">
        <a href="06b-Recettes.php"><img src="Icons/btn-return-fb.png" alt="return" id="btn-return" width="200px"></a>
    </nav>



    <main>



        <div class="info_recipe">
            <h1>Les pickles de legumes</h1>





            <pre>Les pickles de légumes apportent une touche d’originalité à vos plats.
        
Avec leur petit goût acidulé, ces petits condiments sont parfaits pour donner une touche de pep’s et de 
couleur dans une salade, un bowl, un sandwich ou à grignoter à l’apéritif entre amis avec un peu de
fromage frais ou de houmous.

Faire des pickles est simple et rapide et nécessite peu d’ingrédients.

Cette recette de base permet de réaliser toute sorte de pickles différents avec de nombreux légumes : 
céleri rave, fenouil, carotte, choux rouge, oignon, choux-fleur, cornichon, radis noir, concombre, courgette, 
navet, betterave…</pre>

        </div>

        <div class="container-recipe-global">
            <div class="container-recipe-ingredient">
                <div class="recipe">
                    <h2>Recette</h2>
                    <div class="deroul-recipe">
                        <div class="time-prepa">
                            <img src="Icons/hourglass_icon_178153.png" alt="" id="icon-recipe" width="40px">
                            <p>Préparation : <strong>20 minutes</strong></p>
                        </div>
                        <div class="difficult">
                            <img src="Icons/leaf_icon-icons.com_48277.png" alt="icon-recipe" width="40px">
                            <p>difficulté : <strong>facile</strong></p>
                        </div>
                        <div class="price">
                            <img src="Icons/etiquette-tn---2.png" alt="icon-recipe" width="40px">
                            <p>Budget : <strong>peu élevé</strong></p>
                        </div>

                    </div>
                </div>


                <div class="ingredient">
                    <h2>Ingrédients</h2>
                    <div class="list-ingredients">
                        <pre>
- Légumes bio
- Eau
- Sucre
- Vinaigre de cidre bio (ou vinaigre de vin bio)
- des aromates : Herbes et aromates, Baies, laurier, romarin, 
grains de poivre, de moutarde, de coriandre...
                </pre>
                    </div>
                </div>
            </div>

            <div class="container_img">
                <div class="illustration-recipe">
                    <img src="IMG/Banque d'img/Prepa-pickels.jpg" alt="prepa_pickels" width="400px">
                </div>
            </div>
        </div>


        <div class="container_prepa">

            <div class="illustra">

                <div class="deroule_prepa">
                    <h2>Préparation</h2>
                    <div class="txt_deroule_prepa">
                        <pre>
Dans une casserole, faire bouillir 1 volume d’eau avec 1/2 volume de vinaigre de cidre et 1/2 volume de sucre.
En parallèle, râper les légumes avec une râpe manuelle en inox ou les découper en morceaux (selon le légume 
choisi et son envie).
Stériliser les bocaux avec de l’eau bouillante.
Disposer les légumes râpés dans le fond des bocaux (remplir au 3/4).
Ajouter par dessus les épices et aromates au choix : poivre, baies, laurier, romarin, aneth…
Verser la préparation bouillante sur les légumes jusqu’à remplir le bocal.
Laisser refroidir.
Fermer le bocal hermétiquement.
Faire mariner 3 jours au réfrigérateur avant de déguster
Faire bouillir eau vinaigre sucre.
Stériliser bocaux.
Légumes dans bocaux.
                </pre>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <h1>Commentaires</h1>


    <div class="tchat">
        <?php foreach ($commentaires as $a) : ?>
            <!-- <h2><?= $user['username'] ?></h2> -->
            <span class="date"><?= $a['date'] ?></span>
            <span><?= $a['titre'] ?></span>
            <span><?= $a['commentaire'] ?></span>
        <?php endforeach; ?>
    </div>



    <div class="input-container">
        <form action="/fiche.php<?= $id ? "?id=$id" : '' ?>" method="POST">
            <label for="titre">Titre</label>
            <textarea name="titre" id="titre"><?= $titre ?? '' ?></textarea>

            <label for="commentaire">Commentaire</label>
            <textarea name="commentaire" id="commentaire"><?= $commentaire ?? '' ?></textarea>

            <div class="form-action">

                <button class="btn btn-primary"><?= $id ?: 'Publier' ?></button>
            </div>
        </form>
    </div>




    <?php require_once 'includes/footer.php' ?>

</body>

</html>