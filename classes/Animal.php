<?php

/**
 * 
 */
class Animal
{
    private $faim = 50;
    private $soif = 50;
    private $humeur = 100;
    private $sante = 100;
    private $nom;
    private $age = 0;
    
    function __construct($nom)
    {
        $this->nom = $nom;
    }




    /**
     * Ecrire les accesseurs
     */
    public function getNom() {
        return $this->nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSante() {
        return $this->sante;
    }

    public function getFaim() {
        return $this->faim;
    }

    public function getSoif() {
        return $this->soif;
    }

    public function getHumeur() {
        return $this->humeur;
    }
    

    public function soigner($points)
    {
        /**
         * Code à écrire
         */

        $this->verifieEtat();
    }

    public function caresser($points)
    {
        /**
         * Code à écrire
         */

        $this->verifieEtat();
    }

    public function nourrir($provision)
    {
        /**
         * Code à écrire
         */
        $this->faim += $provision->getImpactFaim();
        $this->soif += $provision->getImpactSoif();
        $this->sante += $provision->getImpactSante();
        $this->humeur += $provision->getImpactHumeur();

        $this->verifieEtat();
    }

    protected function verifieEtat()
    {
        /**
         * Code à écrire
         */
        if($this->sante > 100) {
            $this->sante = 100;
        }else if($this->sante < 0) {
            $this->sante = 0;
        }

        if($this->faim > 100) {
            $this->faim = 100;
        }else if($this->faim < 0) {
            $this->faim = 0;
        }

        if($this->soif > 100) {
            $this->soif = 100;
        }else if($this->soif < 0) {
            $this->soif = 0;
        }

        if($this->humeur > 100) {
            $this->humeur = 100;
        }else if($this->humeur < 0) {
            $this->humeur = 0;
        }
    }

    public function vieillir()
    {
        /**
         * Code à écrire
         */
        $this->faim += random_int(5, 15);
        $this->soif += random_int(5, 15);
        $this->humeur += random_int(-80, 80);
        $this->age++;

        $this->verifieEtat();

        if($this->faim == 100) {
            $this->sante -= random_int(10, 30);
        }
        if($this->soif == 100) {
            $this->sante -= random_int(10, 30);
        }
        if($this->humeur == 0) {
            $this->sante -= random_int(0, 20);
        }
        if($this->sante == 0) {
            // Action ???
        }

        $this->verifieEtat();
    }
}