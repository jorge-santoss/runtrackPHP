<?php

$pdo = new PDO('mysql:host=localhost;dbname=jour10;charset=utf8', 'root', '');
 
/*var_dump($pdo);*/

$sql = ("SELECT COUNT(id) FROM `etudiants`;");

$query = $pdo -> prepare ("$sql");


$query -> execute ( );

$pdo = $query->fetchALL(PDO::FETCH_ASSOC);

  /*var_dump($pdo);*/

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
        <th>Nombre d'etudiants</th>
        </tr>
    </thead>
<tbody>

<?php
foreach ($pdo as $array){
    echo "<tr>
<td>{$array['nb_etudiants']}</td>

</tr>";
}

?>
</tbody>
</table>
</body>
</html>
