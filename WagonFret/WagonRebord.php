<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 9");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonRebord.css">
    <title>Les Wagons de Fret Rebord</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret Plat à Rebord</h1>
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonsRebords">
    <div class="WagonsRebordsHaut">
        <div class="WagonRebordTailleHO">
            <a href="./WagonRebordTailleHO.php"><img src="./Images/Rebord/TailleHO/<?php echo $et["TailleHO"] ?>" alt="WagonRebordTailleHO" id="WagonRebordTailleHO"></a>
            <p>Wagon de Fret Type Plat a Rebords Taille HO</p>
        </div>
        <div class="WagoRebordTailleZ">
           <a href="./WagonRebordTailleZ.php"> <img src="./Images/Rebord/TailleZ/<?php echo $et["TailleZ"] ?>" alt="WagonRebordTailleZ" id="WagonRebordTailleZ"></a>
            <p>Wagon de Fret type Plat a Rebords Taille Z</p>
        </div>
    </div>
    <div class="WagonsRebordsBas">
        <div class="WagonRebordTailleN">
            <a href="./WagonRebordTailleN.php"><img src="./Images/Rebord/TailleN/<?php echo $et["TailleN"] ?>" alt="WagonRebordTailleN" id="WagonRebordTailleN"></a>
            <p>Wagon de Fret Type Plat a Rebords Taille N</p>
        </div>
        <div class="WagonRebordTailleG">
            <a href="./WagonRebordTailleG.php"><img src="./Images/Rebord/TailleG/<?php echo $et["TailleG"] ?>" alt="WagonRebordTailleG" id="WagonRebordTailleG"></a>
            <p>Wagon de Fret type Plat a Rebords Taille G</p>
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