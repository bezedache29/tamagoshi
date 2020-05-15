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

        $this->verifieEtat();
    }

    protected function verifieEtat()
    {
        /**
         * Code à écrire
         */
    }

    public function vieillir()
    {
        /**
         * Code à écrire
         */
        
    }



}