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
  .card {
    width: 100%;
  }
  .page {
    text-align: center; /* centre les éléments enfants */
  }
  img{
    object-fit: scale-down;
    max-width: 100%;
  max-height: 200px; /* Remplacez par la hauteur maximale souhaitée */
  height: auto;
  }
  @media (max-width: 767px) {
 .titleVideotheque{
  font-size: large;
 }
}
@media (max-width: 450px) {
 .titleVideotheque{
  font-size: 50%
 }
 .btnVoirVideo{

  font-size: 50%
 }
}
@media (max-width: 300px) {
 .titleVideotheque{
  font-size: 35%
 }
 .btnVoirVideo{

  font-size: 35%
 }
}
</style>
<?php 
//include_once('header1.php');
include_once('header2.php');
 ?>
<h2 style="text-align: center;">Nos vidéos</h2>
<div style="margin: auto; width: 80%;">
<div class="row row-cols-12 g-4 w-100" style="margin-left:auto; margin-right:auto;" >
  <?php
    $count = 0;
    $page = 1;
    $videosPerPage = 9;
    foreach($videotheque as $video):
      $count++;
      if($count == 1 || ($count - 1) % $videosPerPage == 0) {
        if($count != 1) { echo '</div>'; }
        echo '<div class="page row row-cols-3 g-4" id="page'.$page.'">';
        $page++;
      }
  ?>
      <div class="col-4">
        <div class="card h-100">
        <img src="<?= $video['imgApercu'] ?>" alt="">
          <!-- <div class="video-responsive">
            
            <iframe width="100%" height="100%" src="<?= $video['lien'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="card-img-top" allowfullscreen></iframe> 
          </div> -->
          <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
            <h5 class="card-title titleVideotheque"><?= $video['libelle'] ?></h5>
          </div>
          <div class="card-footer" style="display: flex; align-items: center; justify-content: center;">
            <a href="<?= "index.php?action=videoId&idDocVideo=".$video['idDocVideo']?>" target="_blank" class="btn btn-primary btnVoirVideo" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;">Voir la video</a>
          </div>
        </div>
      </div>
  <?php
    endforeach;?>
  <?php
    echo '</div>';
    $totalPages = $page - 1;
  ?>
</div>
</div>
<br>
<br>
<nav aria-label="Page navigation example">
  <ul class="pagination" style="display:flex; align-items:center; justify-content:center;">
    <?php for($i = 1; $i <= $totalPages; $i++): ?>
      <?php if($i == 1): ?>
        <li class="page-item active"><a class="page-link" href="#page1">1</a></li>
      <?php else: ?>
        <li class="page-item"><a class="page-link" href="#page<?= $i ?>"><?= $i ?></a></li>
      <?php endif; ?>
    <?php endfor; ?>
  </ul>
</nav>
<?php
    include 'footer.php';
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('.page').hide();
    $('#page1').show();
  });
  $('.pagination a').click(function(e){
    e.preventDefault();
    var pageId = $(this).attr('href');
    $('.page').hide();
    $(pageId).show();
    $('.pagination li').removeClass('active');
    $(this).parent().addClass('active');
  });
</script>





