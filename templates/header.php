<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telefoot - La chaine du foot</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/icomoon.css" />
    <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
    <header>
        <div class="container">
            <div class="nav-wrap">
                <ul class="first-list-wrap">
                    <img src="../img/telefoot-color-bg-01.svg" alt="Telefoot - La chaine du foot" />
                    <li><a href="./">Home</a></li>
                    <li><a href="">Telefoot Bar</a></li>
                </ul>
                <ul class="second-list-wrap">
                    <?php
                    if (isset($_SESSION["user"])) {
                        ?>
                        <li><a href="?page=index">Live</a></li>
                        <li><a href="?page=logout">Se déconnecter</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="?page=create">S'abonner</a></li>
                        <li><a href="?page=login">Se connecter</a></li>
                        <?php
                    } ?>
                </ul>
            </div>
        </div>
    </header>