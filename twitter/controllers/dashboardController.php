<?php 

include 'connectionDb.php';


$tweets = $database-> prepare("SELECT tweet.id, tweet.id_user, user.username, user.name, tweet.content, tweet.created_at
FROM tweet
JOIN user ON tweet.id_user = user.id
ORDER BY tweet.created_at DESC;
"); // Requête SQL pour récupérer les tweets

$tweets->execute();

$tweet = $tweets->fetchAll(PDO::FETCH_ASSOC); // Récupère les tweets


?>