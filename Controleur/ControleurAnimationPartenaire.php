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

     public function animPartenaire77News()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimation77News();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire77News");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
       // echo json_encode($animPartenaire);
     }  
     public function animPartenaire75News()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimation75News();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire75News");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
       // echo json_encode($animPartenaire);
     }  
     public function animPartenaire78News()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimation78News();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire78News");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
       // echo json_encode($animPartenaire);
     } 
     public function animPartenaire91News()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimation91News();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire91News");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
       // echo json_encode($animPartenaire);
     } 
     public function animPartenaire92News()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimation92News();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire92News");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
       // echo json_encode($animPartenaire);
     }
     public function animPartenaire93News()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimation93News();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire93News");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
       // echo json_encode($animPartenaire);
     }
     public function animPartenaire94News()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimation94News();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire94News");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
       // echo json_encode($animPartenaire);
     }
     public function animPartenaire95News()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimation95News();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire95News");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
       // echo json_encode($animPartenaire);
     }
     public function animPartenaireNews()
     {
        $animationPartenaire = $this->animationPartenaire->getAnimationNews();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaireNews");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
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
     public function animPartenaire78()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation78();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire78");
        $vue->generer(array('animPartenaire'=>$animPartenaire));
       // echo json_encode($animPartenaire);
     }  
     public function animPartenaire93()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation93();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire93");
        $vue->generer(array('animPartenaire'=>$animPartenaire));
       // echo json_encode($animPartenaire);
     } 
     public function animPartenaire94()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation94();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire94");
        $vue->generer(array('animPartenaire'=>$animPartenaire));
       // echo json_encode($animPartenaire);
     } 
     public function animPartenaire75()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation75();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire75");
        $vue->generer(array('animPartenaire'=>$animPartenaire));
       // echo json_encode($animPartenaire);
     } 
     public function animPartenaire91()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation91();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire91");
        $vue->generer(array('animPartenaire'=>$animPartenaire));
       // echo json_encode($animPartenaire);
     } 
     public function animPartenaire92()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation92();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire92");
        $vue->generer(array('animPartenaire'=>$animPartenaire));
       // echo json_encode($animPartenaire);
     } 
     public function animPartenaire95()
     {
        $animPartenaire = $this->animationPartenaire->apiAnimation95();
       // echo json_encode($animPartenaire);
        $vue = new Vue("AnimPartenaire95");
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
    public function prestataire75()
    {
        $prestataires = $this->prestataire->getPrestataires75();
        $vue = new Vue("prestataires75");
        $vue->generer(array('prestataires'=>$prestataires));
    }
   
    public function prestataire77()
    {
        $prestataires = $this->prestataire->getPrestataires77();
        $vue = new Vue("prestataires77");
        $vue->generer(array('prestataires'=>$prestataires));
    }
    public function prestataire78()
    {
        $prestataires = $this->prestataire->getPrestataires78();
        $vue = new Vue("prestataires78");
        $vue->generer(array('prestataires'=>$prestataires));
    }
    public function prestataire91()
    {
        $prestataires = $this->prestataire->getPrestataires91();
        $vue = new Vue("prestataires91");
        $vue->generer(array('prestataires'=>$prestataires));
    }
    public function prestataire92()
    {
        $prestataires = $this->prestataire->getPrestataires92();
        $vue = new Vue("prestataires92");
        $vue->generer(array('prestataires'=>$prestataires));
    }
    public function prestataire93()
    {
        $prestataires = $this->prestataire->getPrestataires93();
        $vue = new Vue("prestataires93");
        $vue->generer(array('prestataires'=>$prestataires));
    }
    public function prestataire94()
    {
        $prestataires = $this->prestataire->getPrestataires94();
        $vue = new Vue("prestataires94");
        $vue->generer(array('prestataires'=>$prestataires));
    }
    public function prestataire95()
    {
        $prestataires = $this->prestataire->getPrestataires95();
        $vue = new Vue("prestataires95");
        $vue->generer(array('prestataires'=>$prestataires));
    }


}