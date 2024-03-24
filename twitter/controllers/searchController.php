<?php 
session_start();
include 'connectionDb.php';

$search = ''; // Initialise la variable de recherche
$tweets = []; // Initialise le tableau de tweets

if (isset($_GET['search']) && !empty(trim($_GET['search']))) { // Vérifie si la recherche est définie et non vide
    $search = trim($_GET['search']); // Récupère la recherche et supprime les espaces inutiles

    $query = $database->prepare("SELECT tweet.id, tweet.id_user, user.username, user.name, tweet.content, tweet.created_at 
    FROM tweet 
    JOIN user ON tweet.id_user = user.id
    WHERE content LIKE :search 
    ORDER BY tweet.created_at DESC");
    $query->execute(['search' => '%' . $search . '%']); // Requête SQL pour récupérer les tweets correspondant à la recherche et les trier par date de création
    $tweets = $query->fetchAll(); // Récupère les tweets
}
?>