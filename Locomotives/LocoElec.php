<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/LocoElec.css">
    <title>Les Locomotives Electriques</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Locomotives Electriques </h1>
<div class="LocoElec">
    <div class="LocoElecHaut">
        <div class="LocoElecTailleHO">
            <a href="./LocoElecTailleHO.php"><img src="./Images/Loco/loco elec/Taille HO/Loco_elec-tailleHO_vues1.png" alt="LocoElecTailleHO" id="LocoElecTailleHO"></a>
            <p>Locomotive Electrique Taille HO</p>
        </div>
        <div class="LocoElecTailleZ">
           <a href="./LocoElecTailleZ.php"> <img src="./Images/Loco/loco elec/Taille Z/loco_elec-tailleZ_vue1.png" alt="LocoElecTailleZ" id="LocoElecTailleZ"></a>
            <p>Locomotive Electrique Taille Z</p>
        </div>
    </div>
    <div class="LocoElecBas">
        <div class="LocoElecTailleN">
            <a href="./LocoElecTailleN.php"><img src="./Images/Loco/loco elec/Taille N/loco_elec_tailleN_vue1.png" alt="LocoElecTailleN" id="LocoElecTailleN"></a>
            <p>Locomotive Electrique Taille N</p>
        </div>
        <div class="LocoElecTailleG">
            <a href="./LocoElecTailleG.php"><img src="./Images/Loco/loco elec/Taille G/loco_elec_tailleG_vue1.png" alt="LocoElecTailleG" id="LocoElecTailleG"></a>
            <p>Locomotive Electrique Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>