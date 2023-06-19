<?php

// require_once 'Modele/Mission.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurMission
{
    private $mission;
    
    public function __construct()
    {
        $this->mission = new Mission();
    }
    public function BenevoleMssion()
    {
        $missions =$this->mission->getMissions();
        $vue = new Vue("Mission");
        $vue->generer(array('missions'=>$missions));
    }
    public function BenevoleMssionAjouter()
    {
        $missions =$this->mission->getMissions();
        $vue = new Vue("MissionAjouter");
        $vue->generer(array('missions'=>$missions));
    }
    // public function BenevoleMissionAjouter($idMission)
    // {
    //     $mission =$this->mission->getMission($idMission);
    //     $vue = new Vue("InscritBenevoleMission");
    //     $vue->generer(array('mission'=>$mission));
    // }
    public function ajouterBenevoleMission($idMission, $titre, $annonce, $adresse, $codePostal, $ville)
    {
        $this->mission->ajoutMission($idMission, $titre, $annonce, $adresse, $codePostal, $ville);
    }
    public function modifierBenevoleMission( $titre, $annonce, $adresse, $codePostal, $ville, $idMission)
    {
        $this->mission->modifMission( $titre, $annonce, $adresse, $codePostal, $ville, $idMission);
    }
    public function supprimerMission($idMission)
    {
        $this->mission->deleteMission($idMission);
    }
}