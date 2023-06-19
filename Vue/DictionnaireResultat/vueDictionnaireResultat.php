<style>
    p{
        color: black;
    }
</style>

<h1 style="text-align: center;">Résultats de la recherche</h1>

<?php if (is_string($dicRechercher)): ?>
    <p><?= $dicRechercher ?></p>
<?php else: ?>
    <?php foreach($dicRechercher as $dic): ?>
        <table id="a" class="table tbl" style="width: 60%; margin-left:auto; margin-right:auto; height: 3%;">
            <tbody>
                <tr>
                    <td style="margin-left:auto; margin-right:auto;">
                        <a href="<?= "index.php?action=dictionnaires&idDictionnaire=". $dic['idDictionnaire'] ?>">
                            <input type="button" style="width: 100%; " class="button" data-modal="modalOne" value="<?= $dic['libelle'] ?>" />
                        </a>
                    </td>      
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>
<?php endif; ?>
