<?php

$pdo = require_once './database.php';
$error = '';

require './isLoggedIn.php';
$user = isLoggedIn();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_input = filter_input_array(INPUT_POST, [
        'pseudo' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ]);

    $pseudo = $_input['pseudo'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$password || !$pseudo) {
        $error = "Données incorrectes";
    } else {
        $statementUser = $pdo->prepare('SELECT * FROM utilisateur WHERE pseudo=:pseudo');
        $statementUser->bindValue(':pseudo', $pseudo);
        $statementUser->execute();
        $user = $statementUser->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $statementSession = $pdo->prepare('INSERT INTO session VALUES (default, :idUser)');
            $statementSession->bindValue(':idUser', $user['idUser']);
            $statementSession->execute();
            $sessionId = $pdo->lastInsertId();
            setcookie('session', $sessionId, time() + 60 * 60, '', '', false, true);
            header('Location: ./profile.php');
        } else {
            echo "WRONG MAIL AND/OR PASSWORD";
        }
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/connexion.css">
    <link rel="stylesheet" href="/CSS/Header-Footer.css">
    <title>Connexion</title>
</head>
<body>
<?php require_once'includes/header.php' ?>


<div class="title-signin">
    <h2>Welcome Back!</h2>
    <p>Pour rester connecté avec nous, log toi avec tes infos personnelles ...</p>
</div>

<div class="title_connect">
    <h1 class="titre">Connexion</h1>
</div>

            
<div class="container" id="container">
            <form class="registration" action="/connexion.php" method="POST">
                <!-- <div class="input_connexion"> -->
                    
                        <input type="text" name="pseudo" id="pseudo" placeholder="pseudo">
                        <input type="password" name="password" id="password" placeholder="password">
                    
<?php if ($error) : ?>
<h1 style="color:red"><?= $error ?></h1>
<?php endif; ?>
			
			            <button>Connexion</button>

                        <!-- <a href="#">Mot de passe perdu ?</a> -->
                
<!-- </div>  -->
		    </form>
	
    
</div>	

<div class="inscription">
    <p>pas encore inscrit ??? .... c'est par ici !!!</p>
    <a href="inscription.php"><button>S'inscrire</button></a>
</div>


<?php require_once'includes/footer.php' ?>
</body>
</html>