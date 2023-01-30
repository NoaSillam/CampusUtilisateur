<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>

<h1>Liste des Resultats de la recherche</h1>
<table class="table">
    <tbody>
    <tr>
        <th>Libelle</th>
        <th>Image</th>
        <th>definition</th>
    
    </tr>

        <tr>
<?php
foreach($dicRechercher as $dic):
?>

   <td><?= $dic['libelle'] ?> </td>
   <td><img src="image/<?= $dic['img'] ?>" alt=""> </td>
    <td><?= $dic['definition'] ?></td>
   
    

</tr>
        <?php endforeach;?>
    </tbody>
</table>