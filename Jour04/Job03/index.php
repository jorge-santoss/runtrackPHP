<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br><br>
        
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br><br>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php

// Compter le nombre d'arguments dans $_POST
$nombreArguments = count($_POST);

// Afficher le nombre d'arguments
echo "Le nombre d'arguments POST est : " . $nombreArguments;

?>

