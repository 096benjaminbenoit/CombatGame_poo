<?php
require_once "vendor/autoload.php";
use BenjaminChristelle\CombatGamePoo\Personnages;

//dump($_POST['enemy_life'] );
$playerName = $_GET['name'] ?? null;
$enemy_life = $_POST['enemy_life'] ?? 100;

$lifeBar = $enemy_life / 100 * 100;
//dump($lifeBar);

$hero = new Personnages($_GET["name"], 200, 0, 15);
$chefMinion = new Personnages("Chef Minion", $enemy_life, 0, 100);

$hero->randomAttack($chefMinion)

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
        <form class="fight-main_form" action="" method="POST">
            <div class="fight-main_form_left">
                <h2 class="fight-main_form_left__name"><?=$playerName?></h2>
                <img class="fight-main_form_left__img" src="img/hero.png" alt="">
                <span class="fight-main_form_left_life">
                    <input class="fight-main_form_left_life__value" value="<?= $hero->life?>" disabled>
                </span>
                <span class="fight-main_form_left_armor">
                    <input class="fight-main_form_left_armor__value" value="<?= $hero->armor?>" disabled>
                </span>
            </div>
            <button class="fight-main_form__button">ATTAQUE</button>
            <div class="fight-main_form_right">
                <h2 class="fight-main_form_right__name"><?= $chefMinion->name ?></h2>
                <img class="fight-main_form_right__img" src="img/chef_minion.png" alt="">
                <span class="fight-main_form_right_life">
                    <input name="enemy_life" class="fight-main_form_right_life__value" value="<?= $chefMinion->life?>" readonly style="background-color: rgb(0, 196, 0); width: <?= $lifeBar ?>%; height: 30px;">
                </span>
                </div>
        </form>
    </main>
</body>
</html>