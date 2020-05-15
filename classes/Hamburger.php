<?php
/**
 * 
 */
class Hamburger extends Provision {
    /**
     * Ecrire le code
     */
    public function __construct() {
        $this->impact_faim = -100;
        $this->impact_soif = 30;
        $this->impact_sante = -10;
        $this->nom = 'Hamburger';
    }
}