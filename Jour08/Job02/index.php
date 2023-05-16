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
if (!isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', 0, time() + 3600);
}

$_COOKIE['nbvisites']++;
echo 'Nombre de visites : ' . $_COOKIE['nbvisites'];

if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() - 3600);
    $_COOKIE['nbvisites'] = 0;
}
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>


</body>
</html>