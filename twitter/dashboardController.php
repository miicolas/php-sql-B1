<?php 

require 'connectionDb.php';


$tweets = $database-> prepare("SELECT * FROM tweet");

$tweets->execute();

$tweet = $tweets->fetchAll(PDO::FETCH_ASSOC);


?>