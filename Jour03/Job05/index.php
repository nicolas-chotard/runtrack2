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
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = array(
  "consonnes" => 0,
  "voyelles" => 0
);


for ($a = 0; $a < strlen($str); $a++) {
  $char = strtolower($str[$a]);

  if (in_array($char, array("a", "e", "i", "o", "u", "y"))) {
    $dic["voyelles"]++;
  }

  else if (preg_match("/^[a-z]$/i", $char)) {
    $dic["consonnes"]++;
  }
}


echo "<table>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";
?>

</body>
</html>