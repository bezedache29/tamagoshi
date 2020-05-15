<?php
/**
 * 
 */
class Pasteque
{
    private $impact_faim = 0;
    private $impact_soif = 0;
    private $impact_sante = 0;
    private $impact_humeur = 0;
    private $nom;

    public function __construct() 
    {
        $this->impact_faim = -20;
        $this->impact_soif = -30;
        $this->nom = 'Pastèque';
    }

    public function getImpactSoif() 
    {
        /**
         * Ecrire le code
         */
    }

    /**
     * Ecrire les autres accesseurs
     */
}