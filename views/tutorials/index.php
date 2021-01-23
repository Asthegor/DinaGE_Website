<h1>Tutoriels</h1>
<br>
<?php
$index = 0;
$curCateg = '';
foreach ($viewModel as $item)
{
    if ($curCateg != $item['category'])
    {
        if($curCateg != '')
        {
            ?>
            <hr>
            <?php
        }
        ?>
        <h3><?= urldecode($item['category']); ?></h3>
        <?= urldecode($item['categ_desc']); ?>
        <?php
        $index = 1;
        $curCateg = $item['category'];
    }
    else
    {
            $index += 1;
    }
    ?>
    <h4>
        <a href="<?= ROOT_URL.'tutorial/'.$item['id']; ?>">
            <?= $index; ?> - <?= urldecode($item['title']); ?>
        </a>
    </h4>
    <p><?= urldecode($item['short_desc']); ?></p>
    <p>&nbsp;</p>
    <?php
}
?>