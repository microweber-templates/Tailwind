<?php

/*

type: layout

name: Team 2

position: 2

categories: Team

*/

?>

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

     <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />
    <div class="mw-layout-container no-element   container edit     " field="layout-team-skin-2-{{ $params['id'] }}" rel="module">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto mb-3 mw-dropable">
                <div class="mw-richtext">
                    <h3>Meet our Team</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Deserunt doloribus ducimus expedita labore non odit quibusdam repellendus sunt.</p>
                </div>
            </div>
        </div>

        <module type="teamcard" template="skin-6" />
    </div>
 <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />

</section>
