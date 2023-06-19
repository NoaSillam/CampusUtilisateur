
<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>

<?php
// include 'header.php';
?>
<h2  style="text-align: center;">Rechercher un libellé</h2>
<br>
<br>





<form action="index.php?action=rechercherDocVideo" method="post">

    <input type="text"  class="form-control" style="text-align: center;" name="libelle" placeholder="Rechercher" required>
   
<br>
<br>

    <input class="btn btn-primary container" style="margin-left: 25%;" type="submit" value="Valider">
</form>


<?php
    include 'footer.php';
    ?>