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
session_start();

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

$_SESSION['nbvisites']++;

echo 'Nombre de visites : ' . $_SESSION['nbvisites'];

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>