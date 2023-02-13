<?php
require_once "vendor/autoload.php";

use BenjaminChristelle\CombatGamePoo\Personnages;

$hero = new Personnages();
$hero->name = "Christelle";
$hero->life = 200;
$hero->attack = 15;

$minion = new Personnages();
$minion->name = "Minion";
$minion->life = 10;
$minion->attack = 10;

$lieutenantMinion = new Personnages();
$lieutenantMinion->name = "Lieutenant Minion";
$lieutenantMinion->life = 30;
$lieutenantMinion->attack = 30;

$chefMinion = new Personnages();
$chefMinion->name = "Chef Minion";
$chefMinion->life = 100;
$chefMinion->attack = 100;

$hero->lifeBonus();
$hero->armorBonus();

$minion->randomAttack($hero);

dump($hero, $minion, $lieutenantMinion, $chefMinion);
