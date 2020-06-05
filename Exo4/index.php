<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 PHP</title>
</head>
<body>

<h1>Exercice 4</h1>

<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?language=PHP&server=LAMP</p>
<a href="index.php?language=PHP&server=LAMP">Set URL</a>
    <?php
    if(isset($_GET['language']) and isset($_GET['server'])){
        echo 'Votre serveur est :  ' . $_GET['server'] . ' et votre langage de programmation :  ' . $_GET['language'];
    } else {
        echo 'Veuillez rentrer vos informations';
    }
    
    ?>
</body>
</html>