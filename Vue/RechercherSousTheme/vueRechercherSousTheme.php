
<?php
//include_once('header1.php');
include_once('header2.php');
?>
<h1 style="text-align: center;">Les sous-thèmes</h1>
<form id="search-form" action="index.php?action=rechercherThemeVideo" method="post">
<div class="row justify-content-center" >
         <div class="col-5" >
    <select class="form-select" id="sousThemesSelect" name="idTheme" aria-label="Default select example" style="text-align: center;">
        <option value="null"> Veuillez choisir un sous-thème</option>
        <?php
        $empty = true;
        foreach ($sousThemes as $soustheme):
            $empty = false;
            ?>
            <option value="<?= $soustheme['id'] ?>"> <?= $soustheme['libelle'] ?></option>
        <?php endforeach ?>
    </select>
    </select>
</div>
</div>
<br>
<div class="d-flex align-items-center justify-content-center">
<div class="col-3" >
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
<?php
    include 'footer.php';
    ?>
<script>
  let sousThemesSelect = document.getElementById("sousThemesSelect");
  if (sousThemesSelect && sousThemesSelect.length === 0) {
    document.querySelector('#search-form').addEventListener('submit', function(event) {
      event.preventDefault();
      window.location.href = 'index.php?action=rechercherThemeVideo';
    });
  }
  document.querySelector('#sousThemesSelect').addEventListener('change', function() {
  if (this.value !== 'null') {
    document.querySelector('#search-form').submit();
  }
});
</script>