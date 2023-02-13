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
        if($random == 0) {
            echo "Echec de l'attaque";
            return;
        }
        
        if($this->attack < $cible->armor) {
            echo "Trop d'armure pour perdre de la vie";
        } else if ($this->attack > $cible->armor) {
            echo "Succès de l'attaque";
            $cible->life = $cible->life - ($this->attack - $cible->armor);
        }

    }
}
