<?php
if (isset($_GET)) {
    if (isset($_GET["nom"])) {
        // Uncomment or remove var_dump($_GET) as needed
        // var_dump($_GET);

        foreach ($_GET as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
    }

    // Count the number of GET arguments
    $numArgs = count($_GET);

    // Display the number of GET arguments
    echo "Number of GET arguments: " . $numArgs;
}
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
