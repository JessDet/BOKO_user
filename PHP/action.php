<?php
// vérification de la connexion user
require './isLoggedIn.php';
$user = isLoggedIn();

if (!$user) {
    header('Location: /connexion.php');
}


$pdo = require './database.php';

if(isset($_GET['id']) AND !empty($_GET['id'])) {
  $getid = (int) $_GET['id'];
  
    
    $stateFav = $pdo->prepare('SELECT idrecette FROM recettes WHERE idrecette = :id');
    $stateFav->bindValue('idrecette',$getid);
    $stateFav->execute();

if ($stateFav->rowcount() == 1) {
   
    $stateInsertFav = $pdo->prepare('INSERT INTO favoris (idrecette, idUser) VALUE (:idrecette, :idUser)');
    $stateInsertFav->bindValue(':idUser',  $getid['idUser']);
    $stateInsertFav->bindValue(':idrecette', $getid['idrecette']);
    $stateInsertFav->execute();
}
header('Location: 06b1-Fiche_recette.php?id');

}else {
    exit('Erreur');

}
