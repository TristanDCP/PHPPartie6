<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 PHP</title>
</head>
<body>

<h1>Exercice 2</h1>

<p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
    
<a href="index.php?lastname=Nemare&firstname=Jean&age=26">Set URL</a>
    <?php
    if(isset($_GET['age'])){
        echo 'Votre age est de ' . $_GET['age'];
    } else {
        echo 'Veuillez rentrer votre age';
    }
    
    ?>
</body>
</html>