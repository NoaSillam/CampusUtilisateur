<style>
.btnRechercherTheme
{
    width: 50%;
    height: 40%;
    background-color: #b72a70;
    justify-items: center;
    align-items: center;
    border: 1px solid #b72a70;
   
}
.btnRechercherTheme:hover
{
    width: 50%;
    height: 40%;
    background-color: #b72a70;
    justify-items: center;
    align-items: center;
   
}
.btnRechercher{
    width: 30%;
    height: 50%;
    background-color: #b72a70;
    border: 1px solid black;
    /* margin-left: 70%; */
    /* margin-top: 5.4%; */
    justify-items: center;
    align-items: center;
    text-align: center;
    float: right;

}
.rch
{
    justify-items: center;
    align-items: center;
    text-align: center;
    width: 100%;
    /* left: 50%;
  transform: translateY(-50%); */

}
.mlu{
    /* left: 50%;
    transform: translateY(-50%); */
    text-align: center;
    align-items: center;
    justify-items: center;
}
a{
  text-decoration: none;
}
.btnVideo{
    width: 30%;
    height: 120%;
    background-color: #b72a70;
    border: 1px solid black;
    
}
.btnVdeo2{
    width: 50%;
    height: 120%;
    background-color: #b72a70;
    border: 1px solid #b72a70;
}
.btnVdeo2:hover{
    width: 50%;
    height: 120%;
    background-color: #b72a70;
    border: 1px solid #b72a70;
}
.btnDocument{
    width: 30%;
    height: 50%;
    background-color: #b72a70;
    border: 1px solid black;
    margin-left: 35%;
    margin-top: -5.4%;
    justify-items: center;
    align-items: center;
    text-align: center;
    
}
.btnDocument2{
    width: 50%;
    height: 50;
    background-color: #b72a70;
    border: 1px solid #b72a70;
}
.btnDocument2:hover{
    width: 50%;
    height: 50;
    background-color: #b72a70;
    border: 1px solid #b72a70;
}
</style>
<?php 
//include_once('header1.php'); 
include_once('header2.php');
?>
</br>
</br>
</br>
</br>
</br>
</br>

<div class="btnRechercher">
<a href="index.php?action=themeRechercher"><button class="btnRechercherTheme"><h3>Rechercher Par Thème</h3></button></a>
</div>

<div class="btnVideo">
<a href="index.php?action=videotheque"><button class="btnVdeo2"><h3>Voir toutes nos videos</h3></button></a>
</div>

<div class="btnDocument">
<a href="index.php?action=documentheque"><button class="btnDocument2"><h3>Voir tous nos documents</h3></button></a>
</div>
<!-- <h3 style="text-align: center;">OU</h3> -->

<form action="index.php?action=rechercherDocVideo" method="post">
<div class="d-flex justify-content-center">

    <div class="form-group">
      <input type="text" class="form-control rch" style="text-align: center;" name="libelle" placeholder="Rechercher" required>
    </div>
</br>
    <div class="form-group">
      <input class="btn btn-primary mlu" type="submit" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;" value="Valider" value="Valider">
    </div>


</div>
</form>