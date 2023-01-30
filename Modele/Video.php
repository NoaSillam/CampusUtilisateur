<?php

require_once 'Modele/Modele.php';
class Video extends Modele

{
    // public function getVideos($idSalarie)
    // {
    //     $sql = 'select * from video inner join prestataire on video.idPrestataire = prestataire.id inner join salarie on video.idSalarie = salarie.id where salarie.id = ?';
    //     $videos = $this->executerRequete($sql, array($idSalarie));
    //     return $videos;
    // }
    public function getVideo($idVideo)
    {
        $sql = 'select * from video where id = ?';
        $video = $this->executerRequete($sql, array($idVideo));
        return $video;
    }
    public function getVideoTheme($idTheme)
    {
        $sql = 'SELECT video.libelle, video.description, video.imgApercu, video.lien FROM `video` inner join themeDoc on video.id = themeDoc.idVideo Inner join theme on themeDoc.idTheme = theme.id WHERE theme.id = ?';
        $videos = $this->executerRequete($sql, array($idTheme));
        return $videos;
    }
    public function getRechercherVideo($recherche)
    {
        $sql = "SELECT libelle from video where libelle like '$recherche%'";
        $recherche = $this->executerRequete($sql, array($recherche));
        return $recherche;
    }
    public function getActualite()
    {
        $sql = "SELECT video.libelle, video.lien, video.dateParution from video group by video.libelle, video.lien, video.dateParution having video.dateParution < CURDATE() order by video.dateParution desc";

        $actualite = $this->executerRequete($sql);
        return $actualite;
    }
    public function getCalendrier()
    {
        $sql = "SELECT theme.libelle, theme.img, theme.descriptif, video.dateParution from theme inner join themeDoc on theme.id = themeDoc.idTheme inner join video on themeDoc.idVideo = video.id group by theme.libelle, theme.img, theme.descriptif, video.dateParution having video.dateParution > CURDATE() order by video.dateParution desc";

        $calendrier = $this->executerRequete($sql);
        return $calendrier;
    }
    public function getDirect()
    {
        $sql = "SELECT video.libelle, video.lien, video.dateParution from video group by video.libelle, video.lien, video.dateParution having video.dateParution = CURDATE() order by video.dateParution desc";

        $direct = $this->executerRequete($sql);
        return $direct;
    }
}