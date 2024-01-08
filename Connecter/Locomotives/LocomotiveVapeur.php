<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/LocoVapeur.css">
    <title>Les Locomotives a Vapeurs</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Locomotives a Vapeurs </h1>
<div class="LocoVapeur">
    <div class="LocoVapeurHaut">
        <div class="LocoVapeurTailleHO">
            <a href="./LocoVapeurTailleHO.php"><img src="./Images/Loco/loco vapeur/Taille HO/locomotive_vapeur_tailleHO_vue1.png" alt="LocoVapeurTailleHO" id="LocoVapeurTailleHO"></a>
            <p>Locomotive a Vapeur Taille HO</p>
        </div>
        <div class="LocoVapeurTailleZ">
           <a href="./LocoVapeurTailleZ.php"> <img src="./Images/Loco/loco vapeur/Taille Z/loco_vapeur_tailleZ_vue1.png" alt="LocoVapeurTailleZ" id="LocoVapeurTailleZ"></a>
            <p>Locomotive a Vapeur Taille Z</p>
        </div>
    </div>
    <div class="LocoVapeurBas">
        <div class="LocoVapeurTailleN">
            <a href="./LocoVapeurTailleN.php"><img src="./Images/Loco/loco vapeur/Taille N/loco_vapeur_tailleN_vue1.png" alt="LocoVapeurTailleN" id="LocoVapeurTailleN"></a>
            <p>Locomotive a Vapeur Taille N</p>
        </div>
        <div class="LocoVapeurTailleG">
            <a href="./LocoVapeurTailleG.php"><img src="./Images/Loco/loco vapeur/Taille G/loco_vapeur_tailleG_vue1.png" alt="LocoVapeurTailleG" id="LocoVapeurTailleG"></a>
            <p>Locomotive a Vapeur Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>