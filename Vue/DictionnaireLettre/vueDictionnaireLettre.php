<!-- 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  dictionnaire
</button> -->

<!-- <div class="modal-dialog modal-dialog-scrollable">
<div class="modal fade" id="exampleModal" tabindex="-1" >
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">La liste des dictionnaires</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> -->
      <!-- <h1>La liste des dictionnaires</h1> -->

      <?php foreach($dictionnaire as $dic):?>

      <table id="a" class="table tbl">
    <thead>
        <tr><th><?= $dic['lettre'] ?></th></tr></thead>
        <tbody>
       
        <tr>

<td><a href="<?= "index.php?action=dictionnaires&idDictionnaire=". $dic['idDictionnaire']?>" > <input type="button" class="button" data-modal="modalOne" value="<?= $dic['libelle'] ?>" /></a></td>
 

            
        </tr>
       
       
</tbody>
      </table>
      <?php endforeach;?>
      <!-- <iframe src="<?= "index.php?action=dictionnaires&idDictionnaire=". $dic['idDictionnaire']?>" style="height: 100%; width: 100%;" title="Iframe Example"> </iframe> -->


      <!-- <script>
              $( ".navbar" ).remove();
        </script> -->

      <!-- <script>
        let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.getAttribute("data-modal");
          document.getElementById(modal).style.display = "block";
        };
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.closest(".modal");
          modal.style.display = "none";
        };
      });
      window.onclick = function (event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      };
      </script>

      
        -->
      <!-- </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
     
    </div>
  </div>
</div>
</div> -->

