<?php

// require_once 'Modele/Dictionnaire.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurDictionnaire
{
    private $dictionnaire;

    public function __construct()
    {
        $this->dictionnaire = new Dictionnaire();
    }
    public function listeDictionnaire()
    {
        $dictionnaires = $this->dictionnaire->getDic();
        $vue = new Vue("Dictionnaire");
        $vue->generer(array('dictionnaires'=>$dictionnaires));
    }
    public function dictionnaires($idDictionnaire)
    {
        $dictionnaire = $this->dictionnaire->getDictionnaire($idDictionnaire);
        $vue = new Vue("DictionnaireId");
        $vue->generer(array('dictionnaire'=>$dictionnaire));
    }
    public function rechercherDictionnaire($libelle)
    {
        $dicRechercher = $this->dictionnaire->getRechercheDictionnaire($libelle);
        $vue = new Vue("DictionnaireResultat");
        $vue->generer(array('dicRechercher'=>$dicRechercher));
    }
   
    // public function dictionnaireLettre($lettre)
    // {
    //     $dictionnaire = $this->dictionnaire->getDictionnaireLettre($lettre);
    //     $vue = new Vue("DictionnaireLettre");
    //     $vue->generer(array('dictionnaire'=>$dictionnaire));

    // }
    public function dictionnaireLettreA()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreA();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettrA()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreA();
        $vue = new Vue("DictionnaireLettr");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    // public function dictionnaireLettreAA()
    // {
    //     $dictionnaire = $this->dictionnaire->getDictionnaireLettreA();
    //     $vue = new Vue("Dictionnaire");
    //     $vue->generer(array('dictionnaire'=>$dictionnaire));

    // }
    public function dictionnaireLettreB()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreB();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreC()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreC();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreD()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreD();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreE()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreE();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreF()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreF();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreG()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreG();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreH()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreG();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    
    
    public function dictionnaireLettreI()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreI();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreJ()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreJ();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreK()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreK();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreL()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreL();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreM()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreM();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreN()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreN();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreO()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreO();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreP()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreP();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreQ()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreQ();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreR()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreR();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreS()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreS();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreT()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreT();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreU()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreU();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreV()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreV();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreW()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreW();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreX()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreX();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreY()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreY();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaireLettreZ()
    {
        $dictionnaire = $this->dictionnaire->getDictionnaireLettreZ();
        $vue = new Vue("DictionnaireLettre");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }

}