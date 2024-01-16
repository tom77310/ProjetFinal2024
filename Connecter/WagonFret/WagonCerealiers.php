<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 5");
$ps->execute();
?>


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
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonsCerealier">
    <div class="WagonsCerealierHaut">
        <div class="WagonCerealierTailleHO">
            <a href="./WagonCerealiersTailleHO.php"><img src="./Images/Cerealiers/TailleHO/<?php echo $et["TailleHO"] ?>" alt="WagonCerealiersTailleHO" id="WagonCerealierTailleHO"></a>
            <p>Wagon de Fret Type Cerealier Taille HO</p>
        </div>
        <div class="WagonCerealierTailleZ">
           <a href="./WagonCerealiersTailleZ.php"><img src="./Images/Cerealiers/TailleZ/<?php echo $et["TailleZ"] ?>" alt="WagonCerealiersTailleZ" id="WagonCerealierTailleZ"></a>
            <p>Wagon de Fret type Cerealier Taille Z</p>
        </div>
    </div>
    <div class="WagonsCerealierBas">
        <div class="WagonCerealierTailleN">
            <a href="./WagonCerealiersTailleN.php"><img src="./Images/Cerealiers/TailleN/<?php echo $et["TailleN"] ?>" alt="WagonCerealierTailleN" id="WagonCerealierTailleN"></a>
            <p>Wagon de Fret Type Cerealier Taille N</p>
        </div>
        <div class="WagonCerealierTailleG">
            <a href="./WagonCerealiersTailleG.php"><img src="./Images/Cerealiers/TailleG/<?php echo $et["TailleG"] ?>" alt="WagonCerealierTailleG" id="WagonCerealierTailleG"></a>
            <p>Wagon de Fret type Cerealier Taille G</p>
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