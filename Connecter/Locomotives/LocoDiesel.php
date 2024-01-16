<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 2");
$ps->execute();
?>
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
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="LocoDiesel">
    <div class="LocoDieselHaut">
        <div class="LocoDieselTailleHO">
            <a href="./LocoDieselTailleHO.php"><img src="./Images/Loco/Diesel/TailleHO/<?php echo $et["TailleHO"] ?>" alt="LocoDieselTailleHO" id="LocoDieselTailleHO"></a>
            <p>Locomotive Diesel Taille HO</p>
        </div>
        <div class="LocoDieselTailleZ">
           <a href="./LocoDieselTailleZ.php"> <img src="./Images/Loco/Diesel/TailleZ/<?php echo $et["TailleZ"] ?>" alt="LocoDieselTailleZ" id="LocoDieselTailleZ"></a>
            <p>Locomotive Diesel Taille Z</p>
        </div>
    </div>
    <div class="LocoDieselBas">
        <div class="LocoDieselTailleN">
            <a href="./LocoDieselTailleN.php"><img src="./Images/Loco/Diesel/TailleN/<?php echo $et["TailleN"] ?>" alt="LocoDieselTailleN" id="LocoDieselTailleN"></a>
            <p>Locomotive Diesel Taille N</p>
        </div>
        <div class="LocoDieselTailleG">
            <a href="./LocoDieselTailleG.php"><img src="./Images/Loco/Diesel/TailleG/<?php echo $et["TailleG"] ?>" alt="LocoDieselTailleG" id="LocoDieselTailleG"></a>
            <p>Locomotive Diesel Taille G</p>
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