<?php

function isLoggedIn() {

    $pdo = require './database.php';
$sessionId = $_COOKIE['session'] ?? '';


    if($sessionId) {
        $statementSession = $pdo->prepare('SELECT * FROM session WHERE id=:id');
        $statementSession->bindValue(':id', $sessionId);
        $statementSession->execute();
        $session = $statementSession->fetch();
        
        $userStatement = $pdo->prepare('SELECT * FROM utilisateur WHERE idUser=:id');
        $userStatement->bindValue(':id', $session['idUser']);
        $userStatement->execute();
        $user = $userStatement-> fetch();

              
    } 

    return $user ?? false;

}


