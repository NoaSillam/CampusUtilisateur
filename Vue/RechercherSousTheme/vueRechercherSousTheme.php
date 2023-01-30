
<h1>Les sous-themes</h1>


<form action="index.php?action=rechercherThemeVideo" method="post">
<select class="form-select" name="idTheme" aria-label="Default select example" style="text-align: center;" >
<option value="null"> Veuillez choisir un sous-theme</option>  
<?php
foreach($sousThemes as $soustheme):
?>
<option value="<?= $soustheme['id'] ?>"> <?= $soustheme['libelle'] ?></option>  
<?php endforeach ?>
</select>
<input type="submit" class="btn btn-primary" value="rechercher">
</form>
