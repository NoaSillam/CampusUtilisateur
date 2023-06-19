<?php
header("Acces-Control-Allow-Origine: *");
//header("Content-type: application/json;charset=UTF-8");
// require_once 'Controleur/ControleurFiltre.php';
// require_once 'Controleur/ControleurFiltreVideo.php';
// require_once 'Controleur/ControleurFiltreDocument.php';
// require_once 'Controleur/ControleurInscrit.php';
// require_once 'Controleur/ControleurDictionnaire.php';
// require_once 'Controleur/ControleurFiltreDocVideo.php';
// require_once 'Controleur/ControleurAnimationPartenaire.php';
// require_once 'Controleur/ControleurMission.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';
class Routeur

{
    private $ctrlFiltre;
    // private $ctrlFiltreVideo;
    // private $ctrlFiltreDocument;
    private $ctrlInscrit;
    private $ctrlDictionnaire;
    private $ctrlFiltreDocVideo;
    private $ctrlAnimationPartenaire;
    private $ctrlMission;
    private $ctrlAccueil;

    public function __construct()
    {
        $this->ctrlFiltre = new ControleurFiltre();
        // $this->ctrlFiltreVideo = new ControleurFiltreVideo();
        // $this->ctrlFiltreDocument = new ControleurFiltreDocument();
        $this->ctrlInscrit = new ControleurInscrit();
        $this->ctrlAnimationPartenaire = new ControleurAnimationPartenaire();
        $this->ctrlDictionnaire = new ControleurDictionnaire();
        $this->ctrlFiltreDocVideo = new ControleurFiltreDocVideo();
        $this->ctrlMission = new ControleurMission();
        $this->ctrlAccueil = new ControleurAccueil();
    }
    public function routeurRequete()
    {
        try{
            if(isset($_GET['action']))
            {
                if($_GET['action']=='videos')
                {
                    $idTheme =intval($this->getParametre($_GET, 'id'));
                    if($idTheme != 0)
                    {
                        $this->ctrlFiltre->videos($idTheme);
                    }
                    else{
                        throw new Exception("identifiant de la video non validée");

                    }
                }
               else if($_GET['action']=='documents')
                {
                    $idTheme =intval($this->getParametre($_GET, 'id'));
                    if($idTheme != 0)
                    {
                        $this->ctrlFiltre->documents($idTheme);
                    }
                    else{
                        throw new Exception("identifiant du document non validée");

                    }
                }
                else if($_GET['action']=='prest')
                {
                    $idPrestataire =intval($this->getParametre($_GET, 'id'));
                    if($idPrestataire != 0)
                    {
                        $this->ctrlAnimationPartenaire->prest($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if($_GET['action']=='themeRechercher')
                {
                    $this->ctrlFiltre->themeRechercher();
                }
                else if($_GET['action']=='sousThm')
                {
                    $idThemeParent =intval($this->getParametre($_POST, 'idThemeParent'));
                    if(!empty($idThemeParent))
                    {
                        $this->ctrlFiltre->sousThm($idThemeParent);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                else if($_GET['action']== 'rechercherThemeVideo')
                {
                    $idTheme = intval($this->getParametre($_POST, 'idTheme'));
                    $this->ctrlFiltreDocVideo->rechercherThemeVideo($idTheme);
                }
                

                else if($_GET['action'] == 'videoId')
                {
                    $idDocVideo =intval($this->getParametre($_GET, 'idDocVideo'));
                    if(!empty($idDocVideo))
                      {
                          $this->ctrlFiltreDocVideo->videoId($idDocVideo);
                         // var_dump($this->ctrlFiltreDocVideo->rechercherVideo($recherche));
                      }
                      else{
                          throw new Exception("identifiant de sous-theme non validée");
  
                      }
                }
               
                else if($_GET['action']== 'rechercherVideo')
                {
                  $recherche =$this->getParametre($_GET, 'recherche');
                  
                        $this->ctrlFiltreDocVideo->rechercherVideo($recherche);
                       // var_dump($this->ctrlFiltreDocVideo->rechercherVideo($recherche));
                  
                }
                else if($_GET['action']=='rechercherDocVideo')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    if(!empty($libelle))
                    {
                        $this->ctrlFiltreDocVideo->rechercherDocVideo($libelle);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                else if($_GET['action']=='rechercherDocVideoSelect')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    if(!empty($libelle))
                    {
                        $this->ctrlFiltreDocVideo->rechercherDocVideoSelect($libelle);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                else if($_GET['action']=='rechercherDictionnaire')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    if(!empty($libelle))
                    {
                        $this->ctrlDictionnaire->rechercherDictionnaire($libelle);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                else if($_GET['action'] == 'rechercher')
                {
                  
                   // $this->ctrlFiltreVideo->actualite();
                    $this->ctrlFiltreDocVideo->rechercher();
                }
                else if($_GET['action'] == 'animPartenaire')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire();
                    http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaire77News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire77News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaire75News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire75News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaire78News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire78News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                
                else if($_GET['action'] == 'animPartenaire91News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire91News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaire92News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire92News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaire93News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire93News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaire94News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire94News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaire95News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire95News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaireNews')
                {

                    $this->ctrlAnimationPartenaire->animPartenaireNews();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'animPartenaire75')
                {
                    $this->ctrlAnimationPartenaire->animPartenaire75();
                    http_response_code(200);
                }
                else if($_GET['action'] == 'animPartenaire77')
                {
                    $this->ctrlAnimationPartenaire->animPartenaire77();
                    http_response_code(200);
                }
                else if($_GET['action'] == 'animPartenaire78')
                {
                    $this->ctrlAnimationPartenaire->animPartenaire78();
                    http_response_code(200);
                }
                else if($_GET['action'] == 'animPartenaire91')
                {
                    $this->ctrlAnimationPartenaire->animPartenaire91();
                    http_response_code(200);
                }
                else if($_GET['action'] == 'animPartenaire92')
                {
                    $this->ctrlAnimationPartenaire->animPartenaire92();
                    http_response_code(200);
                }
                else if($_GET['action'] == 'animPartenaire93')
                {
                    $this->ctrlAnimationPartenaire->animPartenaire93();
                    http_response_code(200);
                }
                else if($_GET['action'] == 'animPartenaire94')
                {
                    $this->ctrlAnimationPartenaire->animPartenaire94();
                    http_response_code(200);
                }
                else if($_GET['action'] == 'animPartenaire95')
                {
                    $this->ctrlAnimationPartenaire->animPartenaire95();
                    http_response_code(200);
                }
                else if($_GET['action'] == 'animPartenaire92News')
                {

                    $this->ctrlAnimationPartenaire->animPartenaire92News();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'prestataire75')
                {

                    $this->ctrlAnimationPartenaire->prestataire75();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'prestataire77')
                {

                    $this->ctrlAnimationPartenaire->prestataire77();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'prestataire78')
                {

                    $this->ctrlAnimationPartenaire->prestataire78();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
              else if($_GET['action'] == 'prestataire91')
                {

                    $this->ctrlAnimationPartenaire->prestataire91();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'prestataire92')
                {

                    $this->ctrlAnimationPartenaire->prestataire92();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'prestataire93')
                {

                    $this->ctrlAnimationPartenaire->prestataire93();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }
                else if($_GET['action'] == 'prestataire94')
                {

                    $this->ctrlAnimationPartenaire->prestataire94();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }

                else if($_GET['action'] == 'prestataire95')
                {

                    $this->ctrlAnimationPartenaire->prestataire95();
                    // http_response_code(200);
                   // echo json_encode($this->ctrlAnimationPartenaire->animPartenaire());
                   // echo json_encode($animPartenaire);
                }



                // else if($_GET['action']=='animation')
                // {
                //   $this->ctrlAnimationPartenaire->animation();
                // }

                
                // else if($_GET['action']=='rechercherVideo')
                // {
                //     $recherche =intval($this->getParametre($_GET, 'libelle'));
                //     if($recherche != 0)
                //     {
                //         // $this->ctrlFiltreVideo->rechercherVideo($recherche);
                //         $this->ctrlFiltreDocVideo->rechercherVideo($recherche);
                //     }
                //     else{
                //         throw new Exception("libelle de la video non validée");

                //     }
                // }





                // else if($_GET['action']=='rechercheDocument')
                // {
                //     $rechercher = $this->getParametre($_POST, 'rechercherDoc');
                //     $this->ctrlFiltreDocVideo->rechercheDocument($rechercher);
                  
                // }



                else if($_GET['action'] == 'actualite')
                {
                  
                   // $this->ctrlFiltreVideo->actualite();
                    $this->ctrlFiltreDocVideo->actualite();
                }
                else if($_GET['action'] == 'calendrier')
                {
                  
                    // $this->ctrlFiltreVideo->calendrier();
                    $this->ctrlFiltreDocVideo->calendrier();
                }
                else if($_GET['action'] == 'direct')
                {
                  
                    // $this->ctrlFiltreVideo->direct();
                    $this->ctrlFiltreDocVideo->direct();
                }
                else if($_GET['action'] == 'listeDonateur')
                {
                    $this->ctrlInscrit->listeDonateur();
                }
                else if ($_GET['action']== 'ajoutDonateur')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $montant = $this->getParametre($_POST, 'montant');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    $this->ctrlInscrit->ajoutDonateur( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $montant, $anneeNaissance, $civilite);


                }
                else if($_GET['action'] == 'listeBenevole')
                {
                    $this->ctrlInscrit->listeBenevole();
                }
                else if($_GET['action'] == 'listeBenevoleMission')
                {
                    $idMission = intval($this->getParametre($_GET, 'idMission'));
                    if( $idMission !=0)
                    {
                        $this->ctrlInscrit->listeBenevoleMission($idMission);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                // else if($_GET['action']=='BenevoleMissionAjouter')
                // {
                //    // $idPrestataire = intval($this->getParametre($_GET, 'id'));
                //     $idMission = intval($this->getParametre($_GET, 'idMission'));
                //     if( $idMission !=0)
                //     {
                //         $this->ctrlMission->BenevoleMissionAjouter( $idMission);
                //     }
                //     else{
                //         throw new Exception("identifiant du theme non valide");
                //     }
                // }
                else if ($_GET['action']== 'ajoutBenevole')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    $this->ctrlInscrit->ajoutBenevole( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite);
                }
                // else if ($_GET['action']== 'ajoutBenevole')
                // {
                //     // $idInscrit = $this->getParametre($_POST, 'id');
                //     $nom = $this->getParametre($_POST, 'nom');
                //     $prenom = $this->getParametre($_POST, 'prenom');
                //     $mail = $this->getParametre($_POST, 'mail');
                //     $numTelephone = $this->getParametre($_POST, 'numTelephone');
                //     $adresse = $this->getParametre($_POST, 'adresse');
                //     $codePostal = $this->getParametre($_POST, 'codePostal');
                //     $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                //     $civilite = $this->getParametre($_POST, 'civilite');
                //     $this->ctrlInscrit->ajoutBenevole( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite);
                // }
                else if ($_GET['action']== 'ajoutBenevoleMission')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    $commentaire = $this->getParametre($_POST, 'commentaire');
                    $idMission = $this->getParametre($_POST, 'idMission');
                  $this->ctrlInscrit->ajoutBenevoleMission( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite, $commentaire, $idMission);
                }
                else if($_GET['action'] == 'listeNewsletters')
                {
                    $this->ctrlInscrit->listeNewsletters();
                }
                else if ($_GET['action']== 'ajoutNewsletters')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    $this->ctrlInscrit->ajoutNewsletters( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite);
                }
                else if($_GET['action'] == 'listePreventions')
                {
                    $this->ctrlInscrit->listePreventions();
                }
                else if ($_GET['action']== 'ajoutPrevention')
                {
                    $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    $this->ctrlInscrit->ajoutPrevention($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite);
                }
                // else if($_GET['action'] == 'listeDictionnaire')
                // {
                //     $this->ctrlDictionnaire->listeDictionnaire();
                // }
                else if ($_GET['action']== 'dictionnaireLettreA')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreA();
                }
                else if ($_GET['action']== 'dictionnaireLettrA')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettrA();
                }
                // else if ($_GET['action']== 'dictionnaireLettreAA')
                // {
                //   // $lettre = $this->getParametre($_POST, 'lettre');
                //     $this->ctrlDictionnaire->dictionnaireLettreAA();
                // }
                else if ($_GET['action']== 'dictionnaireLettreB')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreB();
                }
                else if ($_GET['action']== 'dictionnaireLettreC')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreC();
                }
                else if ($_GET['action']== 'dictionnaireLettreD')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreD();
                }
                else if ($_GET['action']== 'dictionnaireLettreE')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreE();
                }
                else if ($_GET['action']== 'dictionnaireLettreF')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreF();
                }
                else if ($_GET['action']== 'dictionnaireLettreG')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreG();
                }
                else if ($_GET['action']== 'dictionnaireLettreH')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreH();
                }
                else if ($_GET['action']== 'dictionnaireLettreI')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreI();
                }
                else if ($_GET['action']== 'dictionnaireLettreJ')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreJ();
                }
                else if ($_GET['action']== 'dictionnaireLettreK')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreK();
                }
                else if ($_GET['action']== 'dictionnaireLettreL')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreL();
                }
                else if ($_GET['action']== 'dictionnaireLettreM')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreM();
                }
                else if ($_GET['action']== 'dictionnaireLettreN')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreN();
                }
                else if ($_GET['action']== 'dictionnaireLettreO')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreO();
                }
                else if ($_GET['action']== 'dictionnaireLettreP')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreP();
                }
                else if ($_GET['action']== 'dictionnaireLettreQ')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreQ();
                }
                else if ($_GET['action']== 'dictionnaireLettreR')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreR();
                }
                else if ($_GET['action']== 'dictionnaireLettreS')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreS();
                }
                else if ($_GET['action']== 'dictionnaireLettreT')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreT();
                }
                else if ($_GET['action']== 'dictionnaireLettreU')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreU();
                }
                else if ($_GET['action']== 'dictionnaireLettreV')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreV();
                }
                else if ($_GET['action']== 'dictionnaireLettreW')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreW();
                }
                else if ($_GET['action']== 'dictionnaireLettreX')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreX();
                }
                else if ($_GET['action']== 'dictionnaireLettreY')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreY();
                }
                else if ($_GET['action']== 'dictionnaireLettreZ')
                {
                  // $lettre = $this->getParametre($_POST, 'lettre');
                    $this->ctrlDictionnaire->dictionnaireLettreZ();
                }
                else if($_GET['action'] == 'listeDictionnaire')
                {
                    $this->ctrlDictionnaire->listeDictionnaire();
                }
                else if($_GET['action']=='dictionnaires')
                {
                    $idDictionnaire =intval($this->getParametre($_GET, 'idDictionnaire'));
                    if(!empty($idDictionnaire))
                    {
                        $this->ctrlDictionnaire->dictionnaires($idDictionnaire);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if($_GET['action'] == 'listeThemePrevention')
                {
                    $this->ctrlFiltre->listeThemePrevention();
                }
                else if ($_GET['action']== 'ajouterBenevoleMission')
                {
                    $idMission = $this->getParametre($_POST, 'idMission');
                    $titre = $this->getParametre($_POST, 'titre');
                    $annonce = $this->getParametre($_POST, 'annonce');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                   // $commentaire = $this->getParametre($_POST, 'commentaire');
                    $this->ctrlMission->ajouterBenevoleMission($idMission, $titre, $annonce, $adresse, $codePostal, $ville);
                }
                else if ($_GET['action']== 'BenevoleMssion')
                {

                    $this->ctrlMission->BenevoleMssion();
                }
                else if ($_GET['action']== 'BenevoleMssionAjouter')
                {

                    $this->ctrlMission->BenevoleMssionAjouter();
                }
                else if ($_GET['action']== 'modifierBenevoleMission')
                {
                    $titre = $this->getParametre($_POST, 'titre');
                    $annonce = $this->getParametre($_POST, 'annonce');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $idMission = $this->getParametre($_POST, 'idMission');
                    $this->ctrlMission->modifierBenevoleMission( $titre, $annonce, $adresse, $codePostal, $ville, $idMission);
                }
                else if ($_GET['action']== 'supprimerMission')
                {
                    
                    $idMission = $this->getParametre($_POST, 'idMission');
                    $this->ctrlMission->supprimerMission($idMission);
                }
                else if($_GET['action'] == 'accueil')
                {
                    $this->ctrlAccueil->accueil();
                }
                else if($_GET['action'] == 'rechercherAccueilVideo')
                {
                    $this->ctrlAccueil->rechercherAccueilVideo();
                }
                else if($_GET['action'] == 'presDeChezVous')
                {
                    $this->ctrlAccueil->presDeChezVous();
                }
                else if($_GET['action'] == 'rechercherAccueil')
                {
                    $this->ctrlAccueil->rechercherAccueil();
                }
                else if($_GET['action'] == 'videotheque')
                {
                    $this->ctrlFiltreDocVideo->videotheque();
                }
                else if($_GET['action'] == 'documentheque')
                {
                    $this->ctrlFiltreDocVideo->documentheque();
                }
                else if($_GET['action']=='dictionnaireTest')
                {
                    $this->ctrlAccueil->dictionnaireTest();
                }
                // else if($_GET['action'] == 'videotheque2')
                // {
                //     $this->ctrlFiltreDocVideo->videotheque2();
                // }
                else
                {
                     throw new Exception("action non valide");

                }
             }
             else {
                $this->ctrlAccueil->accueil();

            }
            
                 
        }
        catch(Exception $e)
        {
            $this->erreur($e->getMessage());
        }
    }
     
      private function erreur($msgErreur) {
       // $vue = new Vue("Erreur", "erreur.php");
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

  
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}



?>