<?php

namespace BenjaminChristelle\CombatGamePoo;

class Personnages {
    public $name;
    public $life;
    public $armor;
    public $attack;

    // CONSTRUC POUR NOM / VIE / ARMURE ET ATTAQUE //

    public function __construct($na, $li, $ar, $at) {
        $this->name=$na;
        $this->life=$li;
        $this->armor=$ar;
        $this->attack=$at;
    }

    // FONCTION BONUS DE VIE //

    public function lifeBonus() {
        if($this->life >= 200) {

            // SI LA VIE EST DÉJÀ AU MAX --> NE FAIT RIEN //
            echo "Vie est au max </br>";
            return;
        } else {
            // SI LA VIE N'EST PAS AU MAX --> AJOUTE LE BONUS ET BLOQUE À LA VIE MAX//
            $this->life = $this->life +50;
            if($this->life >= 200) {
                $this->life = 200;
                echo "Vie est remis au max";
            }
        }
    }

    // FONCTION BONUS D'ARMURE //

    public function armorBonus() {
        $this->armor = $this->armor +20;
    }

    // FONCTION D'ATTAQUE //
    public function randomAttack($cible) {

        // VALEUR ALÉATOIRE ENTRE 0 & 1 POUR RÉUSSITE OU ECHEC // 
        $random = rand(0, 1);

        // VALEUR ALÉATOIRE ENTRE 0 ET L'ATTAQUE DU PERSONANGE //
        $randomDamage = rand(0, $this->attack);
        if($random == 0) {
            echo "Echec de l'attaque";
            return;
        }
        
        // SI L'ATTAQUE RÉUSSI, PRISE EN COMPTE DE L'ARMURE//
        if($randomDamage < $cible->armor) {
            echo "Trop d'armure pour perdre de la vie";
        } else if ($randomDamage > $cible->armor) {
            echo "Succès de l'attaque";
            $cible->life = $cible->life - ($randomDamage - $cible->armor);

            // MORT DE LA CIBLE SI VIE = 0 //
        } if($cible->life <= 0) {
            echo " </br> La cible est morte";
        }
    }
}