<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<table border='1'>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";

        foreach ($_POST as $key => $value) {
            echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }

        echo "</table>";
    }
    ?>


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

