<?php


$pdo = require_once './database.php';



?>


<header>

  <nav class="navbar">

    

      <ul class="headergroupe">     
        <li id="hgroupetxt"class="navbar__link first"><a class="li-menu" href="boutique.php">BOUTIQUE</a></li>
        <li id="hgroupetxt"class="navbar__link second"><a class="li-menu" href="04-Atelier.php">L'ATELIER</a></li>
        <li id="hgroupetxt"class="navbar__link third"><a class="li-menu" href="05-Zerodechet.php">ZERO-DECHET</a></li>
        <li id="hgroupetxt"class="navbar__link fourth" class="deroulant"><a class="li-menu" href="06-Astuces.php">ASTUCES</a>
          <ul class="sous">
            <li id="hssmenutxt"><a class="li-ss-menu" href="06ab-Fiche_conseil.php">Fiches conseil</a></li>
            <li id="hssmenutxt"><a class="li-ss-menu" href="06b-Recettes.php">Recettes</a></li>
          </ul>
        </li>
        <!-- <li id="hgroupetxt" class="navbar__link fifth"><a class="li-menu" href="07-Shop.php">SHOP</a></li> -->
      </ul>

      
  
  <div class="logo"><a href="index.php"><img src="/IMG/BOKO détouré.png" alt="logo BOKO"width="120px"></a></div>

  <button class="burger">
    <span class="bar"></span> 
  </button>

  <div class="baseline"><img  src="/IMG/BaseLine.png" alt="baseline" width="350px"></div>

  <div class="connexion_inscription">      
        
        <?PHP if($user) : ?>
            <a href="profile.php"><img class="profil" src="Icons/form_document_file_icon_147462.png" alt="profil" width="33px"><span class="spanny"></span></a>    
            <a href="/logout.php/"><img class="logout_icon" src="icons/logout_90894.png" alt="Se déconnecter" width="32px"></a>
         
        <?php else : ?>
          <a href="connexion.php" class="connexion"><img class="connect" src="Icons/user_icon.png" alt="connexion" width="40px"></a>

        <?php endif; ?> 
  </div>
 
</nav>

<script src="/JS/menuBuger.js"></script>
</header>
