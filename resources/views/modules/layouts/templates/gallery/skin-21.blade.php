{{--
type: layout
name: Gallery 21
description: Gallery 21
categories: Gallery
--}}

@php
    $classes['padding_top'] = $classes['padding_top'] ?? 'mw-p-t-0';
    $classes['padding_bottom'] = $classes['padding_bottom'] ?? 'mw-p-b-0';
    $layout_classes = $layout_classes ?? '';
    $layout_classes .= ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
@endphp

<section class="py-0 section {{ $layout_classes }}">
    <module type="background" id="background-layout--{{ $params['id'] }}" />
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-top" />
    <div class="w-full p-0 edit" field="layout-skin-21-{{ $params['id'] }}" rel="module">
        <div class="flex flex-wrap">
            <div class="w-full">
                <module type="pictures" template="skin-12" class="p-0"/>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
