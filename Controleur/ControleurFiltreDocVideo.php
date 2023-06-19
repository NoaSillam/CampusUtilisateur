<?php

// require_once 'Modele/Theme.php';
// require_once 'Modele/DocVideo.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurFiltreDocVideo
{
    private $theme;
    private $docVideo;
    
    public function __construct()
    {
        $this->theme = new Theme();
        $this->docVideo = new DocVideo();
    }
    public function Documents($idTheme)
    {
        $theme = $this->theme->getTheme($idTheme);
        $documents = $this->docVideo->getDocumentTheme($idTheme);
        $vue = new Vue("DocumentThemes");
        $vue->generer(array('theme'=>$theme, 'documents'=>$documents));
    }
    // public function rechercherDocument($recherche)
    // {
    //     $document = $this->docVideo->getRechercherDocument($recherche);
    //     $vue = new Vue("RechercherDocument");
    //     $vue->generer(array('document'=>$document));
    // }


    
    // public function rechercheDocument($rechercher)
    // {
    //  $this->docVideo->getRechercheDocument($rechercher);   
    // }
    public function videos($idTheme)
    {
        $theme = $this->theme->getTheme($idTheme);
        $videos = $this->docVideo->getVideoTheme($idTheme);
        $vue = new Vue("VideoThemes");
        $vue->generer(array('theme'=>$theme, 'videos'=>$videos));
    }
    

    public function rechercher()
    {
        $video = $this->docVideo->getVid();
        $vue = new Vue("VideoThemesRechercher");
        $vue->generer(array('video'=>$video));
    }
    public function rechercherVideo($recherche)
    {
        $videoResultat = $this->docVideo->getRechercherVideo($recherche);
        $vue = new Vue("VideoResultat");
        $vue->generer(array('videoResultat'=>$videoResultat));
       // var_dump($video);
    }
    public function rechercherDocVideo($libelle)
    {
        $docVideoRecherche = $this->docVideo->getRechercheDocVideo($libelle);
        $vue = new Vue("VideoResultat");
        $vue->generer(array('docVideoRecherche'=>$docVideoRecherche));
    
    }
    public function rechercherDocVideoSelect($libelle)
    {
        $resultats = $this->docVideo->getRechercheDocVideoSelect($libelle);
        $vue = new Vue("VideoResultatSelect");
        $vue->generer(array('resultats'=>$resultats));
    }
    public function calendrier()
    {
        $cals = $this->docVideo->getCalendrier();
        $vue = new Vue("VideoThemesCalendrier");
        $vue->generer(array('cals'=>$cals));
    }
    public function actualite()
    {
        $vids = $this->docVideo->getActualite();
        $vue = new Vue("VideoThemesDate");
        $vue->generer(array('vids'=>$vids));
    }
    // public function videotheque2()
    // {
    //     $videosPerPage = 10; // Nombre de vidéos à afficher par page
    //     $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1; // Page courante
        
    //     // Calcul des limites pour la requête SQL
    //     $limit = $videosPerPage;
    //     $offset = ($currentPage - 1) * $videosPerPage;
        
    //     // Récupération de la liste des vidéos
    //     $videotheque = $this->docVideo->getVideotheque1($limit, $offset);
        
    //     // Pagination
    //     $totalPages = ceil($videotheque[1] / $videosPerPage);
    //     $start = ($currentPage - 1) * $videosPerPage;
    //     $end = $start + $videosPerPage;
    //     $videotheque = array_slice($videotheque[0], $start, $videosPerPage);
    
    //     // Affichage de la vue
    //     $vue = new Vue("Videotheque2");
    //     $vue->generer(array(
    //         'videotheque' => $videotheque,
    //         'currentPage' => $currentPage,
    //         'totalPages' => $totalPages
    //     ));
    // }
    public function videotheque()
    {
        $videotheque = $this->docVideo->getVideotheque();
        $vue = new Vue("Videotheque");
        $vue->generer(array('videotheque'=>$videotheque));
    }
    public function documentheque()
    {
        $documentheque = $this->docVideo->getDocumentheque();
        $vue = new Vue("Documentheque");
        $vue->generer(array('documentheque'=>$documentheque));
    }
    public function direct()
    {
        $directs = $this->docVideo->getDirect();
        $vue = new Vue("VideoThemesDirect");
        $vue->generer(array('directs'=>$directs));
    }
    // public function rechercherThemeVideo($idTheme)
    // {
    //     $themeRecherche = $this->docVideo->getThemeVideoRecherche($idTheme);
    //     $vue = new Vue("ThemeVideoRechercher");
    //     $vue->generer(array('themeRecherche'=>$themeRecherche));
    // }
    public function rechercherThemeVideo($idTheme)
{
    $themeRecherche = $this->docVideo->getThemeVideoRecherche($idTheme);
    $vue = new Vue("ThemeVideoRechercher");
    $vue->generer(array('themeRecherche' => $themeRecherche));
}
    public function videoId($idDocVideo)
    {
        $docVideoId = $this->docVideo->getVideoId($idDocVideo);
        $vue = new Vue("ThemeVideoResultat");
        $vue->generer(array('docVideoId'=>$docVideoId));
    }

    



}