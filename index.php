<?php
require_once "vendor/autoload.php";

use BenjaminChristelle\CombatGamePoo\Personnages;

$hero = new Personnages("christelle", 200, 20, 15);

$minion = new Personnages("minion", 10, 0, 10);

$lieutenantMinion = new Personnages("lieutenant minion", 30, 0, 30);

$chefMinion = new Personnages("chef minion", 100, 0, 100);


$hero->lifeBonus();

dump($hero, $minion, $lieutenantMinion, $chefMinion);
