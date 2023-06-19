<style>
.modal {
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
.modal-content {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.hidden{
  visibility: hidden;
}
.mlu{
  margin-left: 7%;
  background-color: rgb(92,188,202);
  border-color: rgb(92,188,202);

}
.mlu:hover{
  margin-left: 7%;
  background-color: rgb(92,188,202);
  border-color: rgb(92,188,202);
  
}
</style>
<button class="hidden" onclick="openModal()">Ouvrir la fenêtre modale</button>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
<h2 style="text-align:center;">Taper le mot que vous recherchez : </h2>
<form action="index.php?action=rechercherDictionnaire#rechercher" target="reponse" method="post">
<div class="d-flex justify-content-center dicRch">
<div class="form-group">
      <input type="text" class="form-control rch" style="text-align: center;" name="libelle" placeholder="Rechercher" required>
    </div>
</br>
<div class="form-group">
      <input class="btn btn-primary mlu" onclick="openIframe()" type="submit" style="width:100%;" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: inline-block; z-index: 1;" value="Valider">
    </div>
</div>
</form>
<iframe src="index.php?action=rechercherDictionnaire" height="800" name="reponse" id="rechercher" style="display:none;" scrolling="no" frameborder="0"></iframe>
  </div>
</div>

<script>
var modal = document.getElementById("myModal");
var iframe = document.getElementById("rechercher");
function openModal() {
  modal.style.display = "block";
}
function openIframe() {
    if (document.forms[0].checkValidity()) {
      iframe.src = "index.php?action=rechercherDictionnaire";
      iframe.style.display = "block";
    }
  }
  function closeModal() {
    modal.style.display = "none";
    iframe.style.display = "none";
  }
function closeModal() {
  modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
      closeModal();
    }
  }
</script>