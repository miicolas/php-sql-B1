<?php

session_start();
include '../connectionDb.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['tweetContent'])) {
        $content = $_POST['tweetContent'];
        
    
        if (isset($_SESSION['user']['id'])) {
            $user_id = $_SESSION['user']['id'];

            
            $requete = $database->prepare("INSERT INTO tweet (content, id_user) VALUES (:content, :id_user)");
            $result = $requete->execute([
                ':content' => $content,
                ':id_user' => $user_id
            ]);

            if ($result) {

                
                echo 'Tweet added';
                header('Location: ../dashboard.php');
                exit;
            } else {
                echo 'Error adding tweet'; 
            }
        } else {
            die('User ID not found in session.');
        }
    } else {
        die('Please fill all the fields'); 
    }
}


?>