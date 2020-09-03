<?php

namespace App\Entity;

class Personnage
{
    public $nom;
    public $age;
    public $sexe;
    public $carac = [];

    public static $personnages = [];

    public function __construct($nom,$age,$sexe,$carac)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] = $this;
    }

    public static function creerPersonnages()
    {
        $p1 = new Personnage("Marc", 25, true, [
            "force" => 3,
            "agilite" => 2,
            "intel" => 3
        ]);

        $p2 = new Personnage("Milo", 25, true, [
            "force" => 3,
            "agilite" => 2,
            "intel" => 3
        ]);

        $p3 = new Personnage("Tya", 23, false, [
            "force" => 3,
            "agilite" => 2,
            "intel" => 3
        ]);
    }

    public static function getPersonnageParNom($nom)
    {
        foreach (self::$personnages as $perso) {
            if (strtolower($perso->nom) === $nom) {
                return $perso;
            }
        }
    }
}
