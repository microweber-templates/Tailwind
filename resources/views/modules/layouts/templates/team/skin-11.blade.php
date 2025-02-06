<?php

/*

type: layout

name: Team 11

position: 11

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

<style>
    <?php echo '#' . $params['id'] . ' '; ?>
    .center-circle {
        border: 25px solid #fff;
        z-index: 1;
        border-radius: 100%;
    }
</style>
<section class="section <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />
    <div class="mw-layout-container no-element   container edit " field="layout-team-skin-11-{{ $params['id'] }}" rel="module">
        <div class="row text-center text-lg-start d-flex align-items-center justify-content-between">
            <div class="col-12 col-sm-10 col-lg-6 col-lg-5 mx-auto mx-lg-0  ">
                <h6>Feedback Management</h6>
                <p>One of the earliest activities we engaged in when we first got into astronomy is the same one we like to show our children just as soon as their excitement about the night sky begins.</p>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 col-lg-6 mx-auto">
                <div class="d-flex align-items-center position-relative">
                    <div class="w-175 mx-auto position-absolute left-0">
                        <div class="img-as-background rounded-circle square">
                            <img loading="lazy" src="<?php print asset('templates/big2/assets/img/layouts/teamcard/1.jpg'); ?>"/>
                        </div>
                    </div>

                    <div class="mx-auto center-circle">
                        <div class="w-250 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img loading="lazy" src="<?php print asset('templates/big2/assets/img/layouts/teamcard/2.jpg'); ?>"/>
                            </div>
                        </div>
                    </div>

                    <div class="w-175 mx-auto position-absolute right-0">
                        <div class="img-as-background rounded-circle square">
                            <img loading="lazy" src="<?php print asset('templates/big2/assets/img/layouts/teamcard/3.jpg'); ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />

</section>
