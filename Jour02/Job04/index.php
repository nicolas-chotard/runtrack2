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
    if ($liste % 3 == 0 && $liste % 5 == 0 ) {
        echo "FizzBuzz";
    }
    elseif ($liste %3 == 0) {
        echo "Fizz";
    }

    elseif ($liste %5 == 0) {
        echo "Buzz";
    }

    else {
        echo $liste;
    }

    echo "<br />";

  }
  
?>

</body>
</html>