


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
<h2 style="margin-left: -90%; color:black;">News</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">


<?php
    foreach($animationPartenaire as $anim):
        ?>
<div class="col">
    <div class="card h-100">
    <img width="250px" height="300px" src="image/<?= $anim['img'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        
        <h5 class="card-title"><?= $anim['nom'] ?></h5>
        <p class="card-text"><?= $anim['descriptif'] ?></p>
      </div>
      <div class="card-footer">
        <a href="<?= $anim['lien']?> " target="_blank" class="btn btn-primary">Voir</a>
      </div>
    </div>
    </div>
    <?php

endforeach;
?>
</div>
