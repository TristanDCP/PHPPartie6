<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6 PHP</title>
</head>
<body>

<h1>Exercice 6</h1>

<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?building=12&room=101</p>
<a href="index.php?building=12&room=101">Set URL</a>
<?php
    if(isset($_GET['building']) and isset($_GET['room'])){
        echo 'Votre réservation est dans le building :  ' . $_GET['building'] . ' et votre chambre est la :  ' . $_GET['room'];
    } else {
        echo 'Veuillez rentrer vos informations';
    }
    
    ?>
</body>
</html>