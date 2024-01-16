<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 8");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonCouvert.css">
    <title>Les Wagons de Fret Couvert</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret Couvert</h1>
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonsCouvert">
    <div class="WagonsCouvertHaut">
        <div class="WagonCouvertTailleHO">
            <a href="./WagonCouvertTailleHO.php"><img src="./Images/Couvert/TailleHO/<?php echo $et["TailleHO"] ?>" alt="WagonCouvertTailleHO" id="WagonCouvertTailleHO"></a>
            <p>Wagon de Fret Type Couvert Taille HO</p>
        </div>
        <div class="WagonCouvertTailleZ">
           <a href="./WagonCouvertTailleZ.php"> <img src="./Images/Couvert/TailleZ/<?php echo $et["TailleZ"] ?>" alt="WagonCouvertTailleZ" id="WagonCouvertTailleZ"></a>
            <p>Wagon de Fret type Couvert Taille Z</p>
        </div>
    </div>
    <div class="WagonsFretBas">
        <div class="WagonCouvertTailleN">
            <a href="./WagonCouvertTailleN.php"><img src="./Images/Couvert/TailleN/<?php echo $et["TailleN"] ?>" alt="WagonCouvertTailleN" id="WagonCouvertTailleN"></a>
            <p>Wagon de Fret Type Couvert Taille N</p>
        </div>
        <div class="WagonCouvertTailleG">
            <a href="./WagonCouvertTailleG.php"><img src="./Images/Couvert/TailleG/<?php echo $et["TailleG"] ?>" alt="WagonCouvertTailleG" id="WagonCouvertTailleG"></a>
            <p>Wagon de Fret type Couvert Taille G</p>
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