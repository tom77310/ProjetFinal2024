<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagesprincipales Where id = 5");
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Nouveautes.css">
    <title>Les nouveautés</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    require_once("./Header.php");
?>
    <!-- Body -->
<h1>Les Nouveautés </h1>
<?php
            while ($et = $ps->fetch()) {
        ?>
<div class="nouveautes">

    <div class="NewWagonFret">
            <a href="../Nouveautes/NouveautésFretN.php"><img src="./Images/Nouveautés/<?php echo $et["Image1"] ?>" alt="NewWagonFret" id="NewWagonFret"></a>
        <p>Nouveau Wagon de fret en Taille N</p>
    </div>
    <div class="NewVoitureVoyageurs">
            <a href="../Nouveautes/NouveautesVoitureVoyHO.php"><img src="./Images/Nouveautés/<?php echo $et["Image2"] ?>" alt="NewVoitureVoyageurs" id="NewVoitureVoyageurs"></a>
        <p>Nouvelle Voiture de voyageurs</p>
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






