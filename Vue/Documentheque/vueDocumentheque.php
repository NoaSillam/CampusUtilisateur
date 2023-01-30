<?php
include 'header1.php';
?>
<!--<br>
<br>
<br>
<br>
<br>
<br>-->

<h2>Documentheque</h2>

<div class="row">
<?php
    foreach($documentheque as $doc):
        ?>

<div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <?php
  if($doc['format']=='pdf')
  {
    ?>
        <td><iframe width="300" height="320" src="image/<?= $doc['lien']?> " > </iframe></td>
    <?php
  }
  else if ($doc['format']=='pptx')
  {
    ?>
    <td>  <img width="300" height="320" src="image/<?= $doc['lien']?> " > </td>

    <?php
  }
  else{
    ?>
    <td><img class="img-fluid" src="image/<?= $doc['lien']?>" ></td>
    <?php
  }

  ?>
  <div class="card-body">
    <h5 class="card-title"> <?= $doc['libelle'] ?> </h5>
    <a href="<?= "index.php?action=videoId&idDocVideo=".$doc['idDocVideo']?>" class="btn btn-primary">Voir le Document</a>
    </div>
</div>
    </div>
    <br>

</div>
<?php

endforeach;
?>
</div>