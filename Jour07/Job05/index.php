

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 50px; height: 50px; text-align: center; }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <form action="index.php" method="post">
        <table border="1">
            <?php
            session_start();
            if (!isset($_SESSION['board'])) {
                $_SESSION['board'] = array_fill(0, 9, '-');
                $_SESSION['currentPlayer'] = 'X';
            }

            // Afficher la grille du jeu
            for ($i = 0; $i < 3; $i++) {
                echo '<tr>';
                for ($j = 0; $j < 3; $j++) {
                    $index = $i * 3 + $j;
                    echo '<td>';
                    echo '<button type="submit" name="move" value="'.$index.'" style="width:100%;height:100%;">'.$_SESSION['board'][$index].'</button>';
                    echo '</td>';
                }
                echo '</tr>';
            }
            ?>
        </table>
        <input type="submit" name="reset" value="Réinitialiser la partie">
    </form>
    
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p>{$_SESSION['message']}</p>";
    }
    ?>
</body>
</html>



<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['reset'])) {
        // Réinitialiser la partie
        $_SESSION['board'] = array_fill(0, 9, '-');
        $_SESSION['currentPlayer'] = 'X';
        unset($_SESSION['message']);
    } elseif (isset($_POST['move'])) {
        $index = $_POST['move'];
        // Si la case est vide, effectuer le mouvement
        if ($_SESSION['board'][$index] == '-') {
            $_SESSION['board'][$index] = $_SESSION['currentPlayer'];
            // Vérifier les conditions de victoire
            if (checkWinner($_SESSION['board'], $_SESSION['currentPlayer'])) {
                $_SESSION['message'] = $_SESSION['currentPlayer'] . " a gagné";
                // Réinitialiser la partie après victoire
                $_SESSION['board'] = array_fill(0, 9, '-');
            } elseif (isBoardFull($_SESSION['board'])) {
                $_SESSION['message'] = "Match nul";
                // Réinitialiser la partie après match nul
                $_SESSION['board'] = array_fill(0, 9, '-');
            } else {
                // Changer de joueur
                $_SESSION['currentPlayer'] = ($_SESSION['currentPlayer'] == 'X') ? 'O' : 'X';
            }
        }
    }
}

header("Location: index.php");
exit();

function checkWinner($board, $player) {
    // Combinaisons gagnantes
    $winningCombos = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Lignes
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Colonnes
        [0, 4, 8], [2, 4, 6]  // Diagonales
    ];

    foreach ($winningCombos as $combo) {
        if ($board[$combo[0]] == $player && $board[$combo[1]] == $player && $board[$combo[2]] == $player) {
            return true;
        }
    }
    return false;
}

function isBoardFull($board) {
    foreach ($board as $cell) {
        if ($cell == '-') {
            return false;
        }
    }
    return true;
}
?>
