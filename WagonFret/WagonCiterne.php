<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 6");
$ps->execute();
?>



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
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonsCiterne">
    <div class="WagonsCiterneHaut">
        <div class="WagonCiterneTailleHO">
            <a href="./WagonCiterneTailleHO.php"><img src="./Images/Citerne/TailleHO/<?php echo $et["TailleHO"] ?>" alt="WagonCiterneTailleHO" id="WagonCiterneTailleHO"></a>
            <p>Wagon de Fret Type Citerne Taille HO</p>
        </div>
        <div class="WagonCiterneTailleZ">
           <a href="./WagonCiterneTailleZ.php"> <img src="./Images/Citerne/TailleZ/<?php echo $et["TailleZ"] ?>" alt="WagonCiterneTailleZ" id="WagonCiterneTailleZ"></a>
            <p>Wagon de Fret type Citerne Taille Z</p>
        </div>
    </div>
    <div class="WagonsCiterneBas">
        <div class="WagonCiterneTailleN">
            <a href="./WagonCiterneTailleN.php"><img src="./Images/Citerne/TailleN/<?php echo $et["TailleN"] ?>" alt="WagonCiterneTailleN" id="WagonCiterneTailleN"></a>
            <p>Wagon de Fret Type Citerne Taille N</p>
        </div>
        <div class="WagonCiterneTailleG">
            <a href="./WagonCiterneTailleG.php"><img src="./Images/Citerne/TailleG/<?php echo $et["TailleG"] ?>" alt="WagonCiterneTailleG" id="WagonCiterneTailleG"></a>
            <p>Wagon de Fret type Citerne Taille G</p>
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