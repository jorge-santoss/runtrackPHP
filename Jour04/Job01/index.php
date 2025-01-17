<?php
if(isset($_GET)){
    if(isset($_GET)["nom"]))

    // var_dump($_GET);



    foreach ($_GET as $key => $value) {
        echo $key. " : " . $value;
    }
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
            <input type="text" name="nom">
            <input type="text" name="prenom">
            <input type="text">
            <input type="text" name="submit" value="submit">
        </form>
    </main>
</body>
</html>