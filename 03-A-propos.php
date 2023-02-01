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
    <link rel="stylesheet" href="/CSS/Header-Footer.css">
    <link rel="stylesheet" href="/CSS/03-A-propos.css">
    <link rel="stylesheet" href="/CSS/03-A-propos-resp.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">

    <title>BOKO Local Vrac et Bio</title>
</head>
<body>
<?php require_once'includes/header.php' ?>


    
      

<main>
        <div class="presentation">
          <div class="eqpe">
            <h2>L'EQUIPE</h2>
            <pre>Lorem ipsum dolor sit, 
amet consectetur adipisicing elit.
               
    Nam ratione sequi ducimus aut sapiente 
sit placeat aspernatur magni, qui in inventore 
                illo pariatur quidem nisi.</pre>
          </div>
          <div class="equipe">
            <img  src="/IMG/duo Simon Marion.jpg" alt="equipe" width="300px">
          </div>
        </div>


        <div class="coordonnées">
        <div class="imgb">
          <img class="imgbout" src="/IMG/Boutique.jpg" alt="boutique">
        </div>
        
        <div class="blocinfo">
        <div class="infos">
          <div class="adresse">
            <h2 class="adres">Adresse</h2>
            <p>226 rue Sadi Carnot 62400 Béthune</p>
          </div>

          <div class="telephone">
            <h2 class="phone">Téléphone</h2>
            <p>09.63.68.03.88.</p>
          </div>

          <div class="courriel">
            <h2 class="mail">E-mail</h2>
            <p>contact@boko.fr</p>
          </div>

          <div class="horaires">
            <h2 class="hours">Horaires</h2>
            <table>
              <tr>
                <td>lundi</td>
                <td>Fermé</td>
              </tr>

              <tr>
                <td>mardi</td>
                <td>10:00 - 13:00</td>
                <td>14:00 - 19:00</td>
              </tr>

              <tr>
                <td>mercredi</td>
                <td>10:00 - 13:00</td>
                <td>14:00 - 19:00</td>
              </tr>

              <tr>
                <td>jeudi</td>
                <td>10:00 - 13:00</td>
                <td>14:00 - 19:00</td>
              </tr>

              <tr>
                <td>vendredi</td>
                <td>10:00 - 13:00</td>
                <td>14:00 - 19:00</td>
              </tr>

              <tr>
                <td>samedi</td>
                <td>10:00 - 13:00</td>
                <td>14:00 - 19:00</td> 
              </tr>

              <tr>
                <td>dimanche</td>
                <td>Fermé</td>
              </tr>
            </table>
          </div>
      </div>
    </div>
    </div>

    <div id="contact">
      <h1>&bull;Contact&bull;</h1>
      <div class="underline"></div>
        <div class="icon_wrapper">
          <img src="icon" alt="">
          <p class="txt">Que vous souhaitiez nous partager votre expérience ou prendre contact avec nous, ce formulaire est pour vous.</p>
        </div>
      

      <form action="#" methode="post" id="contact_form">
        <div class="name">
          <label for="name"></label>
          <input type="text" placeholder="Mon nom" name="name" id="name_input" required>
        </div>

        <div class="email">
          <label for="email"></label>
          <input type="email" placeholder="Mon e-mail" name="email" id="email_input" required>
        </div>

        <div class="subject">
          <label for="subject"></label>
          <input type="text" placeholder="Mon sujet" name="subject" id="subject_input" required>
        </div>

      
      <div class="message">
        <label for="message"></label>
        <textarea name="message" placeholder="Mon message" id="message_input" cols="30" rows="5" required></textarea>
      </div>

      <div class="submit">
        <input type="submit" value="Send Message" id="form_button" />
      </div>
        
    </form>
  </div>


<div class="plan_acces">
  <h2>Pour nous rejoindre ... </h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.0215685430026!2d2.6365234156190906!3d50.533769679487015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd23794a6d3651%3A0x75462db02e8212cb!2sBOKO%CC%84%20-%20Local%20I%20Vrac%20I%20Bio!5e0!3m2!1sfr!2sfr!4v1634053793486!5m2!1sfr!2sfr" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>








    </main>

 



    <?php require_once'includes/footer.php' ?>

        </body>