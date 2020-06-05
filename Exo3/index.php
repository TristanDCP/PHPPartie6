<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 PHP</title>
</head>
<body>

<h1>Exercice 3</h1>

<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016</p>
    
<a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Set URL</a>
    <?php
    if(isset($_GET['startDate']) and isset($_GET['endDate'])){
        echo 'La date est de ' . $_GET['startDate'] . ' Fin ' . $_GET['endDate'];
    } else {
        echo 'Veuillez rentrer votre date';
    }
    
    ?>
</body>
</html>