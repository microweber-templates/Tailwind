<?php

/*

type: layout

name: Team 6

position: 6

categories: Team

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = $layout_classes ?? ''; $layout_classes .= ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />
    <div class="mw-layout-container no-element   container edit" field="layout-team-skin-6-{{ $params['id'] }}" rel="module">
        <module type="teamcard" template="slider" />
    </div>
 <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />

</section>
