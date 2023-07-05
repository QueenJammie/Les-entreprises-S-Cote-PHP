<?php
    if (
            (
                isset($_POST['pseudo'])
                || (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
            )
            && isset($_POST['commentaire_box']) || !empty($_POST['commentaire_box'])
        )
    {
        // Insertion dans la base de données
        try
        {
            $db = new PDO(
                'mysql:host=localhost;dbname=db_entreprisescote;charset=utf8', 
                'root', 
                '', 
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

        $pseudo = $_POST['pseudo'];
        $commentaire = $_POST['commentaire_box'];

        // Ecriture de la requête
        $sqlQuery = 'INSERT INTO work1_tbl_commentaires(pseudo, commentaire, is_enabled) VALUES (:pseudo, :commentaire_box, :is_enabled)';

        // Préparation
        $insertCommentaire = $db->prepare($sqlQuery);

        // Exécution ! La recette est maintenant en base de données
        $insertCommentaire->execute([
            'pseudo' => $pseudo,
            'commentaire_box' => $commentaire,
            'is_enabled' => 1,
        ]) or die(print_r($db->errorInfo()));
    }
    header('Location: work1.php');
?>