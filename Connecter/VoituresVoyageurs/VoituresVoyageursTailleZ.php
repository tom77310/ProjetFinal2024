<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 56");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoituresVoy.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Voitures de Voyageurs Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Voitures_Voyageurs.php">Retour vers les Voitures de Voyageurs</a>
        <h1>Lot de 3 Voitures de Voyageurs Taille Z</h1>
    </div>
    <!-- Carrousel -->
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
    <img src="./Images/VoitureVoyageurs/TailleZ/<?php echo $et["Vue1"] ?>" alt="VoitureVoyageursTailleZVue1" id="VoituresVoyageursTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/VoitureVoyageurs/TailleZ/<?php echo $et["Vue2"] ?>" alt="VoitureVoyageursTailleZVue2" id="VoituresVoyageursTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/VoitureVoyageurs/TailleZ/<?php echo $et["Vue3"] ?>" alt="VoitureVoyageursTailleZVue3" id="VoituresVoyageursTailleZVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/VoitureVoyageurs/TailleZ/<?php echo $et["Vue4"] ?>" alt="VoitureVoyageursTailleZVue4" id="VoituresVoyageursTailleZVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droiteZVoy">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionZVoy">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   <?php 
    echo $et ["detail_produit"] 
    ?>
        <?php
            }
        ?>
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>