<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonCerealiers.css">
    <title>Les Wagons de Fret Cerealiers</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret Cerealiers </h1>
<div class="WagonsCerealier">
    <div class="WagonsCerealierHaut">
        <div class="WagonCerealierTailleHO">
            <a href="./WagonCerealiersTailleHO.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_cerealers/Taille HO/wagon_cerealiers_tailleHO_vue1.png" alt="WagonCerealierTailleHO" id="WagonCerealierTailleHO"></a>
            <p>Wagon de Fret Type Cerealier Taille HO</p>
        </div>
        <div class="WagonCerealierTailleZ">
           <a href="./WagonCerealiersTailleZ.php"> <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_cerealers/Taille Z/wagon_cerealier_tailleZ_vue1.png" alt="nWagonCerealierTailleZ" id="WagonCerealierTailleZ"></a>
            <p>Wagon de Fret type Cerealier Taille Z</p>
        </div>
    </div>
    <div class="WagonsCerealierBas">
        <div class="WagonCerealierTailleN">
            <a href="./WagonCerealiersTailleN.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_cerealers/Taille N/wagon_cerealier_tailleN_vue1.png" alt="WagonCerealierTailleN" id="WagonCerealierTailleN"></a>
            <p>Wagon de Fret Type Cerealier Taille N</p>
        </div>
        <div class="WagonCerealierTailleG">
            <a href="./WagonCerealiersTailleG.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_cerealers/Taille G/wagon_cerealier_tailleG_vue1.png" alt="WagonCerealierTailleG" id="WagonCerealierTailleG"></a>
            <p>Wagon de Fret type Cerealier Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>