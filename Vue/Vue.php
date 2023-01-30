<?php
class Vue
{
    private $fichier;

    private $nom;
    public function __construct($action)
    {
        $this->fichier = "Vue/".$action."/vue".$action.".php";
    }
    public function generer($donnees)
    {
        $logo = $this->genererFichier($this->fichier, $donnees);
        $vue = $this->genererFichier('Vue/template.php', 
        array('nom'=> $this->nom, 'logo'=> $logo));
        echo $vue;
    }

    private function genererFichier($fichier, $donnees)
    {
        if(file_exists($fichier))
        {
            extract($donnees);
            ob_start();
            require $fichier;
            return ob_get_clean();
        }
        else{
            throw new Exception("fichier '$fichier' introuvable");
        }
    }
}


?>