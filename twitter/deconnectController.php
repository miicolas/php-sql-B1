<?php
// Démarrage de la session
session_start();

// Suppression des variables de session
session_unset();

// Destruction de la session
session_destroy();

// Effacement du cookie de session
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Redirection vers la page de connexion ou la page d'accueil après déconnexion
header('Location: login.php');
exit();
?>
