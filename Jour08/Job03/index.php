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
session_start();

if (isset($_POST['prenom'])) {
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }

    array_push($_SESSION['prenoms'], $_POST['prenom']);
}

if (isset($_POST['reset'])) {
    unset($_SESSION['prenoms']);
}

if (isset($_SESSION['prenoms'])) {
    echo "Liste des prénoms :<br>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
} else {
    echo "La liste des prénoms est vide.<br>";
}
?>

<form method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom">
    <button type="submit">Ajouter</button>
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>