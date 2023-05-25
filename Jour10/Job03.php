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
$nomBaseDeDonnees = "jour09";
$utilisateur = "root";
$motDePasse = "1234";


try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $utilisateur, $motDePasse);
    
    $requete = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
    
    $resultats = $connexion->query($requete);
    
    echo "<table>";
    
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Date de naissance</th>";
    echo "</tr>";
    
    while ($row = $resultats->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row['prenom']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['naissance']."</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    $connexion = null;
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
</body>
</html>