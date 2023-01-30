<?php
require_once 'Modele/Modele.php';

class Theme extends Modele
{
    public function getThemes()
    {
        $sql = 'select * from theme where idThemeParent is null ';
        $themes = $this->executerRequete($sql);
        return $themes;
    }
    public function getThm($idTheme)
    {
        $sql = 'select * from theme where idThemeParent is null and id = ?';
        $themes = $this->executerRequete($sql, array($idTheme));
        return $themes;
    }
    public function getSousThm($idThemeParent)
    {
        $sql = 'SELECT `id`, `libelle`, `descriptif`, `img`, `idThemeParent` from theme where `idThemeParent` is not null and `idThemeParent` = ?';
        $sousThemes = $this->executerRequete($sql, array($idThemeParent));
        return $sousThemes;
    }
    public function getSousThms()
    {
        $sql = 'SELECT `id`, `libelle`, `descriptif`, `img`, `idThemeParent` from theme where `idThemeParent` is not null';
        $sousThemes = $this->executerRequete($sql);
        return $sousThemes;
    }
    
    public function getThemesPrevention()
    {
        $sql = 'select * from theme ';
        $themes = $this->executerRequete($sql);
        return $themes;
    }
    


    public function getTheme($idTheme)
    {
        $sql = 'select * from theme where id = ?';
        $theme = $this->executerRequete($sql, array($idTheme));
        if($theme->rowCount() > 0)
        {
            return $theme->fetch();
        }
        else{
            throw new Exception("Aucun theme ne correspond a l'identififiant '$idTheme'");
        }
    }
}