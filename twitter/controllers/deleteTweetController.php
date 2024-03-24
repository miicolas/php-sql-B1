<?php

session_start();
include '../connectionDb.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['tweetId'])) {
        $tweetId = $_POST['tweetId'];
        
        if (isset($_SESSION['user']['id'])) {
            $user_id = $_SESSION['user']['id'];

            $requete = $database->prepare("DELETE FROM tweet WHERE id = :tweetId AND id_user = :id_user");
            $result = $requete->execute([
                ':tweetId' => $tweetId,
                ':id_user' => $user_id
            ]);
            // var_dump($result);

            if ($result) {
                echo 'Tweet deleted';
                // var_dump($result);
                header('Location: ../dashboard.php');
                exit;
            } else {
                echo 'Error deleting tweet'; 
            }
        } else {
            die('User ID not found in session.');
        }
    } else {
        die('Please fill all the fields'); 
    }
}


?>