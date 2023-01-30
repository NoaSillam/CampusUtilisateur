
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
</style>
<?php
include 'header.php';
?>
<h2>Videotheque</h2>

<div class="row">
<?php
    foreach($videotheque as $video):
        ?>

<div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <div class="video-responsive">
      <iframe width="320" height="320" src=" <?= $video['lien']?> " title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
        picture-in-picture" allowfullscreen></iframe> 
        </div>
  <div class="card-body">
    <h5 class="card-title"> <?= $video['libelle'] ?> </h5>
    <a href="<?= "index.php?action=videoId&idDocVideo=".$video['idDocVideo']?>" class="btn btn-primary">Voir la video</a>
    </div>
</div>
    </div>
    <br>

</div>
<?php

endforeach;
?>
</div>