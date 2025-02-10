<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Maison</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" required><br><br>
        
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" required><br><br>
        
        <input type="submit" value="Afficher la maison">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largeur = (int)$_POST['largeur'];
    $hauteur = (int)$_POST['hauteur'];

    // Afficher le toit de la maison
    for ($i = 1; $i <= $largeur; $i += 2) {
        echo str_repeat('&nbsp;', ($largeur - $i) / 2);
        echo str_repeat('*', $i);
        echo "<br>";
    }

    // Afficher le corps de la maison
    for ($j = 0; $j < $hauteur; $j++) {
        echo str_repeat('*', $largeur);
        echo "<br>";
    }
}
?>
