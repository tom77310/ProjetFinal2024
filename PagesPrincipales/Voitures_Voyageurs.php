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
            <a href="../VoituresVoyageurs/VoituresVoyageursTailleHO.php"><img src="./Images/VoitureVoyageurs/Voiture_voyageurs_tailleHO_vue1.png" alt="VoituresVoyageursTailleHO" id="VoituresVoyageursTailleHO"></a>
            <p>Voiture de Voyageurs Taille HO</p>
        </div>
        <div class="VoituresVoyageursTailleZ">
           <a href="../VoituresVoyageurs/VoituresVoyageursTailleZ.php"> <img src="./Images/VoitureVoyageurs/voiture_voyageur_tailleZ_vue1.png" alt="VoituresVoyageursTailleZ" id="VoituresVoyageursTailleZ"></a>
            <p>Voiture de Voyageurs Taille Z</p>
        </div>
    </div>
    <div class="VoituresVoyageursBas">
        <div class="VoituresVoyageursTailleN">
            <a href="../VoituresVoyageurs/VoituresVoyageursTailleN.php"><img src="./Images/VoitureVoyageurs/voiture_voyageurs_tailleN_vue1.png" alt="VoituresVoyageursTailleN" id="VoituresVoyageursTailleN"></a>
            <p>Voiture de Voyageurs Taille N</p>
        </div>
        <div class="VoituresVoyageursTailleG">
            <a href="../VoituresVoyageurs/VoituresVoyageursTailleG.php"><img src="./Images/VoitureVoyageurs/voiture_voyageurs_talleG_vue1.png" alt="VoituresVoyageursTailleG" id="VoituresVoyageursTailleG"></a>
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