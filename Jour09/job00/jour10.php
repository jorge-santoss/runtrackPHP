<?php

// se connecter a la base de données
$pdo = new PDO('mysql:host=localhost;dbname=jour10;charset=utf8', 'root', '');
 
/* var_dump($pdo); */

// creer une variable - ecriture de la requette

 $sql = "SELECT * FROM `etudiants`( )";


// on prepare la requete

$query = $pdo -> prepare ("SELECT * FROM `etudiants`");

// on execute la requete

$query -> execute ( );

$pdo = $query->fetchALL(PDO::FETCH_ASSOC);

 /* var_dump($pdo);*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 15px;
            border: 1px solid black; 

        }

        thead{
            background-color: #ffc75f;
        }
    </style>
</head>
<body>
    <table>
    <thead>
        <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Naissance</th>
        <th>Sexe</th>
        <th>Email</th>
        </tr>
    </thead>
<tbody>

<?php
foreach ($pdo as $array){
    echo "<tr>
<td>{$array['prenom']}</td>
<td>{$array['nom']}</td>
<td>{$array['naissance']}</td>
<td>{$array['sexe']}</td>
<td>{$array['email']}</td>
</tr>";
}

?>
</tbody>
</table>
</body>
</html>