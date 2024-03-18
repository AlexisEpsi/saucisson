<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<header>
    <a href="index.php">index</a>
    <?php 
    if (empty($_SESSION['isConnect'])) {
        echo '<a href="inscription.php">Inscription</a>';
        echo '<a href="connexion.php">Connexion</a>';
    } else {
        echo '<a href="creer.php">Créer</a>';                  
        echo '<a href="profil.php?pseudo=' . $_SESSION['isConnect'] . '">Profil</a>';                  
        echo '<a href="deconnexion.php">Déconnexion</a>';                  
    }?>
</header>