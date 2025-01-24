

<?php
if (isset($_POST["reset"])) {
    setcookie("nbvisites", "", time() - 3600); // Supprime le cookie en le définissant à une date passée
    header("Location: index.php"); // Redirige pour rafraîchir la page après la réinitialisation
    exit();
}

if (isset($_COOKIE["nbvisites"])) {
    $nbvisites = $_COOKIE["nbvisites"] + 1;
} else {
    $nbvisites = 1;
}

setcookie("nbvisites", $nbvisites, time() + 3600 * 24 * 30); // Définit le cookie pour 30 jours

echo "<pre>";
echo "Nombre de visites : " . $nbvisites;
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <form action="index.php" method="post">
    <input type="submit" value="reset" name="reset">
    </main>
</body>
</html>