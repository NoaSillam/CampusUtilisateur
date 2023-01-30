

    <h1 style="text-align: center;"> Nos Actions Préventions</h1>
<table class="table align-middle">
    <tbody>
        <tr class="text-align">
<?php
foreach($themes as $theme):
?>

    <td> <img  width="300" height="220" src="image/<?= $theme['img']?>" > <?= $theme['libelle'] ?></td>
    <td><?= $theme['descriptif'] ?></td>
    </tr>
     <?php endforeach;?>
     </tbody>
</table>
<br>
<br>
<a href="index.php?action=listePreventions"> <input class="btn btn-primary" style="margin-left: 40%;" type="submit" value="S'inscrire à nos actions prevention"></a>