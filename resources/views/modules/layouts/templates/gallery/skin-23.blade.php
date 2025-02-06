{{--
type: layout
name: Gallery 23
description: Gallery 23
categories: Gallery
--}}

@php
    $classes['padding_top'] = $classes['padding_top'] ?? 'py-20';
    $classes['padding_bottom'] = $classes['padding_bottom'] ?? 'py-20';
    $layout_classes = $layout_classes ?? '';
    $layout_classes .= ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
@endphp

<section class="section {{ $layout_classes }}">
    <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />
    <div class="w-full p-0 edit" field="layout-skin-23-{{ $params['id'] }}" rel="module">
        <div class="flex flex-wrap">
            <div class="w-full">
                <module type="pictures" template="skin-3-guest"/>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
