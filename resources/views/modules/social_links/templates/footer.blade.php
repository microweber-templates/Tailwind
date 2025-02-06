<?php
/*
type: layout
name: Footer Social Links
description: Footer social links template
*/
?>

<div class="flex mt-4 sm:justify-center sm:mt-0">
    <?php if($social_links): ?>
        <?php foreach($social_links as $link): ?>
            <a href="<?php print $link['url']; ?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white <?php print !$loop->first ? 'ms-5' : ''; ?>">
                <?php print $link['icon']; ?>
                <span class="sr-only"><?php print $link['name']; ?></span>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
