<?php
/**
 * 
 */
class Pasteque extends Provision {
    
    public function __construct() {
        $this->impact_faim = -20;
        $this->impact_soif = -30;
        $this->nom = 'Pastèque';
    }

    /**
     * Ecrire les autres accesseurs
     */
}