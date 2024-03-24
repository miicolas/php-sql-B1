<?php
include '../connectionDb.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form']) && $_POST['form'] == 'login') {
    if (!empty($_POST['password']) && !empty($_POST['username'])) {
        $username = $_POST['username'];

        $query = $database->prepare("SELECT id, username, name, password FROM user WHERE username = :username");
        $query->execute(array(':username' => $username));
        $login = $query->fetch(PDO::FETCH_ASSOC);

        if ($login && password_verify($_POST['password'], $login['password'])) {
            
            $_SESSION['user'] = ['id' => $login['id'], 'username' => $username, 'name' => $login['name']];

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
