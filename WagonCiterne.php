<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonCiterne.css">
    <title>Les Wagons de Fret citerne</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret Citerne </h1>
<div class="WagonsCiterne">
    <div class="WagonsCiterneHaut">
        <div class="WagonCiterneTailleHO">
            <a href="./WagonCiterneTailleHO.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_citernes/Taille HO/wagon_citerne_tailleHO_vue1.png" alt="WagonCiterneTailleHO" id="WagonCiterneTailleHO"></a>
            <p>Wagon de Fret Type Citerne Taille HO</p>
        </div>
        <div class="WagonCiterneTailleZ">
           <a href="./WagonCiterneTailleZ.php"> <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_citernes/Taille Z/wagon_citerne_tailleZ_vue1.png" alt="nWagonCiterneTailleZ" id="WagonCiterneTailleZ"></a>
            <p>Wagon de Fret type Citerne Taille Z</p>
        </div>
    </div>
    <div class="WagonsCiterneBas">
        <div class="WagonCiterneTailleN">
            <a href="./WagonCiterneTailleN.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_citernes/Taille N/Wagon_citerne_tailleN_vue1.png" alt="WagonCiterneTailleN" id="WagonCiterneTailleN"></a>
            <p>Wagon de Fret Type Citerne Taille N</p>
        </div>
        <div class="WagonCiterneTailleG">
            <a href="./WagonCiterneTailleG.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_citernes/Taille G/wagon_citerne_tailleG_vue1.png" alt="WagonCiterneTailleG" id="WagonCiterneTailleG"></a>
            <p>Wagon de Fret type Citerne Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>