<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 1");
$ps->execute();
?>

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
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="LocoVapeur">
    <div class="LocoVapeurHaut">
        <div class="LocoVapeurTailleHO">
            <a href="./LocoVapeurTailleHO.php"><img src="./Images/Loco/Vapeur/TailleHO/<?php echo $et["TailleHO"] ?>" alt="LocoVapeurTailleHO" id="LocoVapeurTailleHO"></a>
            <p>Locomotive a Vapeur Taille HO</p>
        </div>
        <div class="LocoVapeurTailleZ">
           <a href="./LocoVapeurTailleZ.php"> <img src="./Images/Loco/Vapeur/TailleZ/<?php echo $et["TailleZ"] ?>" alt="PresentationVapeurZ" id="LocoVapeurTailleZ"></a>
            <p>Locomotive a Vapeur Taille Z</p>
        </div>
    </div>
    <div class="LocoVapeurBas">
        <div class="LocoVapeurTailleN">
            <a href="./LocoVapeurTailleN.php"><img src="./Images/Loco/Vapeur/TailleN/<?php echo $et["TailleN"] ?>" alt="PresentationVapeurN" id="LocoVapeurTailleN"></a>
            <p>Locomotive a Vapeur Taille N</p>
        </div>
        <div class="LocoVapeurTailleG">
            <a href="./LocoVapeurTailleG.php"> <img src="./Images/Loco/Vapeur/TailleG/<?php echo $et["TailleG"] ?>" alt="PresentationVapeurG" id="LocoVapeurTailleG"></a>
           <p>Locomotive a Vapeur Taille G</p>
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