<h1>Exemples</h1>
<h5><a href="<?= ROOT_MNGT.'examples/add'; ?>">Nouvel exemple</a></h5>
<div>
    <table style="width:100%; text-align:left;">
        <tr>
            <th style="width:5%;">Id</th>
            <th style="width:25%;">Titre</th>
            <th style="width:15%;">Catégorie</th>
            <th style="width:15%;">Fichier</th>
            <th style="width:10%;">Visible</th>
        </tr>
    </table>
    <?php
    foreach ($viewModelExamples as $item)
    {
    ?>
        <a href="<?= ROOT_MNGT.'examples/update/'.$item['id']; ?>">
            <table style="width:100%;">
                <tr>
                    <td style="width:5%;"><?= $item['id']; ?></td>
                    <td style="width:25%;"><?= urldecode($item['title']); ?></td>
                    <td style="width:15%;"><?= urldecode($item['Category']); ?></td>
                    <td style="width:15%;"><?= urldecode($item['file']); ?></td>
                    <td style="width:10%;"><?= $item['visible'] ? 'Oui' : 'Non'; ?></td>
                </tr>
            </table>
        </a>
    <?php
    }
    ?>
</div>
<br>
<hr>
<br>
<h1>Categories d'exemples</h1>
<h5><a href="<?= ROOT_MNGT.'examplecategory/add'; ?>">Nouvelle categorie</a></h5>
<div>
    <table style="width:100%; text-align:left;">
        <tr>
            <th style="width:5%;">Id</th>
            <th style="width:50%;">Nom</th>
        </tr>
    </table>
    <?php
    foreach ($viewModelCategs as $item)
    {
    ?>
        <a href="<?= ROOT_MNGT.'examplecategory/update/'.$item['id']; ?>">
            <table style="width:100%;">
                <tr>
                    <td style="width:5%;"><?= $item['id']; ?></td>
                    <td style="width:50%;"><?= urldecode($item['name']); ?></td>
                </tr>
            </table>
        </a>
    <?php
    }
    ?>
</div>