<style>
   .video-responsive { 
    overflow:hidden; 
    padding-bottom:56.25%; 
    position:relative; 
    height:0;
  }
  .video-responsive iframe {
    left:0; 
    top:0; 
    height:100%;
    width:100%;
    position:absolute;
  }
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
 [aria-disabled="true"] {
  opacity: 0.5;
  pointer-events: none;
}
</style>
<?php 
//include_once('header1.php'); 
include_once('header2.php');
?>
<h1 style="text-align:center;">Liste des résultats de la recherche</h1>
<br>
<div style="margin: auto; width: 80%;">
<div class="row row-cols-1 row-cols-md-3 g-4">


<?php
foreach($docVideoRecherche as $docvidResultat):
?>

    <?php
    if($docvidResultat['crono'] <= "00:00:00")

    {?>
    <div class="col">
    <div class="card h-100">
      <?php 
      if($docvidResultat['type']=='video')
      {
        ?>
          <div class="video-responsive">
    <iframe width="320" height="320" src="<?= $docvidResultat['lien']?>" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
        picture-in-picture" class="card-img-top"  allowfullscreen></iframe> 
        </div>
        <?php 
      }
      else{
        ?>
        <img width="385" height="220" src="image/<?= $docvidResultat['lien'] ?>" class="img-top" alt="">
        <?php
      }
      ?>
  
   
      <div class="card-body">
        
      <h5 class="card-title"><?= $docvidResultat['libelle'] ?></h5>
      </div>
      <div class="card-footer">
      <a href="<?= "index.php?action=videoId&idDocVideo=".$docvidResultat['idDocVideo']?>" class="btn btn-primary">Voir la video</a>
      </div>
    </div>
    </div>
    <?php }
    else{
    ?>
    <div class="col">
    <div class="card h-100">
    <div class="video-responsive">
      <iframe width="320" height="320" src="<?= $docvidResultat['lien']?>" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
        picture-in-picture" class="card-img-top" aria-disabled="true" allowfullscreen></iframe> 
        </div>
      
      <div class="card-body">
        
      <h5 class="card-title"><?= $docvidResultat['libelle'] ?></h5>
      </div>
      <div class="card-footer">
      <a href="<?= "index.php?action=videoId&idDocVideo=".$docvidResultat['idDocVideo']?>" class="btn btn-primary">Voir la video</a>
      </div>
    </div>
    </div>
    
    <?php
    }

endforeach;
?>
</div>
</div>