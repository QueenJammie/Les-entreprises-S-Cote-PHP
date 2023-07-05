<?php
    $dest = 'jammie.lacc@outlook.com';
    $objet = $_POST['objet'];
    $message = $_POST['prenom'] . " " . $_POST['nom'] . " vous a envoyé un message:<br />" . $_POST['message'];
    $entetes = "FROM: " . $_POST['mail'];

    if(mail($dest,$objet,$message,$entetes))
        echo "Mail envoyé avec succès.";
    else
        echo "Un problème est survenu.";
    exit;
?>