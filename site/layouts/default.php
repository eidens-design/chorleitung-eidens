<?php snippet('layout/header') ?>
<body>
    <?php snippet('show-menu', ['key' => 'Global']) ?>
    <?php slot() ?>
    <?php endslot() ?>
</body>
</html>