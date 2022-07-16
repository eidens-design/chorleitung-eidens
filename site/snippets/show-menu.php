<?php $menus = $site->menus()->toStructure(); ?>
<?php if ($menus->isNotEmpty()) : ?>
  <?php foreach ($menus as $menu) : ?>
    <?php if ($menu->menuKey() == $key): ?>
      <?php $menuItems = $menu->menuItems()->toPages(); ?>
      <?php if ($menuItems->isNotEmpty()) : ?>
        <ul class="menu-class" role="list">
          <?php foreach ($menuItems as $menuItem) : ?>
            <li class="menu-item-class <?php e($site->page($menuItem)->isOpen(), ' menu-item-active-class') ?>" >
                <a 
                    class="menu-link-class <?php e($site->page($menuItem)->isOpen(), ' menu-link-active-class') ?>"
                    href="<?= $menuItem->url() ?>">
                    <?= $menuItem->title() ?>
                </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
    <?php endif ?>
  <?php endforeach ?>
<?php endif ?>