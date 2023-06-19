<style>
  .ui-autocomplete {
    max-height: 300px;
    overflow-y: auto;
    overflow-x: hidden;
  }
</style>


<form action="">
<div class="row justify-content-center" style="margin-left: -6%; margin-top: -5%;">
         <div class="col-2" >
<select class="form-select" aria-label="Default select example" onchange="location = this.value;">
<option>Résultat</option>
<?php foreach($resultats as $result):?>

<option value="index.php?action=videoId&idDocVideo=<?= $result['idDocVideo'] ?>"><h3><?= $result['libelle'] ?></h3></option>
<?php endforeach;?>
</select>
</div>
</div>
  <input type="submit" class="btn btn-primary" value="valider" style="display:none;">
</form>
