<?php

/*

type: layout

name: Team 18

position: 18

categories: Team

*/

?>

<style>




</style>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = $layout_classes ?? ''; $layout_classes .= ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>
    .team-17-btn {
        border-radius: 100px 0 100px 100px!important;
        background-color: #FF2359;
        color: white;
        padding: 20px 40px;
    }

    .flower-team-card-img {
        border-radius: 0 15px 0 15px;
        padding: 10px;
    }

    .flower-card.card {
        margin: 0 20px;
    }
</style>

<section class="section <?php print $layout_classes; ?> ">

    <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />

    <div class="mw-layout-container no-element   container-fluid edit" field="layout-team-skin-18-{{ $params['id'] }}" rel="module">
        <div class="container-fluid">

                <module type="teamcard" template="skin-16"/>

        </div>
    </div>
 <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />

</section>
