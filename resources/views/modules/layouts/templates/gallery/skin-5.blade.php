{{--
type: layout
name: Gallery 5
position: 5
categories: Gallery
--}}

@php
    $classes['padding_top'] = $classes['padding_top'] ?? '';
    $classes['padding_bottom'] = $classes['padding_bottom'] ?? '';
    $layout_classes = $layout_classes ?? '';
    $layout_classes .= ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
@endphp

<section class="section {{ $layout_classes }}">
    <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />
    <div class="container mx-auto px-4 edit" field="layout-gallery-skin-5-{{ $params['id'] }}" rel="module">
        <module type="pictures" template="skin-2"/>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
