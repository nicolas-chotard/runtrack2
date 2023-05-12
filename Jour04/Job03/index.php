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
$count = 0;
foreach ($_POST as $key => $value) {
  if (isset($key) && isset($value)) {
    $count++;
  }
}
echo "Le nombre d'arguments POST envoyé est : $count";
?>

</body>
</html>