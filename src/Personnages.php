<?php

namespace BenjaminChristelle\CombatGamePoo;

class Personnages {
    public $name;
    public $life;
    public $armor;
    public $attack;

    public function __construct($na, $li, $ar, $at) {
        $this->name=$na;
        $this->life=$li;
        $this->armor=$ar;
        $this->attack=$at;
    }

    public function lifeBonus() {
        if($this->life >= 200) {
            echo "Vie est au max </br>";
            return;
        } else {
            $this->life = $this->life +50;
            if($this->life >= 200) {
                $this->life = 200;
                echo "Vie est remis au max";
            }
        }
    }

    public function armorBonus() {
        $this->armor = $this->armor +20;
    }

    public function randomAttack($cible) {
        $random = rand(0, 1);
        $randomDamage = rand(0, $this->attack);
        if($random == 0) {
            echo "Echec de l'attaque";
            return;
        }
        
        if($randomDamage < $cible->armor) {
            echo "Trop d'armure pour perdre de la vie";
        } else if ($randomDamage > $cible->armor) {
            echo "Succès de l'attaque";
            $cible->life = $cible->life - ($randomDamage - $cible->armor);
        } if($cible->life <= 0) {
            echo " </br> La cible est morte";
        }
    }
}