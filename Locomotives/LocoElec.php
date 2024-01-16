<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 3");
$ps->execute();
?>

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
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="LocoElec">
    <div class="LocoElecHaut">
        <div class="LocoElecTailleHO">
            <a href="./LocoElecTailleHO.php"><img src="./Images/Loco/Elec/TailleHO/<?php echo $et["TailleHO"] ?>" alt="LocoElecTailleHO" id="LocoElecTailleHO"></a>
            <p>Locomotive Electrique Taille HO</p>
        </div>
        <div class="LocoElecTailleZ">
           <a href="./LocoElecTailleZ.php"> <img src="./Images/Loco/Elec/TailleZ/<?php echo $et["TailleZ"] ?>" alt="LocoElecTailleZ" id="LocoElecTailleZ"></a>
            <p>Locomotive Electrique Taille Z</p>
        </div>
    </div>
    <div class="LocoElecBas">
        <div class="LocoElecTailleN">
            <a href="./LocoElecTailleN.php"><img src="./Images/Loco/Elec/TailleN/<?php echo $et["TailleN"] ?>" alt="LocoElecTailleN" id="LocoElecTailleN"></a>
            <p>Locomotive Electrique Taille N</p>
        </div>
        <div class="LocoElecTailleG">
            <a href="./LocoElecTailleG.php"><img src="./Images/Loco/Elec/TailleG/<?php echo $et["TailleG"] ?>" alt="LocoElecTailleG" id="LocoElecTailleG"></a>
            <p>Locomotive Electrique Taille G</p>
        </div>
    </div>
</div>
<?php
            }
        ?>

<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>