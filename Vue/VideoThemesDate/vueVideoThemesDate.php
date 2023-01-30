<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<style>
.carousel {
  position: relative;
 
  
}
#actualite{
  margin-left: 40%;
  width: 50%;
  height: 100%;

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
  /* top: -350%;
  transform: translateY(350%); */
  
  margin-top: 30%;
  font-size: 2em;
  cursor: pointer;
}
/* .next-arrowDoc, .prev-arrowDoc {
  position: absolute;
  /* top: -150%;
  transform: translateY(150%); */
  /* margin-bottom: -30%;
  font-size: 2em;
  cursor: pointer;
} */ 
[aria-disabled="true"] {
  opacity: 0.5;
  pointer-events: none;
}
/* .video-container {
    position: relative;
}

.link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
} */

.video-container {
    position: relative;
}
.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-color: rgba(0, 0, 0, 0.5); */
    display: flex;
    align-items: center;
    justify-content: center;
}
/* .play-button {
    background-color: #fff;
    color: #000;
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: bold;
    border: none;
    cursor: pointer;
}
 */

 .video{

  display: flex;
  width: 100%;
  height: 100%;
  position: relative;
 }

/* .next-arrowDoc {
  right: 0;

}

.prev-arrowDoc {
  left: 0;

} */

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
  height: 30%;
}
.play-button {
  /* background-color: blue;
    color: white; */
    padding: 10px 20px;
    border-radius: 5px;
    text-align: center;
    position: relative;
    margin-top: 90%;
    /* top: 150%;
    left: 50%;
    transform: translate(-50%, -150%); */
    justify-items: center;
    align-items: center;
 
}
.prev-arrow[style="visibility:hidden"], 
.next-arrow[style="visibility:hidden"] {
  visibility: hidden;
}


</style>



<div id="actualite">


<!--<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
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
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->






   <!-- <div class="carousel-item">
      <img src="image/sante.png" class="d-block w-100" width="80%" height="90%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/memoire.jpeg" class="d-block w-100" width="80%" height="90%" alt="...">
    </div>-->
  <!--</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->




<!--<div class="carousel">-->
  <!-- <div class="carousel-slide">
    <a href="path/to/image1.jpg"><iframe src="https://www.youtube.com/embed/PveLvHiycOY"></a>
  </div> -->
 <!-- <div class="carousel-slide">
    <a href="path/to/image2.jpg"><img src="image/sante.png"></a>
  </div>
  <div class="carousel-slide">
    <a href="path/to/pdf1.pdf"><img src="image/memoire.jpeg"></a>
  </div>
  <div class="carousel-slide">
    <a href="path/to/video1.mp4"><img src="image/Logo_delta7.png"></a>
  </div>
  <div class="carousel-slide">
    <a href="path/to/document1.docx"><img src="image/sante.png"></a>
  </div>
  
  <button class="prev-btn">Previous</button>
  <button class="next-btn">Next</button>
