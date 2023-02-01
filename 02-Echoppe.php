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
    <link rel="stylesheet" href="CSS/Header-Footer.css">
    <link rel="stylesheet" href="CSS/02-Echoppe.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
    
     <!-- <?php require_once'includes/head.php' ?> -->

    <title>BOKO Local Vrac et Bio</title>
</head>

<body>


<?php require_once'includes/header.php' ?>


<main>



  <div class="intro">
    <h1>La boutique !</h1>
  </div>



<div class="gridywrap">
    <div class="gridy-2 gridyhe-1">
      <div class="gridimg"><img src="IMG/081021/Pochons.jpg"></img></div>
      
      <div class="gridinfo">
        <h3>Epicerie</h3>
        <div class="box">
          <a id="btnPopup" href="#popup1"><span>More</span> <i class="fa fa-plus"></i></a>
        </div>
        
        <div id="popup1" class="overlay1">
          <div class="popup1">
            <h2>L'EPICERIE</h2>
            <a class="close1" href="#">&times;</a>
            <div class="content1">
              Bienvenue dans la boutique !!!!.
            </div>
          </div>
        </div>

      </div>
    </div>


<div class="gridy-1 gridyhe-1">
  <div class="gridimg"><img src="/IMG/081021/Kit_KDo.jpg"></img></div>
  
  <div class="gridinfo">
    <h3>IDEES CADEAUX</h3>
    <div class="box">
      <a id="btnPopup" href="#popup2"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
    
    <div id="popup2" class="overlay">
      <div class="popup2">
        <h2>IDEES CADEAUX</h2>
        <a class="close2" href="#">&times;</a>
        <div class="content2">
          Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
      </div>
    </div>
  </div>
</div>

  


<div class="gridy-1 gridyhe-2">
  <div class="gridimg"><img src="/IMG/081021/Pate_tartiner.jpg"></img></div>

  
  <div class="gridinfo">
    <h3>LE SUCREE</h3>
    <div class="box">
      <a id="btnPopup" href="#popup3"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
    
    <div id="popup3" class="overlay">
      <div class="popup">
        <h2>LE SUCREE</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
      </div>
    </div>
  </div>
</div>


<div class="gridy-2 gridyhe-1">
  <div class="gridimg"><img src="/IMG/081021/Cosmeto.jpg"></img></div>
  
  <div class="gridinfo">
    <h3>LES COSMETIQUES</h3>
    <div class="box">
      <a id="btnPopup" href="#popup4"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
    
    <div id="popup4" class="overlay">
      <div class="popup">
        <h2>LES COSMETIQUES</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
      </div>
    </div>
  </div>
</div>


<div class="gridy-1 gridyhe-1">
  <div class="gridimg"><img src="/IMG/081021/Enfant.jpg"></img></div>

  <div class="gridinfo">
    <h3>ENFANTILLAGES</h3>
    <div class="box">
      <a id="btnPopup" href="#popup5"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
    
    <div id="popup5" class="overlay">
      <div class="popup">
        <h2>ENFANTILLAGES</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
      </div>
    </div>
  </div>
</div>


<div class="gridy-1 gridyhe-1">
  <div class="gridimg"><img src="/IMG/081021/les_accessoires.jpg"></img></div>
  
  <div class="gridinfo">
    <h3>LE BIEN-ETRE</h3>
    <div class="box">
      <a id="btnPopup" href="#popup6"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
    
    <div id="popup6" class="overlay">
      <div class="popup">
        <h2>LE BIEN-ETRE</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
      </div>
    </div>
  </div>
</div>


<div class="gridy-1 gridyhe-1">
  <div class="gridimg"><img src="/IMG/081021/Legumes_en_folie.jpg"></img></div>
  
  <div class="gridinfo">
    <h3>LEGUMES EN FOLIE</h3>
    <div class="box">
      <a id="btnPopup" href="#popup7"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
    
    <div id="popup7" class="overlay">
      <div class="popup">
        <h2>LEGUMES EN FOLIE</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
      </div>
    </div>
  </div>
</div>


<div class="gridy-1 gridyhe-1">
  <div class="gridimg"><img src="/IMG/081021/les_essentiels.jpg"></img></div>
  
  <div class="gridinfo">
    <h3>LES ESSENTIELS</h3>
    <div class="box">
      <a id="btnPopup" href="#popup8"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
    
    <div id="popup8" class="overlay">
      <div class="popup">
        <h2>LES ESSENTIELS</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
      </div>
    </div>
  </div>
</div>


<div class="gridy-1 gridyhe-1">
  <div class="gridimg"><img src="/IMG/081021/la_droguerie.jpg"></img></div>
  
  <div class="gridinfo">
    <h3>LA DROGUERIE</h3>
    <div class="box">
      <a id="btnPopup" href="#popup9"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
    
    <div id="popup9" class="overlay">
      <div class="popup">
        <h2>LA DROGUERIE</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
      </div>
    </div>
  </div>
</div>

    
</div>  
  </main>
   



  <?php require_once'includes/footer.php' ?>

  </body>
  </html>