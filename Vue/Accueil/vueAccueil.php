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
/* .btn1{
width: 300px;
background-color: #b72a70;
border-color: #b72a70;
display: inline-block;
z-index: 1;
}
.btn2{
  width: 300px;
  background-color: #b72a70;
border-color: #b72a70;
display: inline-block;
z-index: 1;

}
.btn3{
  width: 300px;
  background-color: #b72a70;
border-color: #b72a70;
display: inline-block;
 z-index: 1;
}
.btn1:hover{
width: 300px;
background-color: #b72a70;
border-color: #b72a70;

}
.btn2:hover{
width: 300px;
background-color: #b72a70;
border-color: #b72a70;

}
.btn3:hover{
width: 300px;
background-color: #b72a70;
border-color: #b72a70;

} */
.inscription{

  position: relative;
  margin-top: -27%;
  margin-left: 2%;
 
}


      @media screen and (max-width: 600px) {
  .dir {
    width: 100%;
    float: right;
    clear: both;
    margin-bottom: 20%;
    margin-right: 5%;
  
  }


  .calendrier{
    margin-top: 20%;
  }
}
.actualite{
  flex-grow: 1;

}
.directe{

  flex-grow: 1;
}
section{
  display: flex;

}
@media (max-width:1200px){
  section{
    flex-direction: column;
    gap: -50px;
  }
  .actualite{
  width: 100%;
}
.directe{
  width: 150%; 

}
}
/* @media screen and (max-width: 1200px) {
    .btn1 {
      margin-left: 20%;
      margin-top: 10px;
      font-size: 14px;
    }
    .btn2 {
      margin-left: 20%;
      margin-top: 10px;
      font-size: 14px;
    }
    .btn3 {
      margin-left: 20%;
      margin-top: 10px;
      font-size: 14px;
    }
  }

  @media screen and (max-width: 1300px) {
    .btn1 {
      width: 100px;
      margin-top: 10px;
      font-size: 14px;
    }
    .btn2 {
      width: 100px;
      margin-top: 10px;
      font-size: 14px;
    }
    .btn3 {
      width: 100px;
      margin-top: 10px;
      font-size: 14px;
    }
  } */

  /* .btnLienResponsive
  {
    margin-right: 60px;
  } */

  /* .btnTout{
    margin-left: 11%;

  } */
  .actualite{
  
    margin-top: -3%;
  
  }

  .btn-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btnLienResponsive {
        flex: 1 0 100%;
        margin-bottom: 10px;
    }

    .btn {
        width: 300px;
        background-color: #b72a70;
        border-color: #b72a70;
        display: inline-block;
        z-index: 1;
    }

    .btn:hover {
        background-color: #b72a70;
        border-color: #b72a70;
    }

    @media screen and (min-width: 1300px) {
        .btn-container .btnLienResponsive {
            flex: 0 0 300px;
            margin-bottom: 0;
            margin-right: 60px; /* Ajout de l'espacement entre les boutons */
        }

        .btn-container .btnLienResponsive:last-child {
            margin-right: 0; /* Supprime la marge à droite du dernier bouton */
        }
    }
</style>

 <div style="display: inline-block;" class="include-container">
      <?php include_once('header2.php'); ?>
    </div>
   
   
<h1 style="text-align: center; font-size: 55px;"> <b> Bienvenue sur le Campus </b></h1>
<br>
<h4 style="text-align: center;">La prévention à portée de clic ! </h4>

<h5  style="text-align: center;"> Vous trouverez ici des conférences, articles, vidéos et quizz sur le sujet. </h5>
<br>
<!-- <div class="btn-container btnTout">
    <a href="index.php?action=listeDonateur" style="text-decoration-line:none;" class="btnLienResponsive">
        <button type="button" class="btn btn-primary btn1"
                onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style="width: 300px; background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;">
            Faire un don
        </button>

    </a>
    <a href="index.php?action=listeNewsletters" style="text-decoration-line:none;" class="btnLienResponsive">
        <button type="button" class="btn btn-primary btn2"
                onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style="width: 300px; background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;">
            S'inscrire à notre newsletter
        </button>
    </a>
    <a href="index.php?action=listeBenevole" style="text-decoration-line:none;" class="btnLienResponsive">
        <button type="button" class="btn btn-primary btn3"
                onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style="width: 300px; background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;">
            Devenir bénévole
        </button>
    </a>
