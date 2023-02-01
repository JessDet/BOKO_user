<?php
require_once './isLoggedIn.php';
$user = isLoggedIn();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Index.css">
    <link rel="stylesheet" href="CSS/Header-Footer.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
    

     <!-- <?php require_once'includes/head.php' ?> -->
    <title>BOKO Local Vrac et Bio</title>
</head>

<body>

<?php require_once'includes/header.php' ?>

   
    
        <main>
        <div class="blocs_anim">
            <figure class="snip1482">
                <figcaption>
                  <h2>L'épicerie</h2>
                  <p>Ce qu'on vous propose, ce qui est bon pour vous et la planète</p>
                </figcaption>
                <a href="02-Echoppe.php"></a><img src="IMG/Boko l'épicerie.jpg" alt="Epicerie" />
              </figure>
              <figure class="snip1482">
                <figcaption>
                  <h2>L'atelier</h2>
                  <p>Espace d'échange et de partage</p>
                </figcaption>
                <a href="04-Atelier.php"></a><img src="IMG/Boko l'atelier.jpg" alt="Atelier" />
              </figure>
        </div>


        <div class="bloc_txt">
            <div class="elem">
              <h2>L'ESPRIT BOKO</h2>
              <p>BOKO est une boutique qui propose des produits en vrac, bio de saison, local.
                BOKO n'est pas qu'une boutique alimentaire, c'est aussi l'Atelier, des idées cadeaux
                une droguerie, des produits de soin et bien-être ...
                Notre envie vous faire découvrir le Zéro-Déchet à notre niveau.
              </p>
              <div class="button-apropos">
                <a href="03-A-propos.php"><input type="button" value="A propos" id="btn-apropos"></a>
              </div>
            </div>

            
        </div>


        <div class="container2">
          <div class="avantage">
            <h2><lenght>NOS AVANTAGES</lenght></h2>
          </div>

          <div align="CENTER" class="fond">

            <!-- <div class="carre_couleur base_hov" style="background-color:#ffffff; border-radius: 30px;">
              <div class="retract" style="background-color:#ffffff; border-radius: 30px;"><img class="icon" src="Icons/icons8-click-64.png" width="50px"></div>
              <div class="acced">
                <div class="big_acced" style="color:#000000;">CLIC & COLLECT</div>
                <div class="middle_acced">Retrait facile et rapide de votre commande. Gain de temps assuré</div>
              </div>
            </div> -->
            <div class="carre_couleur base_hov" style="background-color:#ffffff;border-radius: 30px;">
              <div class="retract" style="background-color:#ffffff;border-radius: 30px;"><img class="icon" src="Icons/icons8-mises-à-jour-disponibles-96.png"></div>
              <div class="acced">
                <div class="big_acced" style="color:#000000;">Economie Circulaire</div>
                <div class="middle_acced">Travailler local et Solidaire</div>
              </div>
            </div>
            <div class="carre_couleur base_hov" style="background-color:#ffffff;border-radius: 30px;">
              <div class="retract" style="background-color:#ffffff;border-radius: 30px;"><img class="icon" src="Icons/icons8-terre-verte-50.png"></div>
              <div class="acced">
                <div class="big_acced" style="color:#000000;">Conditionnement</div>
                <div class="middle_acced">Réduit l'emballage et favorise le recyclage</div>
              </div>
            </div>
            <div class="carre_couleur base_hov" style="background-color: white;border-radius: 30px;">
              <div class="retract" style="background-color: white; border-radius: 30px;"><img class="icon" src="Icons/icons8-easy-listening-50.png"></div>
              <div class="acced">
                <div class="big_acced" style="color: black;">A Votre Ecoute</div>
                <div class="middle_acced">Par mail ou durant les horaires d'ouverture en physique</div>
              </div>
            </div>
            
                    
        </div>

        </div>

    </main>
    
  <!-- LightWidget WIDGET -->
  <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/c9076ce1f61b5a4c8dc8e75435cbb91b.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

  

      <?php require_once'includes/footer.php' ?>
    </body>



        