<style>
/* .btnRechercherTheme
{
    width: 30%;
    height: 10%;
    background-color: #b72a70;
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
} */
a{
  text-decoration: none;
}
</style>
<?php 
//include_once('header1.php'); 
include_once('header2.php');
?>
<h1 style="text-align: center;">Rechercher par mot clé une video ou un document</h1>

<!-- <div class="btnRechercher">
<a href="index.php?action=themeRechercher"><button class="btnRechercherTheme"><h3>Rechercher Par Thème</h3></button></a>
</div>
<h3 style="text-align: center;">OU</h3> -->

<form action="index.php?action=rechercherDocVideo" method="post">
    <div class="d-flex justify-content-center">
        <div class="form-group">
            <input type="text" class="form-control rch" style="text-align: center;" name="libelle" id="libelle" placeholder="Rechercher" required>
        </div>
        </br>
        <div class="form-group">
            <input class="btn btn-primary mlu" style="margin-left: 7%; width:100%;" type="submit" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;" value="Valider">
        </div>
    </div>
    <div id="resultats-recherche"></div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    include 'footer.php';
    ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Lorsqu'une touche est pressée dans la barre de recherche
    $("#libelle").on('keyup keydown', function() {
        // Récupérer le texte de la barre de recherche
        var libelle = $(this).val();
        // Si le texte n'est pas vide
        if (libelle != '') {
            // Effectuer une recherche avec le texte
            $.ajax({
                type: 'POST',
                url: 'index.php?action=rechercherDocVideoSelect',
                data: {libelle: libelle},
                success: function(response) {
                    // Mettre à jour les résultats de recherche dans le div correspondant
                    $('#resultats-recherche').html(response);
                }
            });
        } else {
            // Si le texte est vide, effacer les résultats de recherche
            $('#resultats-recherche').html('');
        }
    });
});
</script>



