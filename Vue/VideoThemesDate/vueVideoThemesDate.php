<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->


<style>
.carousel {
  position: relative;
}
#actualite{
  width: 65%;
  height: 100%;
}
.video-responsive { 
  position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
    border: 2px solid black;
 }
  .video-responsive iframe {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    margin-left: 4%;
    border: 2px solid black;
  } 

.carousel-slide {
  display: flex;
  width: 100%;
  position: relative;
  justify-items: center;
  align-items: center;
}

.next-arrow, .prev-arrow {
  position: absolute;
  margin-top: -45%;
  font-size: 2em;
  cursor: pointer;
}
 
[aria-disabled="true"] {
  opacity: 0.5;
  pointer-events: none;
}

.video-container {
    position: relative;
}
.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
}


 .video{

  display: flex;
  width: 100%;
  height: 100%;
  position: relative;
 }
 .video1{
  
  float: left;
  margin-left: 3%;
  margin-top: 5%;
 }

.next-arrow {
 right: 0;
}
.prev-arrow {
  left: 0;
}
img, iframe {
  position: absolute;
   left: 50%;
   transform: translateX(-50%);
}
h2
{
  text-align: center;
  background-color: white;
  width: 100%;
  height: 80px;
}
.play-button {
    border-radius: 5px;
    width: 50%;
    height: 10%;
    margin-top: 88%;
    text-align: center;
    justify-items: center;
    align-items: center;
    margin-left: 30%;
}
.prev-arrow[style="visibility:hidden"], 
.next-arrow[style="visibility:hidden"] {
  visibility: hidden;
}
.description{
  
  opacity: 0.5;
  pointer-events: none;
  float: right;
  /* margin-left: -10%; */
  width: 500px;
  height: 320px;

}
.dateJour{
  border-radius: 5px;
  height: 20%;
    margin-top: 82%;
    width: 100%;
    margin-left: -90%;
   text-align: center;
    color: black;
} 
.descriptionImg
{
  opacity: 0.5;
  pointer-events: none;
  float: right;
  width: 500px;
  height: 320px;
}
h2{
  color: black; 
  text-align: center;  
  width: 100%; 
  margin-top: -62%;

}
@media screen and (max-width: 600px) {
  h1{
    width: 100%;
  }
  h2{
    margin-top: -325%;
  }
  .play-button {
    border-radius: 5px;
    width: 50%;
    height: 10%;
    margin-top: 248%;
    text-align: center;
    justify-items: center;
    align-items: center;
    /* margin-left: 30%; */
}
.dateJour{
  border-radius: 5px;
  /* height: 20%; */
    margin-top: 328%;
    width: 200%;
    /* margin-left: -90%; */
   text-align: center;
    color: black;
} 


}
/* .titre{
  margin-top: -8%;
  color: black;
} */
/* .dateActualite
{
  margin-top: 21%;
} */
.boutonActualite
{
  margin-top: -1%;
}
/* .imgExemple
{
  width: 30%;
  height: 320px;
} */
/* .titleLibelle {
  white-space: nowrap; 
  overflow: hidden; 
  text-overflow: ellipsis; 
  font-size: 21px; 
  max-width: 650px; 
} */
.btnDelta{
  background-color: rgb(92,188,202);
  border-color: rgb(92,188,202);
}
@media screen and (min-width: 1500px) {
 
 .actualite{
   margin-bottom: 5%;
 }
}
h1{
  text-align: center; margin-top:-1%;
}
@media screen and (max-width: 1250px) {
  .centered-title {
  text-align: center;
}
/* .titleLibelle {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  font-size: 21px;
  max-width: 650px;
  margin: 0 auto; 
  text-align: center; 
} */

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
@media screen and (max-width: 550px) {
  .titleLibelle{
  white-space: nowrap; 
  overflow: hidden; 
  text-overflow: ellipsis; 
  max-width: 275px; 
  word-break: break-word;
  }
}

</style>
<?php
$day = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
$month = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
        <div class="container-fluid my-5">
    <h1 style="font-size: 40px;" >Nos dernières actualités</h1>
    <div class="row" id="news-card-group" style="margin-top:-1%;">
        <div class="col-12 m-auto">
            <div class="owl-carousel owl-theme ">
                <?php  foreach($vids as $vid): ?>
                    <div class="item mb-12">
                    <div class="card-body d-flex flex-column centered-title">
  <h4 class="card-title titleLibelle" style="font-size: 30px;" ><?= $vid['libelle'] ?></h4>
</div>
                        <div class="card border-0 shadow" style="margin-top: 0.4%;">
                       <?php if($vid['type'] == 'video') 
                       {
                        ?>
                           <img class="imgExemple img-fluid" style="border: 2px solid black; position:relative; height: 340px; width:650px; object-fit: scale-down;"  
                           src="<?= $vid['imgApercu'] ?>" />
                        <?php
                      }
                      else
                      {
                        ?>
                         <img class="imgExemple img-fluid" style="border: 2px solid black; position:relative; height: 340px; width:650px; object-fit: scale-down;"  
                         src="<?= $vid['lien'] ?>" />
                        <?php
                      } ?>
                            <div class="card-body d-flex flex-column dateActualite">
                                <h5 class="card-title"><h5><?php echo $day[date("w", strtotime($vid['dateParution']))] . " " .
                                 date("d", strtotime($vid['dateParution'])) . " " . $month[date("n", strtotime($vid['dateParution']))-1] . " " . 
                                 date("Y", strtotime($vid['dateParution'])) . ", à " . date("H:i:s", strtotime($vid['dateParution'])); ?></h5></h5>
                            </div>
                            <div class="card-footer boutonActualite">
                            <a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo'] ?>" target="_blank" class="btn btn-primary btnDelta"  
                            onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;"> Voir la video</a>
                            </div></div> </div>
                <?php endforeach; ?>
            </div></div></div></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
<script>
  $(function() {
    $('#news-card-group .card').matchHeight();
});
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1
        }
    },
    onInitialized: function() {
        // call matchHeight after owlCarousel is initialized
        $('#news-card-group .card').matchHeight();
    },
    onResized: function() {
        // call matchHeight after owlCarousel is resized
        $('#news-card-group .card').matchHeight();
    }
});
</script>










