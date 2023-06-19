<style>
  .card-text{
    color: black;
  }
  span{
    color: black;
  }
</style>
<?php 
//include_once('header1.php'); 
include_once('header2.php');?>

<h1 style="text-align: center;">Nos missions</h1>
<br>
<div style="margin: auto; width: 90%;">
<div class="row" style="margin-left:auto; margin-right:auto;">
<?php foreach($missions as $mission):?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="max-height: 450px; overflow-y: scroll;">
        <h4 class="card-title"><?= $mission['titre'] ?></h4>
        <br>
        <div class="card-text" style="color: black;"> <div style="color: black;"><?= htmlspecialchars_decode($mission['annonce']) ?></div> </div>
        <?php
        if($mission['codePostal'] != 0):
        ?>

        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $mission['adresse']?> <?= $mission['codePostal']?> <?= $mission['ville']?> </li>
        </ul>
        <?php endif; ?>
        
        <a href="<?='index.php?action=listeBenevoleMission&idMission='.$mission["idMission"]?>">  <input type="submit" class="btn btn-primary"   onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1; width: 50%;" value="Être bénévole pour cette mission" /></a>
      </div>
    </div>
    <br>
  </div>
 
  <?php endforeach;?>
</div>
</div>
<?php
    include 'footer.php';
    ?>