</div>
    -->


    <div class="carousel">

    <?php
    foreach($vids as $vid):
        ?>
        <?php
  if($vid['format']=='pdf')
  {
    ?>
    <div class="carousel-slide pdf">
     <h2> <?= $vid['libelle'] ?> </h2> <a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo']?>"> <iframe class="description" width="500" height="320" src="image/<?= $vid['lien']?> " > </iframe></a>
  </div>
  <!-- <div class="next-arrowDoc" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrowDoc" onclick="prevSlide()">&#10094;</div> -->
  <!-- <div class="next-arrow" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrow" onclick="prevSlide()">&#10094;</div> -->
    <?php
  }
  else if($vid['format'] ==  'youtube')
  {?>
<div class="carousel-slide video">
<h2> <?= $vid['libelle'] ?> </h2>

<a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo'] ?>" target="_blank" class="video-link" >
<div class="video-overlay">
            <button class="play-button btn btn-primary">Voir la video</button>
        </div>
    <iframe width="500px" height="320px" src="<?= $vid['lien'] ?>" class="video1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" aria-disabled="true" allowfullscreen></iframe>
   </a>
</div>

    <?php
  }
  else if ($vid['format']=='pptx')
  {
    ?>
    <div class="carousel-slide image">
    <h2> <?= $vid['libelle'] ?> </h2> <a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo']?>"> <img width="500" height="320" src="image/<?= $vid['lien']?> " ></a>
    </div>
    <!-- <div class="next-arrowDoc" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrowDoc" onclick="prevSlide()">&#10094;</div> -->
    <?php
  }
  else{
    ?>
    <div class="carousel-slide image">
     <h2> <?= $vid['libelle'] ?> </h2> <a href="<?= "index.php?action=videoId&idDocVideo=".$vid['idDocVideo']?>"><img class="img-fluid" src="image/<?= $vid['lien']?>" ></a>
    </div>
    <!-- <div class="next-arrowDoc" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrowDoc" onclick="prevSlide()">&#10094;</div> -->
    <?php
  }
  ?>
  <div class="next-arrow" onclick="nextSlide()">&#10095;</div>
  <div class="prev-arrow" onclick="prevSlide()">&#10094;</div>


        <?php endforeach;?>



  
</div>
</div>


<script>
// document.addEventListener('DOMContentLoaded', function() {
//   const carousel = document.querySelector(".carousel");
// const slides = document.querySelectorAll(".carousel-slide");
// const nextArrow = document.querySelector(".next-arrow");
// const prevArrow = document.querySelector(".prev-arrow");

// let slideIndex = 0;

// // Cache toutes les diapositives
// slides.forEach((slide) => {
//   slide.style.display = "none";
// });

// // Affiche la première diapositive
// slides[slideIndex].style.display = "block";

// // Fonction diapositive suivante
// const nextSlide = () => {
//     slides[slideIndex].style.display = "none";
//     slideIndex++;
//     if (slideIndex === slides.length) {
//         slideIndex = 0;
//     }
//     slides[slideIndex].style.display = "block";
// };

// const prevSlide = () => {
//     slides[slideIndex].style.display = "none";
//     slideIndex--;
//     if (slideIndex < 0) {
//         slideIndex = slides.length - 1;
//     }
//     slides[slideIndex].style.display = "block";
// };

// // Ecouteur d'événement de la flèche suivante
// nextArrow.addEventListener("click", nextSlide);
// prevArrow.addEventListener("click", prevSlide);
const carousel = document.querySelector(".carousel");
const slides = document.querySelectorAll(".carousel-slide");
const nextArrow = document.querySelector(".next-arrow");
const prevArrow = document.querySelector(".prev-arrow");

let slideIndex = 0;

// Cache toutes les diapositives
slides.forEach((slide) => {
slide.style.display = "none";
});

// Affiche la première diapositive
slides[slideIndex].style.display = "flex";

// Fonction diapositive suivante
const nextSlide = () => {
slides[slideIndex].style.display = "none";
slideIndex++;
if (slideIndex === slides.length) {
slideIndex = 0;
}
slides[slideIndex].style.display = "flex";
if (slideIndex === 0) {
    prevArrow.style.visibility = "hidden";
} else {
    prevArrow.style.visibility = "visible";
}
};

const prevSlide = () => {
slides[slideIndex].style.display = "none";
slideIndex--;
if (slideIndex < 0) {
slideIndex = slides.length - 1;
}
slides[slideIndex].style.display = "flex";
if (slideIndex === slides.length - 1) {
    nextArrow.style.visibility = "hidden";
} else {
    nextArrow.style.visibility = "visible";
}
};

// Ecouteur d'événement de la flèche suivante
nextArrow.addEventListener("click", nextSlide);
prevArrow.addEventListener("click", prevSlide);

// Cacher la flèche "précédente" au début
prevArrow.style.visibility = "hidden";


    // Intervalle pour le changement automatique de diapositive
    setInterval(nextSlide, 10000);
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