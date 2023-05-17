<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function calcule($nombre1, $operateur, $nombre2) {
    if (!isset($nombre1) || !isset($operateur) || !isset($nombre2)) {
        return "Veuillez fournir les trois paramètres nécessaires.";
    }

    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : division par zéro.";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opérateur invalide. Veuillez utiliser l'un des opérateurs suivants : +, -, *, /, %.";
    }
}


$resultat1 = calcule(5, '+', 3);
$resultat2 = calcule(10, '/', 2);
$resultat3 = calcule(8, '*', 4);


echo $resultat1 . "\n";
echo $resultat2 . "\n";
echo $resultat3 . "\n";

    ?>
</body>
</html>