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

$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "1234";
$nomBaseDeDonnees = "jour09";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $utilisateur, $motDePasse);
    
    $requete = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
    
    $resultat = $connexion->query($requete);
    $row = $resultat->fetch(PDO::FETCH_ASSOC);
    
    echo "<table>";
    
    echo "<tr>";
    echo "<th>Nombre d'étudiants</th>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>".$row['nb_etudiants']."</td>";
    echo "</tr>";
    
    echo "</table>";
    
    $connexion = null;
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
</body>
</html>