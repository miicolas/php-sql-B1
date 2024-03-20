<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['form'] == 'login' && isset($_POST['pass']))
    {
        $user = $_POST['pseudo'];
        $pass = $_POST['pass'];

        echo 'Votre pseudo est : ' . $user . ' et votre mot de passe est : ' . $pass;

    }
    
} 

?>