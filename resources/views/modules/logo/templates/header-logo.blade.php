<?php
/*
type: layout
name: Header Logo
description: Header logo template
*/
?>

<a href="<?php print site_url(); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
    <?php if($logo_image): ?>
        <img src="<?php print $logo_image; ?>" class="h-8" alt="<?php print $logo_text; ?>" />
    <?php endif; ?>
    <?php if($logo_text): ?>
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><?php print $logo_text; ?></span>
    <?php elseif(!$logo_image): ?>
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Site Logo</span>
    <?php endif; ?>
</a>
