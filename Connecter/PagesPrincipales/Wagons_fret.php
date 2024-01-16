<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagesprincipales Where id = 3");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonsFret.css">
    <title>Les Wagons de Fret</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    require_once("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret </h1>
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonsFret">
    <div class="WagonsFretHaut">
        <div class="WagonCouvert">
            <a href="../WagonFret/WagonCouvert.php"><img src="./Images/WagonFret/<?php echo $et["Image1"] ?>" alt="WagonCouvert" id="WagonCouvert"></a>
            <p>Wagon de Fret Type Couvert</p>
        </div>
        <div class="WagonConteneur">
            <a href="../WagonFret/WagonConteneur.php"><img src="./Images/WagonFret/<?php echo $et["Image2"] ?>" alt="WagonConteneur" id="WagonConteneur"></a>
            <p>Wagon de Fret type plat porte conteneur</p>
        </div>
        <div class="WagonRebord">
            <a href="../WagonFret/WagonRebord.php"><img src="./Images/WagonFret/<?php echo $et["Image3"] ?>" alt="WagonRebord" id="WagonRebord"></a>
            <p>Wagon de Fret type plat à rebord</p>
        </div>
    </div>
    <div class="WagonsFretBas">
        <div class="WagonCiterne">
            <a href="../WagonFret/WagonCiterne.php"><img src="./Images/WagonFret/<?php echo $et["Image4"] ?>" alt="WagonCiterne" id="WagonCiterne"></a>
            <p>Wagon de Fret Type Citerne</p>
        </div>
        <div class="WagonBache">
            <a href="../WagonFret/WagonBache.php"><img src="./Images/WagonFret/<?php echo $et["Image5"] ?>" alt="WagonBache" id="WagonBache"></a>
            <p>Wagon de Fret type Bachés</p>
        </div>
        <div class="WagonCerealier">
            <a href="../WagonFret/WagonCerealiers.php"><img src="./Images/WagonFret/<?php echo $et["Image6"] ?>" alt="WagonCerealier" id="WagonCerealier"></a>
            <p>Wagon de Fret type Céréaliers</p>
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