</div> -->
<div class="btn-container btnTout">
    <a href="index.php?action=listeDonateur" style="text-decoration-line:none;" class="btnLienResponsive">
        <button type="button" class="btn btn-primary btn1"
                onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style="background-color: rgb(92,188,202); border-color: rgb(92,188,202);">
            Faire un don
        </button>
    </a>
    <a href="index.php?action=listeNewsletters" style="text-decoration-line:none;" class="btnLienResponsive">
        <button type="button" class="btn btn-primary btn2"
                onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style="background-color: rgb(92,188,202); border-color: rgb(92,188,202);">
            S'inscrire à notre newsletter
        </button>
    </a>
    <a href="index.php?action=listeBenevole" style="text-decoration-line:none;" class="btnLienResponsive">
        <button type="button" class="btn btn-primary btn3"
                onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style="background-color: rgb(92,188,202); border-color: rgb(92,188,202);">
            Devenir bénévole
        </button>
    </a>
</div>
<br>
<br>

<!-- <section>
<iframe src="index.php?action=direct" class="direct dir"  height="650" style=" width: 110%;"  title="Iframe Example" scrolling="no" > </iframe>
<iframe src="index.php?action=direct" class="direct dir"  height="620" style=" width: 70%; position: absolute; margin-top: -1%;"  title="Iframe Example" scrolling="no" > </iframe> -->
<!-- <iframe src="index.php?action=actualite"  class="actualite" height="700" style=" width: 100%; " title="Iframe Example" scrolling="no" > </iframe>
</section>  -->
<!-- <section style="display: flex; flex-wrap: nowrap; overflow: hidden;">
  <iframe src="index.php?action=direct" class="directe dir" height="650" style="flex: 1 1 auto; width: 100%; max-width: 70%; margin-right: 10px;" title="Iframe Example" scrolling="no"></iframe>
  <iframe src="index.php?action=actualite" class="actualite" height="700" style="flex: 1 1 auto; width: 100%; max-width: 50%;" title="Iframe Example" scrolling="no"></iframe>
</section> -->
<section style="display: flex; flex-wrap: nowrap; overflow: hidden;">
  <iframe src="index.php?action=direct" class="directe dir" height="650" style=" width: 100%; margin-top:-1%;"  title="Iframe Example" scrolling="no"></iframe>
  <iframe src="index.php?action=actualite" class="actualite" height="750" style=" width: 100%; "  title="Iframe Example" scrolling="no"></iframe>
</section>
<iframe src="index.php?action=calendrier" class="calendrier"  height="500" style=" width: 100%; "  title="Iframe Example" > </iframe>
<?php
    include 'footer.php';
    ?>

    


<!-- 
<div class="btn-container">
  <a href="index.php?action=listeDonateur">
    <button type="button" class="btn btn-primary btn1" onmouseover="this.style.backgroundColor='#b72a70'; 
    this.style.borderColor='#b72a70'; this.style.color='black';" onmouseout="this.style.backgroundColor='#b72a70'; 
    this.style.borderColor='#b72a70'; this.style.color='white';" style="width: 300px; background-color: #b72a70; 
    border-color: #b72a70; display: inline-block; z-index: 1;">
      Faites un don
    </button>
  </a>

  <a href="index.php?action=listeActualites">
    <button type="button" class="btn btn-primary btn2" onmouseover="this.style.backgroundColor='#b72a70'; 
    this.style.borderColor='#b72a70'; this.style.color='black';" onmouseout="this.style.backgroundColor='#b72a70'; 
    this.style.borderColor='#b72a70'; this.style.color='white';" style="width: 300px; background-color: #b72a70; 
    border-color: #b72a70; display: inline-block; z-index: 1;">
      Inscrivez-vous à notre newsletter 
    </button>
  </a>

  <a href="index.php?action=inscription">
    <button type="button" class="btn btn-primary btn3" onmouseover="this.style.backgroundColor='#b72a70'; 
    this.style.borderColor='#b72a70'; this.style.color='black';" onmouseout="this.style.backgroundColor='#b72a70'; 
    this.style.borderColor='#b72a70'; this.style.color='white';" style="width: 300px; background-color: #b72a70; 
    border-color: #b72a70; display: inline-block; z-index: 1;">
       Inscrivez-vous pour être bénévole
    </button>
  </a>
</div> -->