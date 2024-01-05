<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/TGV.css">
    <title>Les TGV</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <h1>Les TGV</h1>
    <div class="TGV">
        <div class="TGVHO">
            <a href="./TGVHO.php"><img src="./Images/Le_materiel_roulant/Automotrices/TGV/Taille HO/TGV_tailleHO_vue1.png" alt="TGVHO" id="TGVHO"></a>
            <p>TGV Taille HO</p>
        </div>
        <div class="TGVN">
            <a href="./TGVN.php"><img src="./Images/Le_materiel_roulant/Automotrices/TGV/Taille N/TGV_tailleN_vue1.png" alt="TGVN" id="TGVN"></a>
            <p>TGV Taille N</p>
        </div>
    </div>
        
    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>