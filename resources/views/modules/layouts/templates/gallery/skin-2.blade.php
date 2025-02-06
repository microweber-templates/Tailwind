{{-- 
type: layout
name: Gallery 2
position: 2
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
    <div class="container mx-auto px-4 edit" field="layout-gallery-skin-2-{{ $params['id'] }}" rel="module">
        <module type="slider_v2"/>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
