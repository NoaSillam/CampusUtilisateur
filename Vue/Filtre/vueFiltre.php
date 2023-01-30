
<h1>Les themes</h1>


<form action="" method="post">
<select class="form-select" aria-label="Default select example" style="text-align: center;" >
<option value="null"> Veuillez choisir un theme</option>  
<?php
foreach($themes as $theme):
?>
<option value="<?= $theme['id'] ?>"> <?= $theme['libelle'] ?></option>  
<?php endforeach;?>
</select>
<input type="submit" class="btn btn-primary" value="rechercher">
</form>
