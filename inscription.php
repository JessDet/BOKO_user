<?php

$pdo = require_once './database.php';
$errors = '';

require './isLoggedIn.php';
$user = isLoggedIn();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_input = filter_input_array(INPUT_POST, [
        'firstname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'lastname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'birthday' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'adress' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'phone' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'pseudo' => FILTER_SANITIZE_SPECIAL_CHARS,
        'email' => FILTER_SANITIZE_EMAIL,
        'avatar' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ]);

    $firstname = $_input['firstname'] ?? '';
    $lastname = $_input['lastname'] ?? '';
    $birthday = $_input['birthday'] ?? '';
    $adress = $_input['adress'] ?? '';
    $phone = $_input['phone'] ?? '';
    $pseudo = $_input['pseudo'] ?? '';
    $email = $_input['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $avatar = $_POST['avatar'] ?? '';

    if (!$firstname || !$lastname || !$birthday || !$adress || !$phone || !$pseudo || !$email || !$password) {
        $errors = "champs obligatoires";
    } else {
        $hashPassword = password_hash($password, PASSWORD_ARGON2I);
        $statement = $pdo->prepare('INSERT INTO utilisateur VALUES(
        DEFAULT,
        :firstname,
        :lastname,
        :birthday,
        :adress,
        :phone,
        :pseudo,
        :email,
        :password,
        :avatar
    )');

        $statement->bindvalue(':firstname', $firstname);
        $statement->bindvalue(':lastname', $lastname);
        $statement->bindvalue(':birthday', $birthday);
        $statement->bindvalue(':adress', $adress);
        $statement->bindvalue(':phone', $phone);
        $statement->bindvalue(':pseudo', $pseudo);
        $statement->bindvalue(':email', $email);
        $statement->bindvalue(':password', $hashPassword);
        $statement->bindvalue(':avatar', $avatar);
        $statement->execute();

        header('Location: /connexion.php');
    }
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/Inscription.css">
    <link rel="stylesheet" href="/CSS/Header-Footer.css"> 
    <title>Inscription</title>
</head>
<body>

<!-- <?php require_once 'includes/header.php' ?> -->
<div class="Title-subscribe">
    <h2>Hello, Friend!</h2>
    <p>Entre tes données personnelle et commence la journée avec nous ...</p>				
</div>

<div class="crea_count_user">
    <h1>Créer un compte</h1><br>
</div>

<div class="container" id="container">
	<!-- <div class="form-container sign-up-container" id="form-container"> -->
    <form class="registration" action="/inscription.php" method="POST">

<input type="text" placeholder="firstname" name="firstname"><br>
<input type="text" placeholder="lastname" name="lastname"><br>
<input type="date" placeholder="birthday AAAA-MM-JJ" name="birthday"><br>
<input type="text" placeholder="adress" name="adress"><br>
<input type="text" placeholder="phone" name="phone"><br>
<input type="text" placeholder="pseudo" name="pseudo"><br>
<input type="text" placeholder="email" name="email"><br>
<input type="password" placeholder="password" name="password"><br>

<?php if ($errors) : ?>
    <h1 style="color:red"><?= $errors ?></h1>
<?php endif; ?>
        
			<button>S'inscrire</button>
		</form>
	<!-- </div> -->
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>

