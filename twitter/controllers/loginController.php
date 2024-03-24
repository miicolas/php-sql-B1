<?php
include '../connectionDb.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form']) && $_POST['form'] == 'login') { // Vérifie si le formulaire a été soumis
    if (!empty($_POST['password']) && !empty($_POST['username'])) { // Vérifie si les champs ne sont pas vides
        $username = $_POST['username'];

        $query = $database->prepare("SELECT id, username, name, password FROM user WHERE username = :username");
        $query->execute(array(':username' => $username)); // Requête SQL pour récupérer l'utilisateur
        $login = $query->fetch(PDO::FETCH_ASSOC); // Récupère l'utilisateur

        if ($login && password_verify($_POST['password'], $login['password'])) { // Vérifie si le mot de passe est correct
            
            $_SESSION['user'] = ['id' => $login['id'], 'username' => $username, 'name' => $login['name']]; // Stocke l'utilisateur dans la session

            header('Location: ../dashboard.php');
            exit();
        } else {
            echo 'Invalid username or password';
        }
    } else {
        echo 'Please fill all the fields';
    }
}

?>
