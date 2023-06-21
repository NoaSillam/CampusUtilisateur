<?php

require_once 'Modele/Modele.php';


class Inscrit extends Modele
{

    
    // function __construct()
    // {
    //     $executerRequete = $this->executerRequete($sql);
    // }

    public function getInscrits()
    {
        $sql = 'select * from inscrit ';
        $inscrits = $this->executerRequete($sql);
        return $inscrits;
    }
    public function getInscritDonateurs()
    {
        $sql = 'SELECT inscrit.civilite, inscrit.nom, inscrit.prenom, inscrit.montant, inscrit.anneeNaissance from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 2';
        $donateurs = $this->executerRequete($sql);
        return $donateurs;
    }
    public function getInscritBenevoles()
    {
        $sql = 'SELECT inscrit.civilite, inscrit.nom, inscrit.prenom, inscrit.mail, inscrit.anneeNaissance from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 1';
        $benevoles = $this->executerRequete($sql);
        return $benevoles;
    }
    public function getInscritBenevolesMission($idMission)
    {
        $sql = 'SELECT * FROM `mission` WHERE idMission = ?';
        $benevoles = $this->executerRequete($sql, array($idMission));
        return $benevoles;
    }
    
    public function getInscritNewsletters()
    {
        $sql = 'SELECT inscrit.civilite, inscrit.nom, inscrit.prenom, inscrit.mail, inscrit.anneeNaissance from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 3';
        $newsletters = $this->executerRequete($sql);
        return $newsletters;
    }
    public function getInscritPreventions()
    {
        $sql = 'SELECT inscrit.civilite, inscrit.nom, inscrit.prenom, inscrit.mail, inscrit.anneeNaissance from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 4';
        $preventions = $this->executerRequete($sql);
        return $preventions;
    }

    public function getInscrit($idInscrit)
    {
        $sql = 'select * from inscrit where id = ?';
        $inscrit = $this->executerRequete($sql, array($idInscrit));
        if($inscrit->rowCount() > 0)
        {
            return $inscrit->fetch();
        }
        else{
            throw new Exception("Aucun inscrit ne correspond a l'identififiant '$idInscrit'");
        }
    }
    public function ajouterInscritBenevole( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, ville, anneeNaissance, civilite, dateInscription) values(?,?,?,?,?,?,?,?,?,?, CURRENT_DATE())';
        $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 1)';
        $nbInscrits = $this->getNombreInscrits();
        $idInscrit = $nbInscrits + 1 ;
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite));
        $this->executerRequete($sql1, array($idInscrit));
    }
//     public function ajouterInscritBenevole($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite)
// {
//     $sql = 'insert into inscrit(nom, prenom, mail, numTelephone, adresse, codePostal, anneeNaissance, civilite, dateInscription) values(?,?,?,?,?,?,?,?, CURRENT_DATE())';
//     $this->executerRequete($sql, array($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite));
//     $idInscrit = $this->getBdd()->lastInsertId();
//     $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 1)';
//     $this->executerRequete($sql1, array($idInscrit));
// }
public function getNombreInscrits() {
    $sql = 'select max(id) as nbInscrits from inscrit ';
    $resultat = $this->executerRequete($sql);
     $nbInscrits = $resultat->fetch(PDO::FETCH_ASSOC)['nbInscrits'];
     return $nbInscrits;
  }

    public function ajouterInscritBenevoleMission($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite,  $commentaire, $idMission)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, ville, anneeNaissance, civilite, commentaire, dateInscription) values(?,?,?,?,?,?,?,?,?,? ,?, CURRENT_DATE())';
        $sql1 = 'insert into inscritStatut(idStatut, idInscrit, idMission) values( 1, ?, ?)';
        $nbInscrits = $this->getNombreInscrits();
        $idInscrit = $nbInscrits + 1;
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite, $commentaire));
        $this->executerRequete($sql1, array($idInscrit, $idMission));
    }
    public function ajouterInscritDonateur( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $montant, $anneeNaissance, $civilite)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, ville, montant,anneeNaissance,civilite,dateInscription) values(?,?,?,?,?,?,?,?,?,?,?, CURRENT_DATE())';
       $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 2)';
       $nbInscrits = $this->getNombreInscrits();
        $idInscrit = $nbInscrits + 1;
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $montant, $anneeNaissance, $civilite));
        $this->executerRequete($sql1, array($idInscrit));
    }
    
    public function ajouterInscritNewsletter( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, ville, anneeNaissance, civilite, dateInscription) values(?,?,?,?,?,?,?,?,?,?, CURRENT_DATE())';
        $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 3)';
        $nbInscrits = $this->getNombreInscrits();
        $idInscrit = $nbInscrits + 1;
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function ajouterInscritPrevention($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, anneeNaissance, civilite, dateInscription) values(?,?,?,?,?,?,?,?,?, CURRENT_DATE())';
        $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 4)';
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function modifierInscrit($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $idSalarie)
    {
        $sql = 'update salarie set nom = ?, prenom = ?, mail = ?, numTelephone = ?, adresse = ?, codePostal = ? where id = ?';
        $this->executerRequete($sql, array($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $idSalarie));
    }
    public function supprimerInscrit($idInscrit)
    {
        $sql = 'delete from inscrit where id = ?';
        $this->executerRequete($sql, array($idInscrit));
    }

}