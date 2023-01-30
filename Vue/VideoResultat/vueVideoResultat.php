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
        <th>video</th>
        <th>description</th>
    
    </tr>

        <tr>
<?php
foreach($docVideoRecherche as $docvidResultat):
?>

   <td><?= $docvidResultat['libelle'] ?> </td>
    <td><?= $docvidResultat['description'] ?></td>
    <td><iframe width="500" height="320" src=" <?= $docvidResultat['lien']?>"></iframe> </td>
    

</tr>
        <?php endforeach;?>
    </tbody>
</table>