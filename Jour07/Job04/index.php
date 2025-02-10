<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['prenom'])) {
        // L'utilisateur est connecté
        echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !<br>";
        echo '<form action="index.php" method="post">
                <input type="submit" name="deco" value="Déconnexion">
              </form>';
    } else {
        // Afficher le formulaire de connexion
        echo '<form action="index.php" method="post">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required><br><br>
                <input type="submit" name="connexion" value="Connexion">
              </form>';
    }
    ?>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['connexion']) && isset($_POST['prenom'])) {
        $prenom = htmlspecialchars($_POST['prenom']);
        // Ajouter le prénom dans un cookie qui expire dans 30 jours
        setcookie("prenom", $prenom, time() + (86400 * 30), "/");
        // Rediriger pour éviter la resoumission du formulaire
        header("Location: index.php");
        exit();
    }
    if (isset($_POST['deco'])) {
        // Supprimer le cookie en le définissant à une date passée
        setcookie("prenom", "", time() - 3600, "/");
        // Rediriger pour éviter la resoumission du formulaire
        header("Location: index.php");
        exit();
    }
}
?>
