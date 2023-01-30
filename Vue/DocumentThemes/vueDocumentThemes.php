<h1>La liste des documents de ce theme</h1>
<table class="table align-middle">
    <tbody>
    <tr>
            <th>Libelle</th>
            <th>document</th>
            <th>descriptif</th>

        </tr>
        <tr class="text-align">
    <?php
    foreach($documents as $document):
        ?>
  <td> <h1> <?= $document['libelle'] ?> </h1></td>
  <?php
  if($document['format']=='pdf')
  {
    ?>
     <td><iframe width="500" height="320" src="image/<?= $document['lien']?> " > </iframe></td>
    <?php
  }
  else if ($document['format']=='pptx')
  {
    ?>
    <td>  <img width="500" height="320" src="image/<?= $document['lien']?> " > </td>

    <?php
  }
  else{
    ?>
    <td><img class="img-fluid" src="image/<?= $document['lien']?>" ></td>
    <?php
  }

  ?>
    
    <td> <?= $document['description']?> </td>


</tr>
        <?php endforeach;?>
    </tbody>
</table>