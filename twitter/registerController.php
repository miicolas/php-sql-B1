<?php 
include 'connectionDb.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];

        // Check if the user already exists
        $query = $database->prepare("SELECT * FROM user WHERE email = :email OR username = :username");
        $query->execute(array(':email' => $email, ':username' => $username));
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if ($user['username'] == $username) {
                die('User with this username already exists');
            }
            if ($user['email'] == $email) {
                die('User with this email already exists');
            }
        } else {
            // User doesn't exist, proceed with insertion
            $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $nouvelUser = [
                'username' => $username,
                'email' => $email,
                'password' => $passwordHash
            ];

            $requete = $database->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
            if ($requete->execute($nouvelUser)){
                echo 'User added';
            } else {
                echo 'Error adding user';
            }

            header('Location: login.php');
            exit();
        }
    } else {
        die('Please fill all the fields');
    }
}
?>