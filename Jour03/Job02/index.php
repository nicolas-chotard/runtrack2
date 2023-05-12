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

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for ($a = 0; $a < strlen($str); $a += 2) {
  echo $str[$a];
}

?>


</body>
</html>