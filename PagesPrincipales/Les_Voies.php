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
    <div class="LesVoiesHaut">

        <div class="TailleHO">
            <a href="../Voies/VoiesHO.php"><img src="../Images/Voies/taille HO/voie_tailleHO_vue1.png" alt="VoiesTailleHO" id="TailleHO"></a>
            <p>Voies Taille HO</p>
        </div>
        <div class="TailleZ">
            <a href="../Voies/VoiesZ.php"><img src="../Images/Voies/Taille Z/voie_tailleZ.png" alt="VoiesTailleZ" id="TailleZ"></a>
            <p>Voies Taille Z</p>
        </div>
    </div>
        <div class="LesVoiesBas">

            <div class="TailleN">
               <a href="../Voies/VoiesN.php"> <img src="../Images/Voies/Taille N/voieTailleN.png" alt="VoiesTailleN" id="TailleN"></a>
                <p>Voies Taille N</p>
            </div>
            <div class="TailleG">
                <a href="../Voies/VoiesG.php"><img src="../Images/Voies/Taille G/voie_tailleG.png" alt="VoiesTailleG" id="VoiesTailleG"></a>
                <p>Voies Taille G</p>
            </div>
        </div>

    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>