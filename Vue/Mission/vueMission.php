<?php
include 'header.php';
?>

<h1 style="text-align: center;">Les Missions</h1>
<br>
<div class="row">
<?php foreach($missions as $mission):?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $mission['titre'] ?></h5>
        <p class="card-text"><?= $mission['annonce']?> </p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $mission['adresse']?>, <?= $mission['codePostal']?>, <?= $mission['ville']?> </li>
        </ul>
        <a href="index.php?action=listeBenevoleMission" class="btn btn-primary">Etre benevole pour cette mission</a>
      </div>
    </div>
    <br>
  </div>
 
  <?php endforeach;?>
</div>
