<?php

// header("Acces-Control-Allow-Origine: *");
// header("Content-type: application/json;charset=UTF-8");

// require_once 'Modele/Prestataire.php';
// require_once 'Modele/AnimationPartenaire.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';



class ControleurAnimationPartenaire
{
    private $prestataire;
    private $animationPartenaire;

    public function __construct()
    {
        $this->prestataire = new Prestataire();
        $this->animationPartenaire = new AnimationPartenaire();
    }
    public function prest($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
        $vue = new Vue("AnimationPartenaire");
        $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
     }
     public function animPartenaire()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire");
        $vue->generer(array('animPartenaire'=>$animPartenaire));
       // echo json_encode($animPartenaire);
     }  
     public function animPartenaire77()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation77();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire77");
        $vue->generer(array('animPartenaire'=>$animPartenaire));
       // echo json_encode($animPartenaire);
     }  
       // http_response_code(200);
            // echo json_encode($animPartenaire);


       // public function animPartenaireAjouter()
    // { 
    //     $animationPartenaires = $this->animationPartenaire->getAnimPartenaires();
    //     // $vue = new Vue("Accueil", "index.php");
    //     $vue = new Vue("AnimPartenaireAjouter");
    //      $vue->generer(array('animationPartenaire'=> $animationPartenaires));
    // }
    public function animationPartenaires($idAnimationPartenaire)
    {
        $animationPartenaire = $this->animationPartenaire->getAnimationPartenaire($idAnimationPartenaire);
        $vue = new Vue("AnimationPartenaire");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
    }
   

}