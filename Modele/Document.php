<?php


require_once 'Modele/Modele.php';
class Document extends Modele

{
    public function getDocuments( $idSalarie)
    {
        $sql = 'select * from document inner join prestataire on document.idPrestataire = prestataire.id inner join salarie on document.idSalarie = salarie.id where salarie.id = ?';
        $documents = $this->executerRequete($sql , array( $idSalarie));
        return $documents;

    }
    public function getDocument($idDocument)
    {
        $sql = 'select * from document where id= ?';
        $document = $this->executerRequete($sql, array($idDocument));
        return $document;
    }
    public function getDocumentTheme($idTheme)
    {
        $sql = 'SELECT document.libelle, document.lien, document.description, document.format FROM `document` inner join themeDoc on document.id = themeDoc.idDocument Inner join theme on themeDoc.idTheme = theme.id WHERE theme.id = ?';
        $documents = $this->executerRequete($sql, array($idTheme));
        return $documents;
    }
    public function getRechercherDocument($recherche)
    {
        $sql = "SELECT libelle from document where libelle like '$recherche%'";
        $recherche = $this->executerRequete($sql, array($recherche));
        return $recherche;
    }
    
}