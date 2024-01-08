<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/LocoDiesel.css">
    <title>Les Locomotives Diesel</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Locomotives Diesel </h1>
<div class="LocoDiesel">
    <div class="LocoDieselHaut">
        <div class="LocoDieselTailleHO">
            <a href="./LocoDieselTailleHO.php"><img src="./Images/Loco/loco_diesel/Taille HO/loco_diesel_tailleHO_vue1.png" alt="LocoDieselTailleHO" id="LocoDieselTailleHO"></a>
            <p>Locomotive Diesel Taille HO</p>
        </div>
        <div class="LocoDieselTailleZ">
           <a href="./LocoDieselTailleZ.php"> <img src="./Images/Loco/loco_diesel/Taille Z/loco_diesel_tailleZ_vue1.png" alt="LocoDieselTailleZ" id="LocoDieselTailleZ"></a>
            <p>Locomotive Diesel Taille Z</p>
        </div>
    </div>
    <div class="LocoDieselBas">
        <div class="LocoDieselTailleN">
            <a href="./LocoDieselTailleN.php"><img src="./Images/Loco/loco_diesel/Taille N/loco_diesel_tailleN_vue1.png" alt="LocoDieselTailleN" id="LocoDieselTailleN"></a>
            <p>Locomotive Diesel Taille N</p>
        </div>
        <div class="LocoDieselTailleG">
            <a href="./LocoDieselTailleG.php"><img src="./Images/Loco/loco_diesel/Taille G/loco_diesel_tailleG_vue1.png" alt="LocoDieselTailleG" id="LocoDieselTailleG"></a>
            <p>Locomotive Diesel Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>