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
height:100%;
width:100%;
position:absolute;
}
</style>



<?php
foreach($docVideoId as $docVideo):
    ?>
       <?php
    if($docVideo['crono'] <= "00:00:00")

    {?>
    <h3><?= $docVideo['libelle'] ?></h3>
    <?php
    if($docVideo['type'] == 'document')
    {
        if($docVideo['format']=='pdf')
  {
    ?>
        <td><iframe width="300" height="320" src="image/<?= $docVideo['lien']?> " > </iframe></td>
    <?php
  }
  else if ($docVideo['format']=='pptx')
  {
    ?>
    <td>  <img width="300" height="320" src="image/<?= $docVideo['lien']?> " > </td>

    <?php
  }
  else{
    ?>
    <td><img class="img-fluid" src="image/<?= $docVideo['lien']?>" ></td>
    <?php
  }

  ?>
  <?php
    }
    else
    {
        ?>
         <iframe src="<?= $docVideo['lien'] ?>" width="500px" height="350px" frameborder="0"></iframe>

        <?php
    }
    ?>
   
    <p><?= $docVideo['description'] ?></p>
    <?php }
    else{
    ?>


<h3><?= $docVideo['libelle'] ?></h3>
<iframe src="<?= $docVideo['lien'] ?>" width="500px" height="350px" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" aria-disabled="true" allowfullscreen></iframe>
    <p><?= $docVideo['description'] ?></p>

<?php 
 }
 ?>





    <?php
    endforeach ?>