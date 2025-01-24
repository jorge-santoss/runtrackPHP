
<?php

session_start();


if (isset($_SESSION["counter"])) {

    $_SESSION["counter"] ++ ;

} else {
    $_SESSION["counter"] = 1 ;

} 

if (isset($_POST["reset"])){
    session_destroy();
} 


/*
echo $_SESSION["counter"]







/*session_start();

$_SESSION["nbvisites"] = 1 ;
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";


if(isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 1 ;
} else{
    $_SESSION["nbvisites"]++;
}
if (isset($_POST["reset"])){
    session_destroy();
} */

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
    <h2> Nombre de visites: <?php echo $_SESSION["counter"]?> </h2>
        <form action="index.php" method="post"> 
        <input type="submit" value="reset" name="reset">
     

        </form>
    </main>
</body>
</html>

