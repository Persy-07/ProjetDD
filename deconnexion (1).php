<?php
session_start(); // démarrage de la session
session_destroy(); // on détruit la/les session(s), soit si vous utilisez une autre session, utilisez de préférence le unset()
header('location:index.php'); // On redirige

