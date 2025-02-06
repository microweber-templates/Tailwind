<?php
/*
type: layout
name: Footer Menu
description: Footer menu template
*/
?>

<?php if ($menu_filter): ?>
<div>
    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"><?php print $menu_filter['name']; ?></h2>
    <ul class="text-gray-500 dark:text-gray-400 font-medium">
        <?php foreach ($menu_filter['items'] as $menu_item): ?>
            <li class="mb-4">
                <a href="<?php print $menu_item['url']; ?>" class="hover:underline"><?php print $menu_item['title']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>
