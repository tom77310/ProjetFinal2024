<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonRebord.css">
    <title>Les Wagons de Fret</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret </h1>
<div class="WagonsRebords">
    <div class="WagonsRebordsHaut">
        <div class="WagonRebordTailleHO">
            <a href="./WagonRebordTailleHO.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_HO/image_wagon_plat_rebord_tailleHO_vue1.png" alt="WagonRebordTailleHO" id="WagonRebordTailleHO"></a>
            <p>Wagon de Fret Type Plat a Rebords Taille HO</p>
        </div>
        <div class="WagonRebordTailleZ">
           <a href="./WagonRebordTailleZ.php"> <img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_z/image_wagon_plat_rebord_tailleZ_vue1.png" alt="WagonRebordTailleZ" id="WagonRebordTailleZ"></a>
            <p>Wagon de Fret type Plat a Rebords Taille Z</p>
        </div>
    </div>
    <div class="WagonsRebordsBas">
        <div class="WagonRebordTailleN">
            <a href="./WagonRebordTailleN.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_n/image_wagon_plat_rebord_tailleN_vue1.png" alt="WagonRebordTailleN" id="WagonRebordTailleN"></a>
            <p>Wagon de Fret Type Plat a Rebords Taille N</p>
        </div>
        <div class="WagonRebordTailleG">
            <a href="./WagonRebordTailleG.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_g/image_wagon_plat_rebord_tailleG_vue1.png" alt="WagonRebordTailleG" id="WagonRebordTailleG"></a>
            <p>Wagon de Fret type Plat a Rebords Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>