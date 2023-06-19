<?php 
//include_once('header1.php'); 
include_once('header2.php');?>
<h1 style="text-align: center;">Rechercher par thème</h1>
<form id="search-form" action="index.php?action=sousThm" method="post">
  <div class="row justify-content-center">
    <div class="col-5">
      <select class="form-select" id="sousThemesSelect" name="idThemeParent" aria-label="Default select example" style="text-align: center;" >
        <option value="null">Veuillez choisir un thème</option>  
        <?php foreach ($themes as $theme): ?>
          <option value="<?= $theme['id'] ?>"><?= $theme['libelle'] ?></option>  
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <br>
  <div class="d-flex align-items-center justify-content-center">
    <div class="col-3">
      <input type="submit" class="btn btn-primary" onmouseover="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='rgb(92,188,202)'; this.style.borderColor='rgb(92,188,202)'; this.style.color='white';"
                style=" background-color: rgb(92,188,202); border-color: rgb(92,188,202); display: none; z-index: 1;" value="rechercher">
    </div>
  </div>
</form>
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
<?php
    include 'footer.php';
    ?>
<script>
let sousThemesSelect = document.querySelector("select[name='idTheme'] option:not([value='null'])");
if (sousThemesSelect === null) {
    document.querySelector('form').action = 'index.php?action=rechercherThemeVideo';
    document.querySelector('form').submit();
}
document.querySelector('#sousThemesSelect').addEventListener('change', function() {
  if (this.value !== 'null') {
    document.querySelector('#search-form').submit();
  }
});
</script>