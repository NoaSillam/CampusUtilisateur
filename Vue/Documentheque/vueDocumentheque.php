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
  @media (max-width: 767px) {
 .titleDocument{
  font-size: large;
 }
}
@media (max-width: 450px) {
 .titleDocument{
  font-size: 50%
 }
 .btnVoirDocument{

  font-size: 50%
 }
}
@media (max-width: 300px) {
 .titleDocument{
  font-size: 35%
 }
 .btnVoirDocument{

  font-size: 35%
 }
}
.img-conteneur img {
  max-width: 100%;
  max-height: 200px; /* Remplacez par la hauteur maximale souhaitée */
  height: auto;
  object-fit: scale-down; /* fond blanc qui permet de ne pas deformer une image */
}
</style>
<?php
//include 'header1.php';
include_once('header2.php');
?>
<h2 style="display: flex; align-items: center; justify-content: center;">Nos tutoriels</h2>
<div style="margin: auto; width: 80%;">
<div class="row row-cols-12 g-4 w-100" style="margin-left:auto; margin-right:auto;">
<?php
      $count = 0;
      $page = 1;
      $videosPerPage = 9;
      foreach($documentheque as $doc):
        $count++;
        if($count == 1 || ($count - 1) % $videosPerPage == 0) {
          if($count != 1) { echo '</div>'; }
          echo '<div class="page row row-cols-3 g-4" id="page'.$page.'">';
          $page++;
        }
        ?>
<div class="col-4">
    <div class="card h-100">
 
    <td><div class="img-conteneur"> <img class="imgApercu" src="<?= $doc['imgApercu']?>" ></div></td>
  
  <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
    <h5 class="card-title titleDocument"> <?= $doc['libelle'] ?> </h5>
    </div>
    <div class="card-footer" style="display: flex; align-items: center; justify-content: center;">
    <a href="<?= "index.php?action=videoId&idDocVideo=".$doc['idDocVideo']?>" target="_blank" class="btn btn-primary btnVoirDocument" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block;">Voir le Document</a>
      </div>
    </div>
    <br>
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






