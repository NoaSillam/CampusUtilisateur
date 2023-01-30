<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");


require_once 'Modele/Modele.php';



class AnimationPartenaire extends Modele
{
    
    public function getAnimationPartenaires($idPrestataire)
    {
        $sql = 'select * from animationPartenaire inner join prestataire on animationPartenaire.idPrestataire = prestataire.id where prestataire.id = ?';
        $animationPartenaires = $this->executerRequete($sql, array($idPrestataire));
        return $animationPartenaires;
    }
    public function getAnimationPartenaire($idAnimationPartenaire){
        $sql = 'select * from animationPartenaire where idAnimPartenaire = ?';
        $animationPartenaire = $this->executerRequete($sql, array($idAnimationPartenaire));
        return $animationPartenaire;
    }
    public function getAnimation(){
        $sql = 'select * from animationPartenaire ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function apiAnimation77()
    {
        $sql = 'select idAnimPartenaire, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "77%"';

        $animPartenaire = $this->executerRequete($sql);

        // if($animPartenaire->rowCount() > 0)
        // {
        //     return $animPartenaire->fetch();
        if($animPartenaire)
        {
            // http_response_code(200);
            // echo json_encode($animPartenaire);
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
         
        // }
        // else{
        //     throw new Exception("Aucun inscrit ne correspond a l'identififiant '$animPartenaire'");
        // }
       
    }
    public function apiAnimation()
    {
        $sql = 'select idAnimPartenaire, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null';

        $animPartenaire = $this->executerRequete($sql);

        // if($animPartenaire->rowCount() > 0)
        // {
        //     return $animPartenaire->fetch();
        if($animPartenaire)
        {
            // http_response_code(200);
            // echo json_encode($animPartenaire);
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
         
        // }
        // else{
        //     throw new Exception("Aucun inscrit ne correspond a l'identififiant '$animPartenaire'");
        // }
       
    }
}