<?php 

require 'connectionDb.php';


$tweets = $database-> prepare("SELECT * FROM tweets INNER JOIN user on tweets.user_id = user.id");

$tweets->execute();

$tweet = $tweets->fetchAll(PDO::FETCH_ASSOC);

print_r($tweet);

?>