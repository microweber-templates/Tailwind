<?php

/*

type: layout

name: Testimonial 15

position: 15

categories: Testimonials

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

<section class="section    <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />
    <div class="mw-layout-container no-element   container edit" field="layout-testimonials-skin-15-{{ $params['id'] }}" rel="module">
        <module type="testimonials" template="skin-13" project_name="Testimonials 1"/>
    </div>
  <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />

</section>
