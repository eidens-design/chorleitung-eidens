<?php
$language = $kirby->language();
$lang_code = $language->code();
?>

<!DOCTYPE html>
<html lang="<?= $lang_code ?>" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $page->parent() != null ? $page->title() . ' - ' . $page->parent()->title() : $page->title() . ' - ' . $site->title()?>
    </title>

    <?php snippet('meta_information'); ?>
    <?php snippet('robots'); ?>
</head>