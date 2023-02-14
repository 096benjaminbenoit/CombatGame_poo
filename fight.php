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
    <title>COMBAT POO - Fight</title>
</head>
<body>
    <h1 class="fight-main__h1">COMBAT POO</h1>
    <main class="fight-main">
        <div class="fight-main_left">
            <h2 class="fight-main_left__name">NOM</h2>
            <img class="fight-main_left__img" src="img/hero.png" alt="">
            <span class="fight-main_left_life">
                <span class="fight-main_left_life__value"></span>
            </span>
            <span class="fight-main_left_armor">
                <span class="fight-main_left_armor__value"></span>
            </span>
        </div>
        <button class="fight-main__button">ATTAQUE</button>
        <div class="fight-main_right">
        <h2 class="fight-main_right__name">NOM</h2>
            <img class="fight-main_right__img" src="img/chef_minion.png" alt="">
            <span class="fight-main_right_life">
                <span class="fight-main_right_life__value"></span>
            </span>
        </div>
    </main>
</body>
</html>