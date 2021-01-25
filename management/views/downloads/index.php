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
            $name = basename($file);
            ?>
            <tr>
                <td style="width:50%;"><?= $name; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
