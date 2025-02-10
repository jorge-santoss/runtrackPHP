<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="nombre">Nombre :</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    // Vérifier si la valeur est un nombre
    if (is_numeric($nombre)) {
        // Vérifier si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>
