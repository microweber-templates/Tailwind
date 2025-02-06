<?php

/*

type: layout

name: Testimonial 9

position: 9

categories: Testimonials

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

<section class="section <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />
    <div class="mw-layout-container no-element   container edit" field="layout-testimonials-skin-9-{{ $params['id'] }}" rel="module">
        <module type="testimonials" template="skin-4" project_name="Testimonials 1"/>
    </div>
  <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />

</section>
