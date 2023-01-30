
<br>
<a href="index.php?action=calendrier"> <input type="submit" value="Valider" name="valider"> </a>

    <h1>La liste des videos de ce theme</h1>
<table class="table align-middle">
    <tbody>
        <tr class="text-align">
    <?php
    foreach($videos as $video):
        ?>
  <td> <h1> <?= $video['libelle'] ?> </h1></td>
    <td><iframe width="500" height="320" src=" <?= $video['lien']?> " > </iframe></td>
    <td> <?= $video['description']?> </td>


</tr>
        <?php endforeach;?>
    </tbody>
</table>
<br>
<br>


