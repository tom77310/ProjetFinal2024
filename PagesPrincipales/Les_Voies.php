<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 13");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Voies.css">
    <title>Les Voies</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <h1>Les Voies</h1>
    <?php
            while ($et = $ps->fetch()) {
        ?>
    <div class="LesVoiesHaut">

        <div class="TailleHO">
            <a href="../Voies/VoiesHO.php"><img src="./Images/Voies/TailleHO/<?php echo $et["TailleHO"] ?>" alt="VoiesTailleHO" id="TailleHO"></a>
            <p>Voies Taille HO</p>
        </div>
        <div class="TailleZ">
            <a href="../Voies/VoiesZ.php"><img src="./Images/Voies/TailleZ/<?php echo $et["TailleZ"] ?>" alt="VoiesTailleZ" id="TailleZ"></a>
            <p>Voies Taille Z</p>
        </div>
    </div>
        <div class="LesVoiesBas">

            <div class="TailleN">
            <a href="../Voies/VoiesN.php"><img src="./Images/Voies/TailleN/<?php echo $et["TailleN"] ?>" alt="VoiesTailleN" id="TailleN"></a>
                <p>Voies Taille N</p>
            </div>
            <div class="TailleG">
            <a href="../Voies/VoiesG.php"><img src="./Images/Voies/TailleG/<?php echo $et["TailleG"] ?>" alt="VoiesTailleG" id="TailleG"></a>
                <p>Voies Taille G</p>
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







