{{--
type: layout
name: Gallery 24
position: 24
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
    <div class="w-full p-0 edit" field="layout-gallery-skin-24-{{ $params['id'] }}" rel="module">
        <div class="flex flex-wrap justify-center text-center">
            <div class="w-full sm:w-10/12 md:w-6/12 p-0 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery/blue/gallery-1.jpg"/>
                </div>
            </div>

            <div class="w-full sm:w-10/12 md:w-6/12 p-0 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery/blue/gallery-2.jpg"/>
                </div>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
