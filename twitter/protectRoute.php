<?php 

session_start();

if (!isset($_SESSION['user'])) { // Vérifie si l'utilisateur est connecté
    header('Location: login.php');
    exit();
}

?>