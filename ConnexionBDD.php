<?php

/* CONNEXION À LA BASE DE DONNÉE */

    try{
        // $BDD = new PDO('mysql:host=localhost;dbname=tss_art;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $BDD = new PDO('mysql:host=localhost;dbname=projet_modelisme_train;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

/* EN CAS D'ERREUR AFFICHAGE DU MESSAGE ET ARRÊT */

    catch(PDOException $erreur){
        die('Erreur :'.$erreur->getMessage());
    }

?>