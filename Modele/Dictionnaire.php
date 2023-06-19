<?php
require_once 'Modele/Modele.php';

class Dictionnaire extends Modele

{
    public function getDic()
    {
        $sql = 'select * from dictionnaire';
        $dictionnaires = $this->executerRequete($sql);
        return $dictionnaires;
    }

    public function getDictionnaire($idDictionnaire)
    {
        $sql = 'select libelle, definition, img,  lettre, idDictionnaire from dictionnaire where idDictionnaire = ?';
        $dictionnaire = $this->executerRequete($sql, array($idDictionnaire));
        return $dictionnaire;
    }


    public function getRechercheDictionnaire($libelle)
    {
        if (strlen($libelle) >= 3) {
            $sql = "SELECT libelle, img, lettre, idDictionnaire, definition FROM dictionnaire WHERE libelle LIKE ?";
            $dicRechercher = $this->executerRequete($sql, array('%'.$libelle.'%'));
            if ($dicRechercher->rowCount() == 0) {
                $sql = "SELECT libelle, img, lettre, idDictionnaire, definition FROM dictionnaire WHERE definition LIKE ?";
                $dicRechercher = $this->executerRequete($sql, array('%'.$libelle.'%'));
                if ($dicRechercher->rowCount() == 0) {
                    return "Il n'y a aucun résultat";
                } else {
                    echo 'Aucune recherche trouvée dans les libellés mais dans la définition';
                }
            }
        } else {
            $dicRechercher = false;
            return 'Pas assez de caractères';
        }
        return $dicRechercher;
    }
    
//   public function getRechercheDictionnaireSelect($libelle)
//     {
//         $sql = "select libelle, img, lettre, idDictionnaire, definition from dictionnaire where libelle like ?";
//         $dicRechercher = $this->executerRequete($sql, array($libelle.'%'));
//         return $dicRechercher;
//     }
    








    public function getDictionnaireLettreA()
    {
        $sql= "select * from dictionnaire where libelle like 'a%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreB()
    {
        $sql= "select * from dictionnaire where libelle like 'b%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreC()
    {
        $sql= "select * from dictionnaire where libelle like 'c%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreD()
    {
        $sql= "select * from dictionnaire where libelle like 'd%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreE()
    {
        $sql= "select * from dictionnaire where libelle like 'e%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreF()
    {
        $sql= "select * from dictionnaire where libelle like 'f%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreG()
    {
        $sql= "select * from dictionnaire where libelle like 'g%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreH()
    {
        $sql= "select * from dictionnaire where libelle like 'h%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreI()
    {
        $sql= "select * from dictionnaire where libelle like 'i%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreJ()
    {
        $sql= "select * from dictionnaire where libelle like 'j%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreK()
    {
        $sql= "select * from dictionnaire where libelle like 'k%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreL()
    {
        $sql= "select * from dictionnaire where libelle like 'l%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreM()
    {
        $sql= "select * from dictionnaire where libelle like 'm%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreN()
    {
        $sql= "select * from dictionnaire where libelle like 'n%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreO()
    {
        $sql= "select * from dictionnaire where libelle like 'o%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreP()
    {
        $sql= "select * from dictionnaire where libelle like 'p%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreQ()
    {
        $sql= "select * from dictionnaire where libelle like 'q%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreR()
    {
        $sql= "select * from dictionnaire where libelle like 'r%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreS()
    {
        $sql= "select * from dictionnaire where libelle like 's%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreT()
    {
        $sql= "select * from dictionnaire where libelle like 't%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreU()
    {
        $sql= "select * from dictionnaire where libelle like 'u%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreV()
    {
        $sql= "select * from dictionnaire where libelle like 'v%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreW()
    {
        $sql= "select * from dictionnaire where libelle like 'w%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreX()
    {
        $sql= "select * from dictionnaire where libelle like 'x%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreY()
    {
        $sql= "select * from dictionnaire where libelle like 'y%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
    public function getDictionnaireLettreZ()
    {
        $sql= "select * from dictionnaire where libelle like 'z%' ";
        $dictionnaire = $this->executerRequete($sql);
        return $dictionnaire;
    }
}