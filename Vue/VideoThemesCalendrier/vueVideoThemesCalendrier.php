<style>
  [aria-disabled="true"] {
    opacity: 0.5;
    pointer-events: none;
  }

  .video-responsive { 
    overflow: hidden; 
    padding-bottom: 56.25%; 
    position: relative; 
    height: 0;
  }

  .video-responsive iframe {
    left: 0; 
    top: 0; 
    height: 100%;
    width: 100%;
    position: absolute;
  }

  h4 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 20px;
    max-width: 300px;
    text-align: center;
    margin: 0 auto;
  }

  #titreCal {
    width: 220px;
    height: 70px;
    text-align: center;
  }

  td {
    width: 250px;
    padding: 10px;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  .image-calendrier {
    width: 265px;
    height: 145px;
    object-fit: scale-down;
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
</style>


<?php
  $day = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
  $month = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
?>
<h1 style="font-size: 40px;"> Prochainement...</h1>
<br>
<div style="margin: auto; width: 90%;">
<table class="table table-borderless" >
  <tbody>   
    <?php foreach($cals as $cal): ?>
      <td width="250px" style="margin-left:auto; margin-right:auto;"> 
        <h4 style="text-align: center; font-size: 30px;"><?= $cal['libelle'] ?></h4>
        <br>
        <?php if ($cal['type'] == 'video'): ?>
            <img class="card-img-top image-calendrier" src="<?= $cal['imgApercu'] ?>" >
        <?php else: ?>
          <img class="card-img-top image-calendrier" src="<?= $cal['imgApercu'] ?>" >
        <?php endif; ?>
        <br>
        <?php echo $day[date("w", strtotime($cal['dateParution']))] . " " . date("d", strtotime($cal['dateParution'])) . 
        " " . $month[date("n", strtotime($cal['dateParution']))-1] . " " . date("Y", strtotime($cal['dateParution'])) . 
        ", à " . date("H:i:s", strtotime($cal['dateParution'])); ?>
        <br>
        <br>
        <a href="<?= "index.php?action=videoId&idDocVideo=".$cal['idDocVideo'] ?>" target="_blank" class="btn btn-primary btnDelta">Voir la description</a>
      </td>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

