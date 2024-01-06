<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonBache.css">
    <title>Les Wagons de Fret Bachés</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret Bachés </h1>
<div class="WagonsBache">
    <div class="WagonsBacheHaut">
        <div class="WagonBacheTailleHO">
            <a href="./WagonBacheTailleHO.php"><img src="./Images/WagonFret/Wagon_bachés/Taille HO/wagon_bachés_tailleHO_vue1.png" alt="WagonBacheTailleHO" id="WagonBacheTailleHO"></a>
            <p>Wagon de Fret Type Bachés Taille HO</p>
        </div>
        <div class="WagonBacheTailleZ">
           <a href="./WagonBacheTailleZ.php"> <img src="./Images/WagonFret/Wagon_bachés/Taille Z/wagon_bachés_tailleZ_vue1.png" alt="WagonBacheTailleZ" id="WagonBacheTailleZ"></a>
            <p>Wagon de Fret type Bachés Taille Z</p>
        </div>
    </div>
    <div class="WagonsBacheBas">
        <div class="WagonBacheTailleN">
            <a href="./WagonBacheTailleN.php"><img src="./Images/WagonFret/Wagon_bachés/Taille N/wagon_baché_tailleN_vues1.png" alt="WagonBacheTailleN" id="WagonBacheTailleN"></a>
            <p>Wagon de Fret Type Bachés Taille N</p>
        </div>
        <div class="WagonBacheTailleG">
            <a href="./WagonBacheTailleG.php"><img src="./Images/WagonFret/Wagon_bachés/Taille G/wagon_baché_tailleG_vue1.png" alt="WagonBacheTailleG" id="WagonBacheTailleG"></a>
            <p>Wagon de Fret type Bachés Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>