<!-- <div id="actualite">

<h1 style="text-align:center">Nos Dernières Actualités</h1>

    <div class="carousel"> -->

    <?php
    foreach($vids as $vid):
        ?>
        <?php
  if($vid['format']=='pdf')
  {
    ?>
    <!-- <div class="carousel-slide pdf">
     <h2> <?= $vid['libelle'] ?> </h2></br>  <iframe class="description" style="border: 2px solid black;" width="500px"  src="image/<?= $vid['lien']?> " > </iframe>
<div class="dateJour">     <h5><?php echo $day[date("w", strtotime($vid['dateParution']))] . " " . date("d", strtotime($vid['dateParution'])) . " " . $month[date("n", strtotime($vid['dateParution']))-1] . " " . date("Y", strtotime($vid['dateParution'])) . ", à " . date("H:i:s", strtotime($vid['dateParution'])); ?></h5></div>
     <a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo'] ?>" target="_blank" class="video-link">
  <div class="video-overlay">
            <button class="play-button btn btn-primary">Voir le document</button>
        </div>
        </a>
  </div> -->
 
  <!-- <div class="next-arrowDoc" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrowDoc" onclick="prevSlide()">&#10094;</div> -->
  <!-- <div class="next-arrow" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrow" onclick="prevSlide()">&#10094;</div> -->
    <?php
  }
  else if($vid['format'] ==  'youtube')
  {?>
<!-- <div class="carousel-slide video"> -->
<h2 > <?= $vid['libelle'] ?> </h2>
<!-- <div class="video-responsive"> -->
<!-- <iframe width="500px" height="320px" style="border: 2px solid black; margin-left:3%;" frameborder="0" src="<?= $vid['lien'] ?>" title="YouTube video player"  aria-disabled="true" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <!-- </div> -->
<!-- <div class="dateJour">     <h5><?php echo $day[date("w", strtotime($vid['dateParution']))] . " " . date("d", strtotime($vid['dateParution'])) . " " . $month[date("n", strtotime($vid['dateParution']))-1] . " " . date("Y", strtotime($vid['dateParution'])) . ", à " . date("H:i:s", strtotime($vid['dateParution'])); ?></h5></div>
<a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo'] ?>" target="_blank" class="video-link" >
    <div class="video-overlay">
            <button class="play-button btn btn-primary">Voir la video</button>
        </div>
   </a>
</div> -->

    <?php
  }
  else if ($vid['format']=='pptx')
  {
    ?>
    <!-- <div class="carousel-slide image">
    <h2> <?= $vid['libelle'] ?> </h2> </br>  <img width="500px" style="border: 2px solid black; " class="description" height="320" src="image/<?= $vid['lien']?> " >
<div class="date">     <h5><?php echo $day[date("w", strtotime($vid['dateParution']))] . " " . date("d", strtotime($vid['dateParution'])) . " " . $month[date("n", strtotime($vid['dateParution']))-1] . " " . date("Y", strtotime($vid['dateParution'])) . ", à " . date("H:i:s", strtotime($vid['dateParution'])); ?></h5></div>
    <a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo'] ?>" target="_blank" class="video-link">
  <div class="video-overlay">
            <button class="play-button btn btn-primary">Voir le document</button>
        </div>
        </a>
    </div> -->
    <!-- <div class="next-arrowDoc" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrowDoc" onclick="prevSlide()">&#10094;</div> -->
    <?php
  }
  else{
    ?>
    <!-- <div class="carousel-slide image">
     <h2 > <?= $vid['libelle'] ?> </h2> </br>
     <br> <img class="img-fluid descriptionImg" style="border: 2px solid black; " src="image/<?= $vid['lien']?>" >
<div class="dateJour">     <h5><?php echo $day[date("w", strtotime($vid['dateParution']))] . " " . date("d", strtotime($vid['dateParution'])) . " " . $month[date("n", strtotime($vid['dateParution']))-1] . " " . date("Y", strtotime($vid['dateParution'])) . ", à " . date("H:i:s", strtotime($vid['dateParution'])); ?></h5></div>
     <a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo'] ?>" target="_blank" class="video-link">
  <div class="video-overlay">
            <button class="play-button btn btn-primary">Voir le document</button>
        </div>
        </a>
    </div> -->
    <!-- <div class="next-arrowDoc" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrowDoc" onclick="prevSlide()">&#10094;</div> -->
    <?php
  }
  ?>
        <?php endforeach;?>
        <!-- <div class="next-arrow" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrow" onclick="prevSlide()">&#10094;</div>
