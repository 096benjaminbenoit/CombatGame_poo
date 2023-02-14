<?php
require_once "vendor/autoload.php";

use BenjaminChristelle\CombatGamePoo\Personnages;
// $hero = new Personnages("christelle", 200, 20, 15);
// $minion = new Personnages("minion", 10, 0, 10);
// $lieutenantMinion = new Personnages("lieutenant minion", 30, 0, 30);
// $chefMinion = new Personnages("chef minion", 100, 0, 100);
// $hero->lifeBonus();
// dump($hero, $minion, $lieutenantMinion, $chefMinion);
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
            <input class="index-main_form__input" type="text" placeholder="Le nom de votre héro ...">
            <button class="index-main_form__button" type="submit">START</button>
        </form>
    </main>
</body>
</html>
