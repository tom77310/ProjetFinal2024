<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 11");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Autorails.css">
    <title>Les Autorails</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <h1>Les Autorails</h1>
    <?php
            while ($et = $ps->fetch()) {
        ?>
    <div class="AutorailsHaut">
        <div class="AutorailsHO">
            <a href="./AutorailsHO.php"><img src="./Images/Autorails/TailleHO/<?php echo $et["TailleHO"] ?>" alt="AutorailsTailleHO" id="AutorailsHO"></a>
            <p>Autorail Taille HO</p>
        </div>
        <div class="AutorailsN">
            <a href="./AutorailsN.php"><img src="./Images/Autorails/TailleN/<?php echo $et["TailleN"] ?>" alt="AutorailsTailleN" id="AutorailsN"></a>
            <p>Autorail Taille N</p>
        </div>
    </div>
        <div class="Autoirailsbas">

            <div class="AutorailsG">
            <a href="./AutorailsG.php"><img src="./Images/Autorails/TailleG/<?php echo $et["TailleG"] ?>" alt="AutorailsTailleG" id="AutorailsG"></a>
                <p>Autorail Taille G</p>
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





