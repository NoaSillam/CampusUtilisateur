<?php


// require_once 'Modele/Theme.php';
// // require_once 'Modele/Video.php';
// // require_once 'Modele/Document.php';
// require_once 'Modele/DocVideo.php';

// require_once 'Vue/Vue.php';

require_once 'autoload.php';
class ControleurFiltre
{
    
    private $theme;
    private $docVideo;
    // private $video;
    // private $document;

    public function __construct()
    {
        $this->theme = new Theme();
        $this->docVideo = new DocVideo();
        // $this->video = new Video();
        // $this->document = new Document();
    }
    public function listeTheme()
    {
        $themes = $this->theme->getThemes();
        $vue = new Vue("Filtre");
        $vue->generer(array('themes'=>$themes));
    }
    public function listeThemePrevention()
    {
        $themes = $this->theme->getThemesPrevention();
        $vue = new Vue("FiltrePrevention");
        $vue->generer(array('themes'=>$themes));
    }
    public function themeRechercher()
    {
        $themes = $this->theme->getThemes();
        $vue = new Vue("FiltreRechercher");
        $vue->generer(array('themes'=>$themes));
    }
    public function videos($idTheme)
    {
        $theme = $this->theme->getTheme($idTheme);
        $videos = $this->docVideo->getVideoTheme($idTheme);
        $vue = new Vue("VideoThemes");
        $vue->generer(array('theme'=>$theme, 'videos'=>$videos));
    }
    public function documents($idTheme)
    {
        $theme = $this->theme->getTheme($idTheme);
        $documents = $this->docVideo->getDocumentTheme($idTheme);
        $vue = new Vue("DocumentThemes");
        $vue->generer(array('theme'=>$theme, 'documents'=>$documents));
    }
    public function sousThm($idThemeParent)
    {
        $sousThemes = $this->theme->getSousThm($idThemeParent);
        $vue = new Vue("RechercherSousTheme");
        $vue->generer(array('sousThemes'=>$sousThemes));
    }


}