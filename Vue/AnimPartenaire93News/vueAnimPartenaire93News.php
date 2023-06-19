


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    font-family: 'Poppins', sans-serif;
}
img {
  height: 300px;
}
body {
    background: hsl(0, 0, 94%);
}
.card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}
.card-body {
  flex-grow: 1;
}
.null{
    height: 40px;
}
.description-complete {
    display: none;
  }
.image-container {
  display: inline-block;
  padding: 10px;
  max-width: 100%;
}

.image-container img {
  max-width: 100%;
  max-height: 200px; /* Remplacez par la hauteur maximale souhaitée */
  height: auto;
  object-fit: scale-down; /* fond blanc qui permet de ne pas deformer une image */
}

.image-container.small-image {
  background-color: white;
}
h5 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 20px;
    max-width: 400px;
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
        <div class="container-fluid my-5">
    <h1 class="text-center fw-bold display-1 mb-8" style="color: #4fbcca; font-size:70px;">Actualités</h1>
    <div class="row " id="news-card-group">
        <div class="col-12 m-auto">
            <div class="owl-carousel owl-theme ">
                <?php foreach($animationPartenaire as $anim): ?>
                <div class="item mb-12">
                        <div class="card border-0 shadow">
                        <div class="image-container">
                         <img id="my-image" src="<?= $anim['imgActualite'] ?>" alt="Image déformée">
                        </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= $anim['NomActualite'] ?></h5>
                              
                                <div class="card-text description-courte">
  <?php
  $description = strip_tags(htmlspecialchars_decode($anim['DescriptionActualite']));
  if (strlen($description) > 255) {
    $description = substr($description, 0, 255);
    $last_space = strrpos($description, ' ');
    if ($last_space !== false) {
      $description = substr($description, 0, $last_space) . '<a href="#" class="voir-description-complete" style="font-size: 20px;">...</a>';
    } else {
      $description .= ' <a href="#" class="voir-description-complete" style="font-size: 20px;">...</a>';
    }
  }
  echo $description;
  ?>
</div>
<div class="card-text description-complete">
 <span> <?= htmlspecialchars_decode($anim['DescriptionActualite']) ?> </span>
</div>                     
                            </div>
                            <div class="card-footer">
                                <?php
                                if($anim['TypeActualite']== 'video')
                                {
                                   if($anim['LienActualite'] != 'null'){
                                    ?>
                                    <a href="<?= $anim['LienActualite']?> " target="_blank" class="btn btn-primary" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;">Voir la vidéo</a>
                                    <?php
                                   }
                                   else{
                                    ?>
                                    <div class="null"></div>
                                    <?php
                                   } ?>
                                   <?php }else{
                                    if($anim['LienActualite'] != 'null'){
                                        ?>

                                    <a href="image/<?= $anim['LienActualite']?>" target="_blank" class="btn btn-primary" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;">En Savoir plus</a>

                                    <?php
                                    }
                                    else{
                                        ?>
                                         <div class="null"></div>
                                        <?php
                                    }
                                }
                                ?>
                            
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

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
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
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

$(document).ready(function() {
    $('.voir-description-complete').click(function(e) {
        e.preventDefault();
        var descriptionCourte = $(this).closest('.card-body').find('.description-courte');
        var descriptionComplete = $(this).closest('.card-body').find('.description-complete');

        // Masquer la description courte
        descriptionCourte.hide();

        // Afficher la description complète
        descriptionComplete.show();
        
        // Recalculate card heights
        $('#news-card-group .card').matchHeight();
    });
});

window.addEventListener('load', function() {
  var image = document.getElementById('my-image');
  var container = image.parentNode;

  if (image.naturalWidth > container.offsetWidth) {
    container.classList.add('small-image');
    image.style.width = '100%';
    image.style.height = 'auto';
  }
});
$(function() {
    $('.image-container').matchHeight();
  });
</script>
