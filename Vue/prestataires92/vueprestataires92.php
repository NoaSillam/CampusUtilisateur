<style>
    .prestataire
    {
        width: 100%;
    }
</style>
<?php
foreach($prestataires as $prestataire):
?>
<div class="prestataire">
  <img src="<?= $prestataire['logo'] ?>" style="width: 40%;" class="img-top"/>
  <br>
  <br>
<?= htmlspecialchars_decode($prestataire['Description']) ?>
</div>
<?php endforeach;?>
