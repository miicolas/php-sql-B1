<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php require "menu.template.php"; ?>

    <ul>
    
    <?php foreach($user as $competence) {

        if ($competence['Langage']== 'PHP')
        {
            echo '<li> PHP : ' . $competence['Compétence'] . '</li>';

        } elseif ($competence['Langage']== 'SQL') {
            echo '<li> SQL : ' . $competence['Compétence'] . '</li>';
            
        }
        else
        {
            echo '<li> Autre : ' . $competence['Compétence'] . '</li>';
        }

        // if ($competence['Langage'] == 'PHP' || $competence['Langage'] == 'SQL')
        // {
        //     echo '<li> Langage Back : ' . $competence['Langage'] . '</li>';
        // }
        // else
        // {
        //     echo '<li> Langage Front : ' . $competence['Langage'] . '</li>';
        // }

        // if ($competence['Langage'] = ! 'PHP')
        // {
        //     echo $competence['Compétence'];
        // }
        
        
    }
    ?>
    </ul> 

    <form action="traitement.php" method="POST">
        <input type="hidden" value="login" name="form">
        <label for="pseudo">Votre pseudo</label>
        <input type="text" name="pseudo" id="pseudo">
        <label for="pass">Votre mot de passe</label>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Envoyer">
    </form>

      
</body>
</html>