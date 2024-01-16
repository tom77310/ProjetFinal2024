<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 7");
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonConteneur.css">
    <title>Les Wagons de Fret Conteneur</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret Plat Porte Conteneur</h1>
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonsConteneur">
    <div class="WagonsConteneurHaut">
        <div class="WagonConteneurTailleHO">
            <a href="./WagonConteneurTailleHO.php"><img src="./Images/Conteneur/TailleHO/<?php echo $et["TailleHO"] ?>" alt="WagonConteneurTailleHO" id="WagonConteneurTailleHO"></a>
            <p>Wagon de Fret Type Plat Porte Conteneur Taille HO</p>
        </div>
        <div class="WagonConteneurTailleZ">
           <a href="./WagonConteneurTailleZ.php"> <img src="./Images/Conteneur/TailleZ/<?php echo $et["TailleZ"] ?>" alt="WagonConteneurTailleZ" id="WagonConteneurTailleZ"></a>
            <p>Wagon de Fret type Plat Porte Conteneur Taille Z</p>
        </div>
    </div>
    <div class="WagonsConteneurBas">
        <div class="WagonConteneurTailleN">
            <a href="./WagonConteneurTailleN.php"><img src="./Images/Conteneur/TailleN/<?php echo $et["TailleN"] ?>" alt="WagonConteneurTailleN" id="WagonConteneurTailleN"></a>
            <p>Wagon de Fret Type Plat Porte Conteneur Taille N</p>
        </div>
        <div class="WagonConteneurTailleG">
            <a href="./WagonConteneurTailleG.php"><img src="./Images/Conteneur/TailleG/<?php echo $et["TailleG"] ?>" alt="WagonConteneurTailleG" id="WagonConteneurTailleG"></a>
            <p>Wagon de Fret type Plat Porte Conteneur Taille G</p>
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







