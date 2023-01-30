<style>
    body{
        width: 100%;
    }

    .include-container {
  position: relative;
}
.include-container {
  width: 100%;
  height: 100%;
}

.header {
  position: absolute;
  width: 100%;
  height: 100%;
}
</style>


<!-- <?php
// include 'header.php'
?> -->
 <div style="display: inline-block;" class="include-container">
      <?php include_once('header1.php'); ?>
    </div>

<h2>Bienvenue sur le Campus !!!</h2>
<h4>Ici vous trouverez tous nos tutos </h4>
<br>
<br>
<iframe src="index.php?action=direct"  height="650" style=" width: 60%; margin-right: 40%;"  title="Iframe Example" scrolling="no" > </iframe>
<iframe src="index.php?action=actualite" style="margin-top: -90%; margin-left: 40%; width: 60%;"  height="650"   title="Iframe Example" scrolling="no" > </iframe>
<iframe src="index.php?action=calendrier"  height="1000" style=" width: 100%;"  title="Iframe Example" > </iframe>



<?php
    include 'footer.php';
    ?>