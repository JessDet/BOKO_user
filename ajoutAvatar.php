<?php

$pdo = require_once './database.php';

require './isLoggedIn.php';
$user = isLoggedIn();


$filename = __DIR__ . '\imgProfil\\';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $avatar = $_FILES['photo']['name'];
    move_uploaded_file($_FILES["photo"]["tmp_name"], $filename . $_FILES["photo"]["name"]);

    $stateUpdate = $pdo->prepare('
    UPDATE utilisateur
    SET
        avatar=:avatar
    WHERE idUser=:id
    ');

    $stateUpdate->bindValue(':avatar', 'imgProfil/' . $avatar);
    $stateUpdate->bindValue(':id', $user['idUser']);
    $stateUpdate->execute();
    header('Location: /profile.php');
}
