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
    public function getAnimation75News(){
        $sql = 'select * from ActualitePrestataire inner join referent on ActualitePrestataire.idReferent = referent.idReferent inner join prestataire on referent.idPrestataire = prestataire.id where codePostal like "75%" order by dateAjout desc ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function getAnimation77News(){
        $sql = 'select * from ActualitePrestataire inner join referent on ActualitePrestataire.idReferent = referent.idReferent inner join prestataire on referent.idPrestataire = prestataire.id where codePostal like "77%" order by dateAjout desc ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function getAnimation91News(){
        $sql = 'select * from ActualitePrestataire inner join referent on ActualitePrestataire.idReferent = referent.idReferent inner join prestataire on referent.idPrestataire = prestataire.id where codePostal like "91%" order by dateAjout desc  ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function getAnimation78News(){
        $sql = 'select * from ActualitePrestataire inner join referent on ActualitePrestataire.idReferent = referent.idReferent inner join prestataire on referent.idPrestataire = prestataire.id where codePostal like "78%" order by dateAjout desc  ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function getAnimation92News(){
        $sql = 'select * from ActualitePrestataire inner join referent on ActualitePrestataire.idReferent = referent.idReferent inner join prestataire on referent.idPrestataire = prestataire.id where codePostal like "92%" order by dateAjout desc ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function getAnimation93News(){
        $sql = 'select * from ActualitePrestataire inner join referent on ActualitePrestataire.idReferent = referent.idReferent inner join prestataire on referent.idPrestataire = prestataire.id where codePostal like "93%" order by dateAjout desc ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function getAnimation94News(){
        $sql = 'select * from ActualitePrestataire inner join referent on ActualitePrestataire.idReferent = referent.idReferent inner join prestataire on referent.idPrestataire = prestataire.id where codePostal like "94%" order by dateAjout desc ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function getAnimation95News(){
        $sql = 'select * from ActualitePrestataire inner join referent on ActualitePrestataire.idReferent = referent.idReferent inner join prestataire on referent.idPrestataire = prestataire.id where codePostal like "95%" order by dateAjout desc ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function getAnimationNews(){
        $sql = 'select * from animationPartenaire order by dateParution asc  ';
        $animationPartenaire = $this->executerRequete($sql);
        return $animationPartenaire;
    }
    public function apiAnimation77()
    {
        $sql = 'select idAnimPartenaire, img, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "77%"';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
          
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
    public function apiAnimation91()
    {
        $sql = 'select idAnimPartenaire, img,  nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "91%"';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
    public function apiAnimation92()
    {
        $sql = 'select idAnimPartenaire, img, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "92%"';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
    public function apiAnimation78()
    {
        $sql = 'select idAnimPartenaire, img, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "78%"';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
    public function apiAnimation75()
    {
        $sql = 'select idAnimPartenaire, img, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "75%"';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
    public function apiAnimation93()
    {
        $sql = 'select idAnimPartenaire, img, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "93%"';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
    public function apiAnimation94()
    {
        $sql = 'select idAnimPartenaire, img, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "94%"';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
    public function apiAnimation95()
    {
        $sql = 'select idAnimPartenaire, img, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null and codePostalAnim like "95%"';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
    public function apiAnimation()
    {
        $sql = 'select idAnimPartenaire, nom, descriptif, latitude, longitude from animationPartenaire where latitude is not null and longitude is not null';
        $animPartenaire = $this->executerRequete($sql);
        if($animPartenaire)
        {
            return $animPartenaire;
        }
        else
        {
            http_response_code(405);
            echo 'Méthode non autorisée';
        }
    }
}