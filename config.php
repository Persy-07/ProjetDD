<?php
try {
    $bdd =new PDO ('mysql:host=localhost;dbname=dsq;charset=ytf8','root','');
}catch (exception $e)
{
    die('Erreur'.$e->getMessage());
}