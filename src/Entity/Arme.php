<?php

namespace App\Entity;

class Arme
{
    public $nom;
    public $description;
    public $degat;

    public static $armes = [];

    public function __construct($nom, $description, $degat)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->degat = $degat;
        self::$armes[] = $this;
    }

    public static function creerArmes()
    {
        $p1 = new Arme("épée", "Une superbe épée tranchante",10);
        $p2 = new Arme("arche", "Une superbe hache tranchante",20);
        $p3 = new Arme("arc", "Un superbe arc tranchant",30);
        
    }

    public static function getArmeParNom($nom)
    {
        foreach (self::$armes as $arme) {
            if (strtolower(str_replace("é","e",$arme->nom)) === $nom) {
                return $arme;
            }
        }
    }
}