</div>
</div> -->


<script>

// const carousel = document.querySelector(".carousel");
// const slides = document.querySelectorAll(".carousel-slide");
// const nextArrow = document.querySelector(".next-arrow");
// const prevArrow = document.querySelector(".prev-arrow");

// let slideIndex = 0;

// Cache toutes les diapositives
// slides.forEach((slide) => {
// slide.style.display = "none";
// });

// Affiche la première diapositive
// slides[slideIndex].style.display = "flex";

// // Fonction diapositive suivante
// const nextSlide = () => {
// slides[slideIndex].style.display = "none";
// slideIndex++;
// if (slideIndex === slides.length) {
// slideIndex = 0;
// }
// slides[slideIndex].style.display = "flex";
// if (slideIndex === 0) {
//     prevArrow.style.visibility = "hidden";
// } else {
//     prevArrow.style.visibility = "visible";
// }
// };

// const prevSlide = () => {
// slides[slideIndex].style.display = "none";
// slideIndex--;
// if (slideIndex < 0) {
// slideIndex = slides.length - 1;
// }
// slides[slideIndex].style.display = "flex";
// if (slideIndex === slides.length - 1) {
//     nextArrow.style.visibility = "hidden";
// } else {
//     nextArrow.style.visibility = "visible";
// }
// };

// Ecouteur d'événement de la flèche suivante
// nextArrow.addEventListener("click", nextSlide);
// prevArrow.addEventListener("click", prevSlide);

// Cacher la flèche "précédente" au début
// prevArrow.style.visibility = "hidden";


    // Intervalle pour le changement automatique de diapositive
    // setInterval(nextSlide, 10000);
// });

</script>


<!--
  <div class="carousel-slide video">
  <iframe src="https://www.youtube.com/embed/PveLvHiycOY">
  </div>
  <div class="carousel-slide pdf">
    <iframe src="document1.pdf"></iframe>
  </div>
  <div class="carousel-slide image">
  <img src="image/sante.png">
  </div>
  <div class="carousel-slide video">
    <video src="video2.mp4"></video>
  </div>
  <div class="carousel-slide pdf">
    <iframe src="document2.pdf"></iframe>
  </div>
  <div class="carousel-slide image">
  <img src="image/Logo_delta7.png">
  </div>-->


<!--

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/Logo_delta7.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/sante.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/memoire.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
-->

<!--
<table class="table align-middle">
    <tbody>
        <tr class="text-align">
   

</tr>-->
        
  <!--  </tbody>
</table>-->