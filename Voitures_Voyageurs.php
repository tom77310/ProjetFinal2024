<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/VoitureVoyageurs.css">
    <title>Les Voitures de Voyageurs</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Voitures de Voyageurs </h1>
<div class="VoituresVoyageurs">
    <div class="VoituresVoyageursHaut">
        <div class="VoituresVoyageursTailleHO">
            <a href="./VoituresVoyageursTailleHO.php"><img src="./Images/Le_materiel_roulant/Voiture_voyageurs/Taille HO/Voiture_voyageurs_tailleHO_vue1.png" alt="VoituresVoyageursTailleHO" id="VoituresVoyageursTailleHO"></a>
            <p>Voiture de Voyageurs Taille HO</p>
        </div>
        <div class="VoituresVoyageursTailleZ">
           <a href="./VoituresVoyageursTailleZ.php"> <img src="./Images/Le_materiel_roulant/Voiture_voyageurs/Taille Z/voiture_voyageur_tailleZ_vue1.png" alt="VoituresVoyageursTailleZ" id="VoituresVoyageursTailleZ"></a>
            <p>Voiture de Voyageurs Taille Z</p>
        </div>
    </div>
    <div class="VoituresVoyageursBas">
        <div class="VoituresVoyageursTailleN">
            <a href="./VoituresVoyageursTailleN.php"><img src="./Images/Le_materiel_roulant/Voiture_voyageurs/Taille N/voiture_voyageurs_tailleZ_vue1.png" alt="VoituresVoyageursTailleN" id="VoituresVoyageursTailleN"></a>
            <p>Voiture de Voyageurs Taille N</p>
        </div>
        <div class="VoituresVoyageursTailleG">
            <a href="./VoituresVoyageursTailleG.php"><img src="./Images/Le_materiel_roulant/Voiture_voyageurs/Taille G/voiture_voyageurs_talleG_vue1.png" alt="VoituresVoyageursTailleG" id="VoituresVoyageursTailleG"></a>
            <p>Voiture de Voyageurs Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>