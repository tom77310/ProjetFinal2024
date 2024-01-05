<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Contact.css">
    <title>Contact</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    require_once("./Header.php");
?>
    <!-- Body -->
    <div class="FormulaireContact">
        <h1>Formulaire de Contact</h1>
        <form action="" method="post">
            <div class="formulaire">
                <div class="Sujet">
                    <label for="Sujet">Sujet</label>
                    <input type="text" name="Sujet" id="Sujet">
                </div>
                <div class="Fichier">
                    <label for="Fichier">Pièce Jointes</label>
                    <input type="file" name="Fichier" id="Fichier">
                </div>
                <div class="Email">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email">
                </div>
                <div class="Message">
                    <label for="Message">Message</label>
                    <textarea type="text" name="Message" id="Message"></textarea>
                </div>
                <br>
                <div class="BouttonContact">
                    <input type="button" value="Envoyer">
                </div>


            </div>
        </form>
    </div>
<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>