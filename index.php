<?php
require_once "vendor/autoload.php";

use BenjaminChristelle\CombatGamePoo\Personnages;

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>COMBAT POO - Accueil</title>
</head>
<body>
    <main class="index-main">
        <h1 class="index-main__h1">COMBAT POO</h1>
        <form class="index-main_form" action="fight.php" method="GET">
            <input class="index-main_form__input" type="text" placeholder="Le nom de votre héro ..." name="name" id="name">
            <button class="index-main_form__button" type="submit">START</button>
        </form>
    </main>
</body>
</html>
