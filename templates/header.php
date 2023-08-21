<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telefoot - La chaine du foot</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/icomoon.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body>
    <header>
        <div class="container">
            <div class="nav-wrap">
                <ul class="first-list-wrap">
                    <img src="../assets/img/telefoot-color-bg-01.svg" alt="Telefoot - La chaine du foot" />
                    <li><a href="./">Home</a></li>
                    <li><a href="">Telefoot Bar</a></li>
                </ul>
                <ul class="second-list-wrap">
                    <?php
                    if (isset($_SESSION["user"])) {
                        ?>
                        <li><a href="index">Live</a></li>
                        <li><a href="logout">Se déconnecter</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="create">S'abonner</a></li>
                        <li><a href="login">Se connecter</a></li>
                        <?php
                    } ?>
                </ul>
            </div>
        </div>
    </header>