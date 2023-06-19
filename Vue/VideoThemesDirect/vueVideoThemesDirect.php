<style>
.video-responsive {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
}

.video-responsive iframe {
  width: 58%;
  height: 338px;
  position: absolute;
  top: 0;
  left: 0;
  margin-left: 4%;
}

[aria-disabled="true"] {
  opacity: 0.5;
  pointer-events: none;
}

.vid {
  width: 40%;
}

.direct {
  text-align: center;

  margin-top: -5%;
}

.btnLien1 {
  margin-top: -26.3%;
  margin-left: -33%;
  position: relative;
}

.vid1 {
  text-align: center;
  margin-left: -35%;
  margin-top: 32%;
}

.vidTitre {

  color: black;
}

.ytp-large-play-button {
  display: none !important;
}

.titreVideo {
  text-align: center;
  margin-left: -35%;
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

@media screen and (max-width: 1000px) {
  .vid1 {
    margin-top: 350px;
  }
}

@media screen and (min-width: 1500px) {
  .vid1 {
    margin-top: 10px;
  }
}

/* .directImg {
  margin-top: -10%;
} */
.card {
  border: none; /* Supprime les bordures de la carte */
}

h4 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 20px;
    max-width: 70%;
    text-align: center;
    margin: 0 auto;
  }


</style>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
<br>
<div class="total">
<h1 class="direct" style="margin-top: -1%; font-size: 40px;"> Le direct</h1>
<div class="row row-cols-12 g-4 w-100" style="width: 100%;" >
<?php
foreach($directs as $direct):
?>
 <?php
if($direct['crono'] <= "00:00:00")

{?>
<div class="card-body" style="height: 40px; ">
<br>
    <div class="vidTitre" >
        <h4 class="card-title" style="color: black; text-align: center; margin-top: -2.1%; font-size: 30px;"><?=$direct['libelle']?></h4>
    </div>
</div>

<br>
<br>
<br> 

<div class="col-8 m-3 directVideo " style="width: 100%;">
        <div class="card border-0 shadow" >   
    
<div class="video-gauche">
<div class="video-responsive">
<iframe src="<?= $direct['lien'] ?>" style=" border: 2px solid black; position:relative; margin-left:auto; margin-right:auto; width:650px; height: 340px;" 
frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 

</div>
</div>
<br>
<div class="card-footer d-flex justify-content-center align-items-center" style="margin-top: -0.3%;">
  <div class="btnLien">
    <a href="<?= "index.php?action=videoId&idDocVideo=".$direct['idDocVideo'] ?>" target="_blank" class="btn btn-primary btnDelta"  
    onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
      onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
      style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; text-align:center; z-index: 1;">Voir la description</a> 
  </div>
</div>
<?php }
else{
?>
<div class="card-body" style="height: 57px; ">
<br>
    <div class="vidTitre" >
        <h4 class="card-title" style="color: black; text-align: center; margin-top: -3.8%; font-size: 30px;"><?=$direct['libelle']?></h4>
    </div>
</div>
<div class="col-12 m-3 directImg " style="margin-left:auto; margin-right:auto; ">
        <div class="card border-0 shadow">
        

<img style=" border: 2px solid black; position:relative; margin-left:auto; margin-right:auto; width:650px; height: 340px; object-fit: scale-down;" 
class="img-fluid" src="<?= $direct['imgApercu'] ?>"   alt="">

<div class="card-body d-flex flex-column">
<?php
                       date_default_timezone_set('Europe/Paris');
                       $dateParution = new DateTime($direct['dateParution']);
                       $currentDate = new DateTime();
                       $interval = $currentDate->diff($dateParution);
                       $days = $interval->format('%a');
                       $hours = $interval->format('%h');
                       $minutes = $interval->format('%i');
                       if ($interval->invert) {
                           echo "-";
                           $days = abs($days);
                       }
                       ?>
          <h5 style="margin-top: 1%;">Il reste : <?= $days ?> jours, <?= $hours ?> heures et <?= $minutes ?> minutes avant le début de l'émission</h5>
</div>
<div class="card-footer d-flex justify-content-center align-items-center" style="margin-top: -0.9%;">
  <div class="btnLien" >
    <a href="<?= "index.php?action=videoId&idDocVideo=".$direct['idDocVideo'] ?>" target="_blank" class="btn btn-primary btnDelta"  
    onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
      onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
      style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; text-align:center; z-index: 1;">Voir la description</a> 
  </div>
</div>
<?php 
}
?>
<?php
endforeach
?>
</div></div></div></div>


