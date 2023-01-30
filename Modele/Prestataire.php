<?php
require_once 'Modele/Modele.php';

class Prestataire extends Modele

{
    public function getPrestataires()
    {
        $sql = 'select * from prestataire ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }

    public function getPrestataire($idPrestataire)
    {
        $sql = 'select * from prestataire where id = ?';
        $prestataire = $this->executerRequete($sql, array($idPrestataire));
        if($prestataire->rowCount() > 0)
        {
            return $prestataire->fetch();
        }
        else{
            throw new Exception("Aucun prestataire de corespond a l'identififiant '$idPrestataire'");
        }
    }

}