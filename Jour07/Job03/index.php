<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Prénoms</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        
        <input type="submit" value="Ajouter">
    </form>
    <form action="index.php" method="post">
        <input type="hidden" name="reset" value="true">
        <input type="submit" value="Réinitialiser la liste">
    </form>
</body>
</html>





<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['prenom'])) {
        $prenom = htmlspecialchars($_POST['prenom']);
        if (!isset($_SESSION['prenoms'])) {
            $_SESSION['prenoms'] = [];
        }
        $_SESSION['prenoms'][] = $prenom;
    }

    if (isset($_POST['reset']) && $_POST['reset'] == "true") {
        unset($_SESSION['prenoms']);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Prénoms</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        
        <input type="submit" value="Ajouter">
    </form>
    <form action="index.php" method="post">
        <input type="hidden" name="reset" value="true">
        <input type="submit" value="Réinitialiser la liste">
    </form>
    
    <?php
    if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
        echo "<h2>Liste des Prénoms</h2>";
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>" . htmlspecialchars($prenom) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
