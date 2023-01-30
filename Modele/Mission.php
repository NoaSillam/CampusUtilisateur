<?php
require_once 'Modele/Modele.php';

class Mission extends Modele{
    
    public function getMissions()
    {
        $sql = 'select * from mission';
        $missions = $this->executerRequete($sql);
        return $missions;
    }
    public function getMission($idMission)
    {
        $sql = 'select * from mission where idMission = ? ';
        $mission = $this->executerRequete($sql, array($idMission));
        if($mission->rowCount() > 0)
        {
            return $mission->fetch();
        }
        else{
            throw new Exception("Aucun prestataire de corespond a l'identififiant '$idMission'");
        }
       // return $mission;
    }
    public function ajoutMission($idMission, $titre, $annonce, $adresse, $codePostal, $ville )
    {
        $sql = 'insert into mission (idMission, titre, annonce, adresse, codePostal, ville, commentaire) values (?,?,?,?,?,?);';
        $sql1 = 'insert into inscritStatut (idStatut, idMission) values (1,?)';
        $this->executerRequete($sql, array($idMission, $titre, $annonce, $adresse, $codePostal, $ville));
        $this->executerRequete($sql1, array($idMission));
    }
    public function modifMission( $titre, $annonce, $adresse, $codePostal, $ville, $idMission)
    {
        $sql = 'update mission set titre = ?, annonce = ?, adresse = ?, codePostal = ?, ville = ? where idMission = ? ';
        $this->executerRequete($sql, array($titre, $annonce, $adresse, $codePostal, $ville, $idMission));
    }
    public function deleteMission($idMission)
    {
        $sql = 'delete from mission where idMission = ?';
        $this->executerRequete($sql, array($idMission));
    }
}