<?php include_once('header1.php'); ?>
<h1>Rechercher par theme</h1>


<form action="index.php?action=sousThm" method="post">
<select class="form-select" name="idThemeParent" aria-label="Default select example" style="text-align: center;" >
<option value="null"> Veuillez choisir un theme</option>  
<?php
foreach($themes as $theme):
?>
<option value="<?= $theme['id'] ?>"> <?= $theme['libelle'] ?></option>  
<?php endforeach ?>
</select>
<input type="submit" class="btn btn-primary" value="rechercher">
</form>


