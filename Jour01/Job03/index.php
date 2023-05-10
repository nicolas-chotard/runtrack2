<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$existe = true;
$age = 20;
$nom = "Nicolas";
$salaire = 1500.50;
?>

<?php
$existe = true;
$age = 20;
$nom = "Nicolas";
$salaire = 1500.50;
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Nom</th>";
echo "<th>Valeur</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>" . gettype($existe) . "</td>";
echo "<td>estVrai</td>";
echo "<td>" . var_export($existe, true) . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . gettype($age) . "</td>";
echo "<td>age</td>";
echo "<td>$age</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . gettype($nom) . "</td>";
echo "<td>nom</td>";
echo "<td>$nom</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . gettype($salaire) . "</td>";
echo "<td>salaire</td>";
echo "<td>$salaire</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
?>

</body>
</html>