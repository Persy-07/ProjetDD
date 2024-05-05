<?php
session_start();
if (!isset($_SESSION['utilisateurs'])) {
    header('location.index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootsrapcdn.com/boustrap/4.3.1/css/boustrap.min.css">
    <title>Bonjour!</title>
</head>
<body>
    <h1>Bonjour, bienvenue dans notre super site de vente!!!</h1>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
</body>
</html>