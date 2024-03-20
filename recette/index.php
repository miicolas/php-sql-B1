<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'ajouter_recette') {

    $nouvelle_recette = [
        'titre' => $_POST['titre'],
        'id' => strtolower(str_replace(' ', '-', $_POST['titre'])),
        'image_url' => $_POST['image_url'],
        'description' => $_POST['description'],
        'difficulte' => $_POST['difficulte'],
        'time' => $_POST['time'],
        'temps_preparation' => $_POST['temps_preparation'],
        'temps_cuisson' => $_POST['temps_cuisson'],
        'personnes' => $_POST['personnes'],
        'ingredients' => json_decode($_POST['ingredients'], true), 
        'instructions' => json_decode($_POST['instructions'], true),
        'ustensils' => json_decode($_POST['ustensils'], true),

        
    ];

    require_once "recettes.php";

    $recettes[] = $nouvelle_recette;

    file_put_contents('recettes.php', '<?php $recettes = ' . var_export($recettes, true) . ';');
    header("Location: index.php");
    exit();
}

require_once "index.template.php";
?>
