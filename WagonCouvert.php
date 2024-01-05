<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonCouvert.css">
    <title>Les Wagons de Fret</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret </h1>
<div class="WagonsCouvert">
    <div class="WagonsCouvertHaut">
        <div class="WagonCouvertTailleHO">
            <a href="./WagonCouvertTailleHO.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_HO/Image_page_wagon_fret_couvert_vue1_HO.png" alt="WagonCouvertTailleHO" id="WagonCouvertTailleHO"></a>
            <p>Wagon de Fret Type Couvert Taille HO</p>
        </div>
        <div class="WagonCouvertTailleZ">
           <a href="./WagonCouvertTailleZ.php"> <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_z/image_wagon_de_fret_couvert_taille_z.png" alt="nWagonCouvertTailleZ" id="WagonCouvertTailleZ"></a>
            <p>Wagon de Fret type Couvert Taille Z</p>
        </div>
    </div>
    <div class="WagonsFretBas">
        <div class="WagonCouvertTailleN">
            <a href="./WagonCouvertTailleN.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_n/image_wagon_de_fret_couvert_taille_n._vue1_N.png" alt="WagonCouvertTailleN" id="WagonCouvertTailleN"></a>
            <p>Wagon de Fret Type Couvert Taille N</p>
        </div>
        <div class="WagonCouvertTailleG">
            <a href="./WagonCouvertTailleG.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_g/image_wagon_de_fret_couvert_taille_g.png" alt="WagonCouvertTailleG" id="WagonCouvertTailleG"></a>
            <p>Wagon de Fret type Couvert Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>