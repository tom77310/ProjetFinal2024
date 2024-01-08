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
    <div class="AutorailsHaut">
        <div class="AutorailsHO">
            <a href="./AutorailsHO.php"><img src="./Images/Autorails/Taille HO/autorail_tailleHO_vue1.png" alt="AutorailsHO" id="AutorailsHO"></a>
            <p>Autorail Taille HO</p>
        </div>
        <div class="AutorailsN">
            <a href="./AutorailsN.php"><img src="./Images/Autorails/Taille N/autorail_tailleN_vue1.png" alt="AutorailsN" id="AutorailsN"></a>
            <p>Autorail Taille N</p>
        </div>
    </div>
        <div class="Autoirailsbas">

            <div class="AutorailsG">
                <a href="./AutorailsG.php"><img src="./Images/Autorails/Taille G/autorail_tailleG_vue1.png" alt="AutorailsG" id="AutorailsG"></a>
                <p>Autorail Taille G</p>
            </div>
        </div>

    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>