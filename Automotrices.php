<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Automotrices.css">
    <title>Les Automotrices</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <h1>Les Automotrices</h1>

        <div class="Autorails">
            <a href="./Autorails.php"><img src="./Images/Le_materiel_roulant/Automotrices/Autorails/autorails_presentation.png" alt="presentation_Automotrice" id="Autorails"></a>
            <p>Les Autorails</p>
        </div>
        <div class="TGV">
            <a href="./TGV.php"><img src="./Images/Le_materiel_roulant/Automotrices/TGV/TGV_presentation.png" alt="presentationTGV" id="TGV"></a>
            <p>Les TGV</p>
        </div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>