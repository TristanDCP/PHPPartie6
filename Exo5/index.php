<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5 PHP</title>
</head>
<body>

<h1>Exercice 5</h1>

<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12</p>
<a href="index.php?week=12">Set URL</a>
    <?php
    if(isset($_GET['week'])){
        echo 'Votre semaine est la:  ' . $_GET['week'];
    } else {
        echo 'Veuillez rentrer vos informations';
    }
    
    ?>
</body>
</html>