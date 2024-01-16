<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 4");
$ps->execute();
?>

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
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonsBache">
    <div class="WagonsBacheHaut">
        <div class="WagonBacheTailleHO">
            <a href="./WagonBacheTailleHO.php"><img src="./Images/Bache/TailleHO/<?php echo $et["TailleHO"] ?>" alt="WagonBacheTailleHO" id="WagonBacheTailleHO"></a>
            <p>Wagon de Fret Type Bachés Taille HO</p>
        </div>
        <div class="WagonBacheTailleZ">
           <a href="./WagonBacheTailleZ.php"> <img src="./Images/Bache/TailleZ/<?php echo $et["TailleZ"] ?>" alt="WagonBacheTailleZ" id="WagonBacheTailleZ"></a>
            <p>Wagon de Fret type Bachés Taille Z</p>
        </div>
    </div>
    <div class="WagonsBacheBas">
        <div class="WagonBacheTailleN">
            <a href="./WagonBacheTailleN.php"><img src="./Images/Bache/TailleN/<?php echo $et["TailleN"] ?>" alt="WagonBacheTailleN" id="WagonBacheTailleN"></a>
            <p>Wagon de Fret Type Bachés Taille N</p>
        </div>
        <div class="WagonBacheTailleG">
            <a href="./WagonBacheTailleG.php"><img src="./Images/Bache/TailleG/<?php echo $et["TailleG"] ?>" alt="WagonBacheTailleG" id="WagonBacheTailleG"></a>
            <p>Wagon de Fret type Bachés Taille G</p>
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