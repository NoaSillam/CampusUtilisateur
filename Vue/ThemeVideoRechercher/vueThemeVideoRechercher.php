<div class="row">
<?php 
foreach($themeRecherche as $thmRecherche):
    ?>
           <?php
    if($thmRecherche['crono'] <= "00:00:00")

    {?>
   
    <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <iframe src="<?= $thmRecherche['lien'] ?>" width="450px" height="250px" frameborder="0"></iframe>
  <div class="card-body">
    <h5 class="card-title"><?= $thmRecherche['libelle'] ?></h5>
    <a href="<?= "index.php?action=videoId&idDocVideo=".$thmRecherche['docVid']?>" class="btn btn-primary">Voir la video</a>
    </div>
</div>
    </div>
   
    <br>

    </div>

    <?php }
    else{
    ?>
    <div class="row">
      <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <img src="image/definition-du-numerique.jpeg" width="400px" height="230px" alt="">
  <div class="card-body">
    <h5 class="card-title"> <?= $thmRecherche['libelle'] ?> </h5>
    <h6>Il reste <?= $thmRecherche['crono']?></h6>
    <a href="<?= "index.php?action=videoId&idDocVideo=".$thmRecherche['docVid']?>" class="btn btn-primary">Voir la description</a>
    </div>
</div>
    </div>
    <br>
    </div>


<?php 
 }
 ?>




    <?php

endforeach;
?>