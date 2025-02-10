<?php

echo "<table border='1'>";
echo "<tr><th>Argument</th><th>Valeur</th></tr>";

foreach ($_GET as $key => $value) {
    echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
}

echo "</table>";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="index.php" method="get">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="text" name="ville" placeholder="Ville">
            <input type="submit" value="Envoyer" class="button">
        </form>
    </main>
</body>
</html>