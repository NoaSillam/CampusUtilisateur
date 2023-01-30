<?php

// header("Acces-Control-Allow-Origine: *");
// header("Content-type: application/json;charset=UTF-8");

// require_once 'Modele/Prestataire.php';
// require_once 'Modele/AnimationPartenaire.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';



class ControleurAccueil
{

    public function accueil()
    {
        $accueil = "";
        $vue = new Vue("Accueil");
        $vue->generer(array('accueil'=>$accueil));
    }
    public function rechercherAccueil()
    {
        $accueil = "";
        $vue = new Vue("RechercherAccueil");
        $vue->generer(array('accueil'=>$accueil));
    }
    public function presDeChezVous()
    {
        $accueil = "";
        $vue = new Vue("PresDeChezVous");
        $vue->generer(array('accueil'=>$accueil));
    }
}