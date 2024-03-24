<?php

session_start();
include '../connectionDb.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Vérifie si le formulaire a été soumis
    if (!empty($_POST['tweetContent'])) { 
        $content = $_POST['tweetContent']; // Récupère le contenu du tweet
        
    
        if (isset($_SESSION['user']['id'])) { // Vérifie si l'utilisateur est connecté
            $user_id = $_SESSION['user']['id'];

            
            $requete = $database->prepare("INSERT INTO tweet (content, id_user) VALUES (:content, :id_user)"); // Requête SQL pour insérer un tweet
            $result = $requete->execute([ 
                ':content' => $content,
                ':id_user' => $user_id
            ]);

            if ($result) {

                
                echo 'Tweet added';
                header('Location: ../dashboard.php'); // Redirige l'utilisateur vers le dashboard après avoir ajouté un tweet
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