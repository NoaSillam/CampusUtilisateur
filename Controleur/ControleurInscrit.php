<?php

// require_once 'Modele/Inscrit.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurInscrit
{
    private $inscrit;

    public function __construct()
    {
        $this->inscrit = new Inscrit();
    }
    public function listeDonateur()
    {
        $donateurs = $this->inscrit->getInscritDonateurs();
        $vue = new Vue("InscritDonateur");
        $vue->generer(array('donateurs'=>$donateurs));
    }
    public function listeBenevole()
    {
        $benevoles = $this->inscrit->getInscritBenevoles();
        $vue = new Vue("InscritBenevole");
        $vue->generer(array('benevoles'=>$benevoles));
    }
    public function listeBenevoleMission()
    {
        $benevoles = $this->inscrit->getInscritBenevolesMission();
        $vue = new Vue("InscritBenevoleMission");
        $vue->generer(array('benevoles'=>$benevoles));
    }

    public function listeNewsletters()
    {
        $newsletters = $this->inscrit->getInscritNewsletters();
        $vue = new Vue("InscritNewsletters");
        $vue->generer(array('newsletters'=>$newsletters));
    }
    public function listePreventions()
    {
        $preventions = $this->inscrit->getInscritPreventions();
        $vue = new Vue("InscritPreventions");
        $vue->generer(array('preventions'=>$preventions));
    }
    public function ajoutDonateur($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $montant, $anneeNaissance, $civilite)
    {
       $this->inscrit->ajouterInscritDonateur($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $montant, $anneeNaissance, $civilite);
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutBenevole($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite)
    {
       $this->inscrit->ajouterInscritBenevole($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite);
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutBenevoleMission($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite, $commentaire, $idMission)
    {
       $this->inscrit->ajouterInscritBenevoleMission($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite, $commentaire, $idMission);
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutNewsletters($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal,  $anneeNaissance, $civilite)
    {
       $this->inscrit->ajouterInscritNewsletter($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite);
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutPrevention($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite)
    {
       $this->inscrit->ajouterInscritPrevention($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite);
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
}
