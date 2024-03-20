<?php
// Assuming $database is already initialized with PDO connection

require 'connectionDb.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form']) && $_POST['form'] == 'login') {
    if (!empty($_POST['password']) && !empty($_POST['username'])) {
        $username = $_POST['username'];

        // Fetch user data from database
        $query = $database->prepare("SELECT id, username, password FROM user WHERE username = :username");
        $query->execute(array(':username' => $username)); // Bind email parameter
        $login = $query->fetch(PDO::FETCH_ASSOC); // Use fetch instead of fetchAll

        if ($login && password_verify($_POST['password'], $login['password'])) {
            // Password is correct, set authentication cookie and redirect to dashboard
            $_SESSION['user'] = $_POST['username'];
            header('Location: dashboard.php');
            exit();
        } else {
            // Invalid email or password
            echo 'Invalid email or password';
        }
    } else {
        echo 'Please fill all the fields';
    }
}
?>
