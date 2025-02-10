<?php

$conn = new PDO('mysql:host=localhost;dbname= // nom de la base de donnees// ;charset=utf8', 'root', '');

var_dump($pdo);

if(isset($_POST["submit"])){

if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])){

$username = $_POST["username"];
$username = $_POST["password"];
$username = $_POST["email"];

var_dump($_POST);

$query = $conn -> prepare ("INSERT INTO table(username, password, email) VALUES (:username, :password, :email )");

$query->execute(array (

`username` => $username,
`password` => $password,
`email` => $email,
));

echo "Vous etes bien inscrit";
 // header('location:conexion.php');



} else{

echo "Tous les champs ne sont pas remplis";

   
}
}


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
        <form action="" method="post"></form>
        <input type="text" name="id" placeholder="username">
        <input type="password" name="id" placeholder="password">
        <input type="email" name="id" placeholder="email">
        <input type="submit" name="id" >

    </main>
</body>
</html>