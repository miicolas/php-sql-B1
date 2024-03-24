<?php 

try {
    $database = new PDO('mysql:host=localhost;dbname=twitter', 'root', 'root'); // Connexion à la base de données
} catch (PDOException $e) { // Gestion des erreurs
    die('Site is down.');
} ; 

?>