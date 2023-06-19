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
    public function getPrestataires75()
    {
        $sql = 'select * from prestataire where codePostal like "75%" ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }
    public function getPrestataires77()
    {
        $sql = 'select * from prestataire where codePostal like "77%" ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }
    public function getPrestataires78()
    {
        $sql = 'select * from prestataire where codePostal like "78%" ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }

    public function getPrestataires91()
    {
        $sql = 'select * from prestataire where codePostal like "91%" ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }
    public function getPrestataires92()
    {
        $sql = 'select * from prestataire where codePostal like "92%" ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }
    public function getPrestataires93()
    {
        $sql = 'select * from prestataire where codePostal like "93%" ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }
    public function getPrestataires94()
    {
        $sql = 'select * from prestataire where codePostal like "94%" ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }
    public function getPrestataires95()
    {
        $sql = 'select * from prestataire where codePostal like "95%" ';
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