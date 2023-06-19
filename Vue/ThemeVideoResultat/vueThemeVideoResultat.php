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
.pdf{
  margin-left: 1%;
  margin-top: -2%;
  float: left;
}
</style>
<?php 
//include_once('header1.php'); 
include_once('header2.php');?>
<?php
foreach($docVideoId as $docVideo):
    ?>
     <div style=" width: 80%; margin:auto;">

       <?php
    if($docVideo['crono'] >= "00:00:00")
    {?>
    <br>

    <?php
    if($docVideo['type'] == 'document')
    {?>
    <br>

    <?php
        if($docVideo['format']=='pdf')
      {
       ?>

       <h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
       <br>
       <br>
       <div style="display: flex; justify-content: center; align-items: center; height: 50%;">
  <iframe style="width: 750px; height: 450px;" class="pdf" src="image/<?= $docVideo['lien']?>"></iframe>
</div>   
    <!-- <iframe style="text-align:center; justify-item:center; align-item:center; margin-left: 25%;" width="750px" height="450px" class="pdf" src="image/<?= $docVideo['lien']?> " > </iframe> -->
    <br>
    <br>
    <div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>
    <?php
   }
  else if ($docVideo['format']=='pptx')
  {
    ?>
    TEST DOCUEMENT
   <h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
   <br>
   <div style="display: flex; justify-content: center; align-items: center; height: 50%;">
    <img style="width: 750px; height: 450px;" class="pdf" src="image/<?= $docVideo['lien']?>" >
    </div>
    <br>
    <br>
    <div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>
    <?php
  }
  else  if($docVideo['format']=='png'){
    ?>
    TEST DOCUEMENT
<h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
<br>
<div style="display: flex; justify-content: center; align-items: center; height: 50%;">
  <img class="img-fluid image" width="750px" height="450px" style="margin: 0 auto;" src="image/<?= $docVideo['lien']?>" >
</div>
    <br>
    <br>
    <div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>
  <?php
    } else if($docVideo['format']=='jpeg'){
      ?>
      TEST DOCUEMENT
      <h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
      <br>
     
      <div style="display: flex; justify-content: center; align-items: center; height: 50%;">
  <img class="img-fluid image" width="750px" height="450px" style="margin: 0 auto;" src="image/<?= $docVideo['lien']?>" >
</div>
<br>
<br>
<div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>
      <?php
    }
  }
    else
    {
        ?>
       

<h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
<br>
<div style="display: flex; justify-content: center; align-items: center; height: 50%;">
  <!-- <iframe src="<?= $docVideo['lien'] ?>" width="750px" height="450px" style="margin: 0 auto;" frameborder="0"></iframe> -->
  <img class="img-fluid image" width="750px" height="450px" style="margin: 0 auto;" src="<?= $docVideo['imgApercu']?>" >
</div>

         <br>
         <br>
         <div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>

        <?php
    }
    ?>
    <?php }
    else{
    ?>
 <?php
    if($docVideo['type'] == 'document')
    {
      
        if($docVideo['format']=='pdf')
      {
       ?>
   
       <h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
       <br>
      
       <div style="display: flex; justify-content: center; align-items: center; height: 50%;">
  <iframe style="width: 750px; height: 450px;" class="pdf" src="image/<?= $docVideo['lien']?>"></iframe>
</div>  
    <br>
    <br>
    <div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>
    <?php
   }
  else if ($docVideo['format']=='pptx')
  {
    ?>

   <h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
   <br>
   <div style="display: flex; justify-content: center; align-items: center; height: 50%;">
  <img class="img-fluid image" width="750px" height="450px" style="margin: 0 auto;" src="image/<?= $docVideo['lien']?>" >
</div>
    <br>
    <br>
    <div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>
    <?php
  }
  else  if($docVideo['format']=='png'){
    ?>

<h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
<br>
<div style="display: flex; justify-content: center; align-items: center; height: 50%;">
  <img class="img-fluid image" width="750px" height="450px" style="margin: 0 auto;" src="image/<?= $docVideo['lien']?>" >
</div>
    <br>
    <br>
    <div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>
  <?php
    } else if($docVideo['format']=='jpeg'){
      ?>
   
      <h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
      <br>
     
      <div style="display: flex; justify-content: center; align-items: center; height: 50%;">
  <img class="img-fluid image" width="750px" height="450px" style="margin: 0 auto;" src="image/<?= $docVideo['lien']?>" >
</div>
<br>
<br>
<div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>
      <?php
    }?>
   <?php  }
    else
    {
        ?>

<h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
<br>
<iframe src="<?= $docVideo['lien'] ?>" width="750px" height="450px" style="text-align:center; justify-item:center; align-item:center;" frameborder="0" allowfullscreen></iframe>
<!-- <img class="img-fluid image" width="750px" height="450px" style="margin: 0 auto;" src="<?= $docVideo['imgApecu']?>" > -->
         <br>
         <br>
         <div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div>

        <?php
    }
    ?>
<?php 
 }
 ?>
    <?php
    endforeach ?>
       </div>

       <br>
       <br>
       <br><br>
       <br>
       <?php
       include('footer.php');
       ?>






<!-- <h3 style="color: black; text-align:center;"><?= $docVideo['libelle'] ?></h3>
<br>

<iframe src="<?= $docVideo['lien'] ?>" width="750px" height="450px" style="text-align:center; justify-item:center; align-item:center; margin-left: 25%;" frameborder="0" aria-disabled="true" allowfullscreen></iframe>
<br>
<br>
<div style="color: black; width:80%; margin-left:auto; margin-right:auto;" ><?= htmlspecialchars_decode( $docVideo['description']) ?></div> -->

<!-- 
<div class="text" style="margin-left: 40%;">
    <p style="color: black;"> <?= htmlspecialchars_decode( $docVideo['description']) ?></p>
    </div> -->