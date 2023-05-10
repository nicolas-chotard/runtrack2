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
for ($liste = 0; $liste <= 100; $liste++) {
    if ($liste == 42) {
      echo "La Plateforme_";
    } elseif ($liste >= 0 && $liste <= 20) {
      echo "<i>$liste</i>";
    } elseif ($liste >= 25 && $liste <= 50) {
      echo "<u>$liste</u>";
    } else {
      echo $liste;
    }
    echo "<br />";
  }
  
?>

</body>
</html>