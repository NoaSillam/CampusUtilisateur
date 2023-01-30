<style>
.btnRechercherTheme
{
    width: 30%;
    height: 10%;
    background-color: #ff69b4;
    justify-items: center;
    align-items: center;
   
}
.btnRechercher{
    width: 100%;
    height: 10%;
    left: 50%;
  transform: translateY(-50%);
  justify-items: center;
    align-items: center;
    text-align: center;
}
.rch
{
    justify-items: center;
    align-items: center;
    text-align: center;
    width: 100%;
    left: 50%;
  transform: translateY(-50%);

}
.mlu{
    left: 50%;
    transform: translateY(-50%);
    text-align: center;
    align-items: center;
    justify-items: center;
}
a{
  text-decoration: none;
}
</style>
<?php include_once('header1.php'); ?>
</br>
</br>
</br>
</br>
</br>
</br>

<div class="btnRechercher">
<a href="index.php?action=themeRechercher"><button class="btnRechercherTheme"><h3>Rechercher Par Thème</h3></button></a>
</div>
<h3 style="text-align: center;">OU</h3>

<form action="index.php?action=rechercherDocVideo" method="post">
<div class="d-flex justify-content-center">

    <div class="form-group">
      <input type="text" class="form-control rch" style="text-align: center;" name="libelle" placeholder="Rechercher" required>
    </div>
</br>
    <div class="form-group">
      <input class="btn btn-primary mlu" type="submit" value="Valider">
    </div>


</div>
</form>


