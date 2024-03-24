<?php 
session_start();
include 'connectionDb.php';

$search = '';
$tweets = [];

if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $search = trim($_GET['search']);

    $query = $database->prepare("SELECT tweet.id, tweet.id_user, user.username, user.name, tweet.content, tweet.created_at 
    FROM tweet 
    JOIN user ON tweet.id_user = user.id
    WHERE content LIKE :search 
    ORDER BY tweet.created_at DESC");
    $query->execute(['search' => '%' . $search . '%']);
    $tweets = $query->fetchAll();
}
?>