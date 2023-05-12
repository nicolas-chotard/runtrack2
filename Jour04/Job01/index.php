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
    if(isset($_GET)) {
        $count = count($_GET);
        echo "Le nombre d'arguments GET envoyé est : ".$count;
    }
?>
<form method="GET" action="page.php">
    <label for="input1">Input 1:</label>
    <input type="text" name="input1" id="input1">
    <label for="input2">Input 2:</label>
    <input type="text" name="input2" id="input2">
    <input type="submit" value="Envoyer">
</form>

</body>
</html>