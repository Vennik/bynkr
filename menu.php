<?php

$pages = [
    ['url' => 'overview', 'name' => '<i class="fa fa-chevron-down fa-fw"></i> Products', 'items' => [
        ['url' => 'all', 'name' => 'All Products'],
        ['url' => 'loans', 'name' => 'Loans'],
        ['url' => 'mortgages', 'name' => 'Mortgages'],
        ['url' => 'leases', 'name' => 'Leases'],
        ['url' => 'insurances', 'name' => 'Insurances'],
        ['url' => 'credit-cards', 'name' => 'Credit Cards']
    ]],
    ['url' => 'correspondence', 'name' => '<i class="fa fa-comment fa-fw"></i> Correspondence'],
    ['url' => 'vault', 'name' => '<i class="fa fa-lock fa-fw"></i> Personal Vault'],
    ['url' => 'edit', 'name' => '<i class="fa fa-cog fa-fw"></i> Settings'],
];

?>
<ul class="main-menu">
    <?php foreach ($pages as $page): ?>
        <li<?= $page['url'] == $components[0] ? ' class="active"' : '' ?>>
            <a href="<?= $page['url'] ?>"<?= isset($page['items']) ? ' class="dropdown" onclick="return false;"' : '' ?>>
                <?= $page['name'] ?>
            </a>
            <?php if ($page['items']): ?>
                <ul class="submenu">
                    <?php foreach ($page['items'] as $item): ?>
                        <li <?= $page['url'] == $components[0] && isset($components[1]) && $components[1] == $item['url'] ? ' class="active"' : '' ?>>
                            <a href="overview/<?= $item['url'] ?>"><?= $item['name'] ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </li>
    <?php endforeach ?>
</ul>
