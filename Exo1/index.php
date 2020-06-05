<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 PHP</title>
</head>
<body>

<h1>Exercice 1</h1>

<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean</p>

<a href="index.php?nom=DaCostaPinto&amp;prenom=Tristan">Dis-moi bonjour !</a>
<p><?= $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>
</body>
</html>