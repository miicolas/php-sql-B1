<?php

session_start(); // Démarre la session
 
session_unset(); // Supprime les variables de session

session_destroy(); // Détruit la session


header('Location: ../login.php');
exit();
?>
