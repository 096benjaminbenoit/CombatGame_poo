<?php

namespace BenjaminChristelle\CombatGamePoo;

class Personnages {
    public $name;
    public $life;
    public $armor;
    public $attack;

    public function lifeBonus() {
        $this->life = $this->life +50;
    }

    public function armorBonus() {
        $this->armor = $this->armor +20;
    }

    public function randomAttack($cible) {
        $random = rand(0, 1);
        if($random == 1) {
            echo "Succès";
            $cible->life = $cible->life - ($this->attack - $cible->armor);
        } else {
            echo "Echec";
        }
    }
}
