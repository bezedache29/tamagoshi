<?php

    class Provision {

        protected $impact_faim = 0;
        protected $impact_soif = 0;
        protected $impact_sante = 0;
        protected $impact_humeur = 0;
        protected $nom;
        
        public function getImpactFaim() {
            return $this->impact_faim;
        }
    
        public function getImpactSoif() {
            return $this->impact_soif;
        }
    
        public function getImpactSante() {
            return $this->impact_sante;
        }
    
        public function getImpactHumeur() {
            return $this->impact_humeur;
        }
    
        public function getNom() {
            return $this->nom;
        }
    }