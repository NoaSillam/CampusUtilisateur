
<style>
  [aria-disabled="true"] {
  opacity: 0.5;
  pointer-events: none;
}
.btnDelta {
    background-color: rgb(92, 188, 202);
    border-color: rgb(92, 188, 202);
  }

  .btnDelta:hover {
    background-color: rgb(92, 188, 202);
    border-color: rgb(92, 188, 202);
    color: black;
  }
  img{
    object-fit: scale-down;
    max-width: 100%;
  max-height: 200px; /* Remplacez par la hauteur maximale souhaitée */
  height: auto;
  }
</style>
<?php 
//include_once('header1.php'); 
include_once('header2.php');
?>
<h1 style="text-align: center;">Résultat de la recherche</h1>
<br>
<div style="margin: auto; width: 80%;">
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-left:auto; margin-right:auto;">
<?php 
foreach($themeRecherche as $thmRecherche):
    ?>
           <?php
    if($thmRecherche['crono'] <= "00:00:00")

    {?>
    <div class="col">
    <div class="card h-100">
    <!-- <div class="video-responsive">
        <iframe src="<?= $thmRecherche['lien'] ?>" width="450px" height="250px"  title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
        picture-in-picture" allowfullscreen class="card-img-top"></iframe>
        </div> -->
        <img src="<?= $thmRecherche['imgApercu'] ?>" alt="">
   <div class="card-body">
    <h5 class="card-title"><?= $thmRecherche['libelle'] ?></h5>
    </div>
      <div class="card-footer">
      <a href="<?= "index.php?action=videoId&idDocVideo=".$thmRecherche['docVid']?>" class="btn btn-primary btnDelta" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;">Voir la video</a>
      </div>
    </div>
    </div>
    <?php }
    else{
    ?>
     <div class="col">
    <div class="card h-100">
    <!-- <div class="video-responsive">
    <iframe src="<?= $thmRecherche['lien'] ?>" width="450px" height="250px" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
        picture-in-picture" class="card-img-top" aria-disabled="true" allowfullscreen></iframe>
    </div>  -->
    <img src="<?= $thmRecherche['imgApercu'] ?>" alt="">
  <div class="card-body">
    <h5 class="card-title"> <?= $thmRecherche['libelle'] ?> </h5>
    <h6>Il reste <?= $thmRecherche['crono']?></h6>
    </div>

  <div class="card-footer">
      <a href="<?= "index.php?action=videoId&idDocVideo=".$thmRecherche['docVid']?>" class="btn btn-primary btnDelta" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;">Voir la description</a>
      </div>
    </div>
</div>
<?php 
 }
 ?>
  <?php
endforeach;
?>
</div>
</div>
<br>
<br>
<br>
<br>
<?php
    include 'footer.php';
    ?>