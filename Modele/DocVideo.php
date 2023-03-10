<?php


require_once 'Modele/Modele.php';
class DocVideo extends Modele

{
    public function getDocuments( $idSalarie)
    {
        $sql = 'select * from docVideo where type = "document"';
        $documents = $this->executerRequete($sql , array( $idSalarie));
        return $documents;

    }
    public function getDocument($idDocument)
    {
        $sql = 'select * from docVideo where type = "document" and id= ? ';
        $document = $this->executerRequete($sql, array($idDocument));
        return $document;
    }
    public function getDocumentTheme($idTheme)
    {
        $sql = 'SELECT docVideo.libelle, docVideo.lien, docVideo.description, docVideo.format FROM `docVideo` inner join themeDoc on docVideo.id = themeDoc.idDocVideo Inner join theme on themeDoc.idTheme = theme.id WHERE theme.id = ? and docVideo.type= "document"';
        $documents = $this->executerRequete($sql, array($idTheme));
        return $documents;
    }
    // public function getRechercherDocument($recherche)
    // {
    //     $sql = "SELECT libelle from docVideo where libelle like '$recherche%' and type = 'document'";
    //     $recherche = $this->executerRequete($sql, array($recherche));
    //     return $recherche;
    // }
    public function getRechercheDocument($rechercher)
    {
        $sql = "select libelle from docVideo where type = 'document' and libelle like ?%'";
        $rechercheDoc = $this->executerRequete($sql, array($rechercher));
        return $rechercheDoc;
    }

   
    public function getVideo($idVideo)
    {
        $sql = 'select * from docVideo where type = "video" and idDocVideo = ? ';
        $video = $this->executerRequete($sql, array($idVideo));
        return $video;
    }
    public function getVideoS()
    {
        $sql = 'select * from docVideo where type = "video" group by docVideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.description, docVideo.dateParution having docVideo.dateParution <= NOW() ORDER by docVideo.dateParution DESC;  ';
        $video = $this->executerRequete($sql);
        return $video;
    }
    public function getVid()
    {
        $sql = 'select libelle from docVideo where type = "video"';
        $video = $this->executerRequete($sql);
        return $video;
    }
    public function getVideoTheme($idTheme)
    {
        $sql = 'SELECT docVideo.libelle, docVideo.description, docVideo.imgApercu, docVideo.lien FROM `docVideo` inner join themeDoc on docVideo.id = themeDoc.idDocVideo Inner join theme on themeDoc.idTheme = theme.id WHERE docVideo.type="video" and theme.id = ?';
        $videos = $this->executerRequete($sql, array($idTheme));
        return $videos;
    }
    public function getRechercherVideo($recherche)
    {
        $sql = "SELECT libelle, description, lien from docVideo where type = 'video' and libelle like '".$recherche."' ";
        $videoResultat = $this->executerRequete($sql, array($recherche));
        return $videoResultat;
    }
    public function getRechercheDocVideo($libelle)
    {
        // $sql = "select libelle, description, lien from docVideo where type = 'video' and libelle like '".$libelle."%'";
        // $docVideoRecherche = $this->executerRequete($sql);
        // return $docVideoRecherche;
        $sql = "select libelle, description, lien from docVideo where type = 'video' and libelle like ?";
        $docVideoRecherche = $this->executerRequete($sql, array($libelle.'%'));
        return $docVideoRecherche;
    }
    public function getActualite()
    {
        $sql = "SELECT docVideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.dateParution, docVideo.type, docVideo.format, docVideo.description from docVideo group by docVideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.dateParution , docVideo.type, docVideo.format, docVideo.description having docVideo.dateParution < CURDATE() order by docVideo.dateParution desc limit 5";
        $actualite = $this->executerRequete($sql);
        return $actualite;
    }
    public function getVideotheque()
    {
        $sql = "SELECT docVideo.libelle, docVideo.lien, docVideo.dateParution, docVideo.type, docVideo.format, docVideo.description, docVideo.idDocVideo from docVideo where docVideo.type = 'video' group by docVideo.libelle, docVideo.lien, docVideo.dateParution , docVideo.type, docVideo.format, docVideo.description, docVideo.idDocVideo having docVideo.dateParution < CURDATE() order by docVideo.dateParution";
        $videotheque = $this->executerRequete($sql);
        return $videotheque;
    }
    public function getDocumentheque()
    {
        $sql = "SELECT docVideo.libelle, docVideo.lien, docVideo.dateParution, docVideo.type, docVideo.format, docVideo.description, docVideo.idDocVideo from docVideo where docVideo.type = 'document' group by docVideo.libelle, docVideo.lien, docVideo.dateParution , docVideo.type, docVideo.format, docVideo.description, docVideo.idDocVideo, docVideo.idDocVideo order by docVideo.dateParution";
        $documentheque = $this->executerRequete($sql);
        return $documentheque;
    }

    public function getCalendrier()
    {
        $sql = "SELECT count(themeDoc.idDocVideo), themeDoc.idDocVideo, docVideo.libelle, docVideo.lien , docVideo.description, docVideo.dateParution FROM `themeDoc` inner join docVideo on themeDoc.idDocVideo = docVideo.idDocVideo group by themeDoc.idDocVideo, docVideo.lien , docVideo.description, docVideo.libelle, docVideo.dateParution having docVideo.dateParution >= CURDATE() order by docVideo.dateParution asc limit 5;";

        $calendrier = $this->executerRequete($sql);
        return $calendrier;
    }
    public function getDirect()
    {
        $sql = "SELECT docVideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.description, docVideo.dateParution, timediff(docVideo.dateParution, now()) as crono from docVideo where docVideo.type = 'video' group by docVideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.description, docVideo.dateParution having curdate()<= docVideo.dateParution OR timediff(docVideo.dateParution, now())<= '-01:00:00' ORDER by docVideo.dateParution asc limit 1;";

        $direct = $this->executerRequete($sql);
        return $direct;
    }
    public function getThemeVideoRecherche($idTheme)
    {
        $sql = "SELECT docVideo.libelle, docVideo.lien, docVideo.description, docVideo.lien, docVideo.idDocVideo as docVid, timediff(docVideo.dateParution, now()) as crono FROM `docVideo` inner join themeDoc on docVideo.idDocVideo = themeDoc.idDocVideo inner join theme on themeDoc.idTheme = theme.id where docVideo.type = 'video' and id = ? ";
        $themeRecherche = $this->executerRequete($sql, array($idTheme));
        return $themeRecherche;
    }
    public function getVideoId($idDocVideo)
    {
        $sql = "select docvideo.libelle, docVideo.idDocVideo, docVideo.lien, docVideo.description, docVideo.idDocVideo, docVideo.type, docVideo.format, timediff(docVideo.dateParution, now()) as crono from docVideo where idDocVideo = ?";
        $docVideoId = $this->executerRequete($sql, array($idDocVideo));
        return $docVideoId;
    }
}