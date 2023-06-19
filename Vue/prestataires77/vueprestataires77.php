<style>
    .prestataire
    {
        width: 100%;
        /* float: right;
        margin-right: 3%; */
    }
</style>
<?php
foreach($prestataires as $prestataire):
?>
<div class="prestataire">
  <img src="<?= $prestataire['logo'] ?>" style="width: 30%;" class="img-top"/>

  <br>
<?= htmlspecialchars_decode($prestataire['Description']) ?>
</div>
<?php endforeach;?>
