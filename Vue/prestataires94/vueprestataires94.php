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
  <img src="<?= $prestataire['logo'] ?>" style="width: 33%;" class="img-top"/>
  <br>

<?= htmlspecialchars_decode($prestataire['Description']) ?>
</div>
<?php endforeach;?>
