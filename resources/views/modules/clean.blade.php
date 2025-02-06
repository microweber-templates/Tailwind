
<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = $layout_classes ?? ''; $layout_classes .= ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?>">

    <div class="my-md-5 my-3 container allow-drop">
        <div class="row">
            <div class="col-12 mx-auto">
                <h2 class="my-md-5 my-3">My title</h2>
                <p>
                    My text content.
                </p>
            </div>
        </div>
    </div>

</section>
