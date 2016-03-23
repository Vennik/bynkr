<ul class="main-menu">
    <?php foreach ($pages as $page): ?>
        <li class="<?= $page['url'] == $components[0] ? 'active' : '' ?><?= isset($page['space']) && $page['spacer'] ? ' spacer' : '' ?>">
            <a href="<?= $page['url'] ?>"<?= isset($page['items']) ? ' class="dropdown" onclick="return false;"' : '' ?>>
                <?= $page['name'] ?>
            </a>
            <?php if (isset($page['items'])): ?>
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
