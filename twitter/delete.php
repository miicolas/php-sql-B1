<?php 

include 'connectionDb.php';

 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'suppr'){
    if ($_POST['username'] != '') {
        $deleteUser = [
            'username' => $_POST['username'],
        ];
        
        $requete = $database->prepare("DELETE FROM user WHERE username = :username");
        if ($requete->execute($deleteUser)){
            echo 'User deleted';
        } else {
            echo 'Error deleting user';
        }

        header('Location: deleteaccount.php');
    
    } else {
        die('Please fill all the fields');
    }

}
