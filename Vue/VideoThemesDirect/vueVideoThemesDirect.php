<style>
    [aria-disabled="true"] {
  opacity: 0.5;
  pointer-events: none;
}
.video-responsive { 
overflow:hidden; 
padding-bottom:56.25%; 
position:relative; 
height:0;
}

.video-responsive iframe {
left:0; 
top:0; 
height:50%;
width:40%;
position:absolute;
}
.vid
{
 
  margin-top: -25%;
  height:50%;
width:40%;
}
.bouton
{
  margin-top: -5%;
  margin-left: -78%;
  width: 20%;
}
.titreVideo
{
  margin-top: -30%;
  margin-left: -3%;
  width: 40%;
}
.direct{
  margin-left: -85%;
}
</style>



<h1 class="direct">Le direct</h1>


<?php
    foreach($directs as $direct):
        ?>
         <?php
    if($direct['crono'] <= "00:00:00")

    {?>
   
<!--     
      <div class="video-responsive">
      <iframe width="500px" height="320px" src=" <?= $direct['lien']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
      </div>

    <h5 class="titreVideo"> <?= $direct['libelle'] ?> </h5>
    <a href="<?= "index.php?action=videoId&idDocVideo=".$direct['idDocVideo']?>" class="btn btn-primary bouton">Voir la video</a>
    -->



    <div >
  <div class="video-responsive">
    <iframe width="500px" height="320px" src=" <?= $direct['lien']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
  </div>
  <br>
  <br>

  <div>
    <h4 class="titreVideo" > <?= $direct['libelle'] ?> </h4>
    <br>
    <br>
    <a href="<?= "index.php?action=videoId&idDocVideo=".$direct['idDocVideo']?>" class="btn btn-primary bouton">Voir la video</a>
  </div>
</div>

   
    <?php }
    else{
    ?>
   
      <div class="video-responsive">
      <iframe width="500px" height="320px" src=" <?= $direct['lien']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" aria-disabled="true" allowfullscreen></iframe> 
      </div>
<div class="vid">
    <h5 > <?= $direct['libelle'] ?> </h5>
    <h6>Il reste <?= $direct['crono']?></h6>
    <a href="<?= "index.php?action=videoId&idDocVideo=".$direct['idDocVideo']?>" class="btn btn-primary">Voir la description</a>
 
    </div>

<?php 
 }
 ?>








    <?php

endforeach
?>

 <!-- <style>

/*       
:host {
  display: block;
}
.ratio {
  background-color:black;
  position: relative;
}
.ratio-svg {
  width: 100%;
  height: auto;
  display: block;
  max-height: var(--max-height, 100vh);
}
video ~ .ratio-svg,
iframe ~ .ratio-svg {
  max-height: 100%;
}
.poster {
  border: none;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.poster:hover .play {
  transform: scale(1.1)
}
.poster:hover::before {
  opacity: .8;
}
.title {
  margin-top: 4px;
  color: #FFF;
  font-size: 22px;
  position: relative;
  text-align: center;
  z-index: 3;
  transition: .3s;
  line-height: 1.2em;
}
.title em {
  display:block;
  opacity: 0.7;
  font-size: 0.8em;
  font-style: normal;
}
.play {
  position: relative;
  width: 48px;
  height: 48px;
  z-index: 3;
  fill: #FFF;
  margin-bottom: 8px;
  filter:  drop-shadow(0 1px 20px #121C4280);
  transition: .3s;
}
.poster::before {
  content:'';
  background: linear-gradient(to top, var(--color) 0%, var(--color-transparent) 100%);
  z-index: 2;
}
.poster,
iframe,
video,
.poster::before,
img {
  position: absolute;
  width: 25%;
   height: 25%;
  transition: opacity .5s;
}
.poster img {
  object-fit: cover;
}
.poster[aria-hidden] {
  pointer-events: none;
  opacity: 0;
}</style> */-->
    
        <!-- <progress-tracker contentId="1365" data-history="1365" duration="1804">
        <youtube-player
          video="FWoIR2BrBJo"
          poster="image/definition-du-numerique.jpeg"
          button="image/lecture.png"
          duration="30 min"
          class="shadow">
          <div class="ratio">
            <div class="player"></div>
            <button class="poster">
            <img src="image/definition-du-numerique.jpeg" width="500" height="250"/>
            <svg class="play">
             <path d="M 23 0 C 10.32 0 0 10.32 0 23 s 10.32 23 23 23 s 23 -10.32 23 -23 S 35.68 0 23 0 Z m 8.55 23.83 l -12 8 A 1 1 0 0 1 18 31 V 15 a 1 1 0 0 1 1.55 -0.83 l 12 8 a 1 1 0 0 1 0 1.66 Z"> </path>  </svg>
            
            </button>
          </div>
          <a href="  //$direct['lien']" target="_blank" rel="noopener" class="course__placeholder">
            <span>Voir la vidéo</span>
            <img src="image/definition-du-numerique.jpeg" width="500" height="250"/>
          </a>
        </youtube-player>
      </progress-tracker>
      </td> -->
      



 


