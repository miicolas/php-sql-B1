<?php 
include '../connectionDb.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Vérifie si le formulaire a été soumis
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) { // Vérifie si les champs ne sont pas vides
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];

        // Check if the user already exists
        $query = $database->prepare("SELECT * FROM user WHERE email = :email OR username = :username"); // Requête SQL pour vérifier si l'utilisateur existe déjà
        $query->execute(array(':email' => $email, ':username' => $username));
        $user = $query->fetch(PDO::FETCH_ASSOC); // Récupère l'utilisateur

        if ($user) {
            if ($user['username'] == $username) {
                die('User with this username already exists');
            }
            if ($user['email'] == $email) {
                die('User with this email already exists');
            }
        } else {
            // User doesn't exist, proceed with insertion
            $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash le mot de passe
            $nouvelUser = [
                'username' => $username,
                'email' => $email,
                'name' => $name,
                'password' => $passwordHash, 
            ];

            $requete = $database->prepare("INSERT INTO user (username, email, name, password) VALUES (:username, :email, :name, :password)"); // Requête SQL pour insérer un utilisateur
            if ($requete->execute($nouvelUser)){
                echo 'User added';
            } else {
                echo 'Error adding user';
            }

            header('Location: ../login.php');
            exit();
        }
    } else {
        die('Please fill all the fields');
    }
}
?>