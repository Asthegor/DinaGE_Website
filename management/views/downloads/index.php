<h1>Téléchargements</h1>
<h5><a href="<?= ROOT_MNGT.'downloads/add'; ?>">Nouveau téléchargement</a></h5>
<div>
    <table style="width:100%; text-align:left;">
        <tr>
            <th colspan="2">Fichier</th>
        </tr>
        <?php
        foreach ($viewModel as $file)
        {
            ?>
            <tr>
                <td width="50%;"><?= $file->name; ?></td>
                <td width="10%;"><?= $file->nbDownloads ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
