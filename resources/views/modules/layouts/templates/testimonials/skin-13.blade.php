<?php

/*

type: layout

name: Testimonial 13

position: 13

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
    <div class="mw-layout-container no-element   container edit " field="layout-testimonials-skin-13-{{ $params['id'] }}" rel="module">
        <div class="row text-center">
            <div class="col-12 col-lg-8 col-lg-6 mx-auto  ">
                <h4>Testimonials</h4>
                <p>Stu Unger is one of the biggest superstars to have immerged from the professional poker world. </p>
                <br /><br /><br />
            </div>
        </div>

        <div></div>

        <module type="testimonials" template="skin-12" project_name="Testimonials 1"/>
    </div>
  <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />

</section>
