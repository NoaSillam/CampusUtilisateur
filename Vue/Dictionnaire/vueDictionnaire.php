<style>
    /* Modal styles */
    .modal-Dic {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }
    .modal-content-Dic {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      width: 80%;
      height: 200%;
    }
    .close-button {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close-button:hover,
    .close-button:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    .dic{
        width: 60%;
        margin-bottom: -100%;
    }
    .hidden {
        display: none;
      }
      .dicRch
      {
        width: 60%;
        text-align: center;
        justify-items: center;
        align-items: center;
       margin-left: 20%;
       margin-top: -5%;
      }

</style>

<?php include_once('header1.php'); ?>
dkbvghjubchghkhjghjhuyhgfchgjhghvhgf
    
<div id="modal-Dic" class="modal-Dic">
  <div class="modal-content-Dic">

  <a href="index.php"><button type="button" class="btn-close fermer" aria-label="Close"></button></a>

<form action="index.php?action=rechercherDictionnaire" method="post">
<div class="d-flex justify-content-center dicRch">

    <div class="form-group">
      <input type="text" class="form-control rch" style="text-align: center;" name="libelle" placeholder="Rechercher" required>
    </div>
</br>
    <div class="form-group">
      <input class="btn btn-primary mlu" type="submit" value="Valider">
    </div>


</div>
</form>
<h3 style="margin-top: -5%;" >OU</h3>
  <br>
  <br>
  <br>
  <br>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   <div class="dic">
   <a href="#alphabettA" name="lettre"> <input type="submit" class="alphabet" id="alphabetA" name="A" value="A"></a>
    <a href="#alphabettB" name="lettre"> <input type="submit" class="alphabet" id="alphabetB" name="B" value="B"></a>
    <a href="#alphabettC" name="lettre"> <input type="submit" class="alphabet" id="alphabetC" name="C" value="C"></a>
    <a href="#alphabettD" name="lettre"> <input type="submit" class="alphabet" id="alphabetD" name="D" value="D"></a>
    <a href="#alphabettE" name="lettre"> <input type="submit"  class="alphabet" id="alphabetE" name="E" value="E"></a>
    <a href="#alphabettF" name="lettre"><input type="submit"  class="alphabet" id="alphabetF" name="F" value="F"></a>
    <a href="#alphabettG" name="lettre"> <input type="submit"  class="alphabet" id="alphabetG" name="G" value="G"></a>
    <a href="#alphabettH" name="lettre"> <input type="submit" class="alphabet" id="alphabetH" name="H" value="H"></a>
    <a href="#alphabettI" name="lettre"><input type="submit" class="alphabet" id="alphabetI" name="I" value="I"></a>
    <a href="#alphabettJ" name="lettre"> <input type="submit" class="alphabet" id="alphabetJ" name="J" value="J"></a>
    <a href="#alphabettK" name="lettre"> <input type="submit" class="alphabet" id="alphabetK" name="K" value="K"></a>
    <a href="#alphabettL" name="lettre"> <input type="submit" class="alphabet" id="alphabetL" name="L" value="L"></a>
    <a href="#alphabettM" name="lettre"> <input type="submit" class="alphabet" id="alphabetM" name="M" value="M"></a>
    <br>
    <a href="#alphabettN" name="lettre"> <input type="submit" class="alphabet" id="alphabetN" name="N" value="N"></a>
    <a href="#alphabettO" name="lettre"> <input type="submit" class="alphabet" id="alphabetO" name="O" value="O"></a>
    <a href="#alphabettP" name="lettre"> <input type="submit" class="alphabet" id="alphabetP" name="P" value="P"></a>
    <a href="#alphabettQ" name="lettre"> <input type="submit" class="alphabet" id="alphabetQ" name="Q" value="Q"></a>
    <a href="#alphabettR" name="lettre"> <input type="submit" class="alphabet" id="alphabetR" name="R" value="R"></a>
    <a href="#alphabettS" name="lettre"> <input type="submit" class="alphabet" id="alphabetS" name="S" value="S"></a>
    <a href="#alphabettT" name="lettre"> <input type="submit" class="alphabet" id="alphabetT" name="T" value="T"></a>
    <a href="#alphabettU" name="lettre"> <input type="submit" class="alphabet" id="alphabetU" name="U" value="U"></a>
    <a href="#alphabettV" name="lettre"> <input type="submit" class="alphabet" id="alphabetV" name="V" value="V"></a>
    <a href="#alphabettW" name="lettre"> <input type="submit" class="alphabet" id="alphabetW" name="W" value="W"></a>
    <a href="#alphabettX" name="lettre"> <input type="submit" class="alphabet" id="alphabetX" name="X" value="X"></a>
    <a href="#alphabettY" name="lettre"> <input type="submit" class="alphabet" id="alphabetY" name="Y" value="Y"></a>
    <a href="#alphabettZ" name="lettre"> <input type="submit" class="alphabet" id="alphabetZ" name="Z" value="Z"></a>
   </div>


<!-- 
    <div class="gauche">
        <a href="index.php?action=dictionnaireLettreA" name="lettre"><B><p>A</p></B></a>
        <a href="index.php?action=dictionnaireLettreB" name="lettre"><B><p>B</p></B></a>
        <a href="index.php?action=dictionnaireLettreC" name="lettre"><B><p>C</p></B></a>
        <a href="index.php?action=dictionnaireLettreD" name="lettre"><B><p>D</p></B></a>
        <a href="index.php?action=dictionnaireLettreE" name="lettre"><B><p>E</p></B></a>
        <a href="index.php?action=dictionnaireLettreF" name="lettre"><B><p>F</p></B></a>
        <a href="index.php?action=dictionnaireLettreG" name="lettre"><B><p>G</p></B></a>
        <a href="index.php?action=dictionnaireLettreH" name="lettre"><B><p>H</p></B></a>
        <a href="index.php?action=dictionnaireLettreI" name="lettre"><B><p>I</p></B></a>
        <a href="index.php?action=dictionnaireLettreJ" name="lettre"><B><p>J</p></B></a>
        <a href="index.php?action=dictionnaireLettreK" name="lettre"><B><p>K</p></B></a>
        <a href="index.php?action=dictionnaireLettreL" name="lettre"><B><p>L</p></B></a>
        <a href="index.php?action=dictionnaireLettreM" name="lettre"><B><p>M</p></B></a>
    </div>
    <br>
    <br>
    <br>
    <br>



    <div class="droite">
        <a href="index.php?action=dictionnaireLettreN" name="lettre"><B><p>N</p></B></a>
        <a href="index.php?action=dictionnaireLettreO" name="lettre"><B><p>O</p></B></a>
        <a href="index.php?action=dictionnaireLettreP" name="lettre"><B><p>P</p></B></a>
        <a href="index.php?action=dictionnaireLettreQ" name="lettre"><B><p>Q</p></B></a>
        <a href="index.php?action=dictionnaireLettreR" name="lettre"><B><p>R</p></B></a>
        <a href="index.php?action=dictionnaireLettreS" name="lettre"><B><p>S</p></B></a>
        <a href="index.php?action=dictionnaireLettreT" name="lettre"><B><p>T</p></B></a>
        <a href="index.php?action=dictionnaireLettreU" name="lettre"><B><p>U</p></B></a>
        <a href="index.php?action=dictionnaireLettreV" name="lettre"><B><p>V</p></B></a>
        <a href="index.php?action=dictionnaireLettreW" name="lettre"><B><p>W</p></B></a>
        <a href="index.php?action=dictionnaireLettreX" name="lettre"><B><p>X</p></B></a>
        <a href="index.php?action=dictionnaireLettreY" name="lettre"><B><p>Y</p></B></a>
        <a href="index.php?action=dictionnaireLettreZ" name="lettre"><B><p>Z</p></B></a> -->




<!--#include virtual="index.php?action=dictionnaireLettreA"-->



        <iframe class="hidden" src="index.php?action=dictionnaireLettreA" id="alphabettA" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreB" id="alphabettB" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreC" id="alphabettC" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreD" id="alphabettD" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreE" id="alphabettE" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreF" id="alphabettF" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreG" id="alphabettG" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreH" id="alphabettH" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreI" id="alphabettI" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreJ" id="alphabettJ" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreK" id="alphabettK" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>        
        <iframe class="hidden" src="index.php?action=dictionnaireLettreL" id="alphabettL" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreM" id="alphabettM" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>        
        <iframe class="hidden" src="index.php?action=dictionnaireLettreN" id="alphabettN" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreO" id="alphabettO" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreP" id="alphabettP" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreQ" id="alphabettQ" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreR" id="alphabettR" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreS" id="alphabettS" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreT" id="alphabettT" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>        
        <iframe class="hidden" src="index.php?action=dictionnaireLettreU" id="alphabettU" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreV" id="alphabettV" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>        
        <iframe class="hidden" src="index.php?action=dictionnaireLettreW" id="alphabettW" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreX" id="alphabettX" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreY" id="alphabettY" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <iframe class="hidden" src="index.php?action=dictionnaireLettreZ" id="alphabettZ" height="500" style=" width: 50%; margin-top: 80%;"  title="Iframe Example" > </iframe>
        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/fIOidjf1y5I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
            </div>
</div>
<script>
  // Get the modal
  let modal = document.getElementById("modal-Dic");

  // Get the button that opens the modal
  let btn = document.getElementById("open-modal-Dic");

  // When the user clicks the button, open the modal
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

//   const alphabetButtons = document.querySelectorAll(".alphabet");
// const iframes = document.querySelectorAll("iframe");

// alphabetButtons.forEach(button => {
//   button.addEventListener("click", function() {
//     const id = this.id.replace("alphabet", "");
//     iframes.forEach(iframe => {
//       iframe.style.display = "none";
//     });
//     document.querySelector(`#iframe${id}`).style.display = "block";
//   });
// });




const alphabetButtons = document.querySelectorAll(".alphabet");
      const iframes = document.querySelectorAll("iframe");

  alphabetButtons.forEach(button => {
    button.addEventListener("click", function() {
      iframes.forEach(iframe => {
        iframe.classList.add("hidden");
      });
      const id = this.id.replace("alphabet", "alphabett");
      document.querySelector(`#${id}`).classList.remove("hidden");
    });
  });
</script>

        <!-- <iframe src="index.php?action=dictionnaireLettreA" style="height: 100%; width: 100%;" title="Iframe Example"> </iframe> -->
       




