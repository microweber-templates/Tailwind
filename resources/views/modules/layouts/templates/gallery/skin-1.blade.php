{{-- 
type: layout
name: Gallery 1
position: 1
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
    <div class="container mx-auto edit" field="layout-gallery-skin-1-{{ $params['id'] }}" rel="module">
        <div class="flex flex-wrap m-0">
            <div class="w-full lg:w-1/2 flex flex-wrap pr-5 pb-5">
                <div class="w-1/2 pr-2">
                    <div class="aspect-square overflow-hidden">
                        <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-2.jpg">
                    </div>
                </div>

                <div class="w-1/2 pl-2">
                    <div class="aspect-square overflow-hidden">
                        <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-3.jpg">
                    </div>
                </div>

                <div class="w-full pt-5">
                    <div class="aspect-square overflow-hidden">
                        <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-1.jpg">
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap pr-5 pb-5">
                <div class="w-full pb-5">
                    <div class="aspect-square overflow-hidden">
                        <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-4.jpg">
                    </div>
                </div>

                <div class="w-1/2 pr-2">
                    <div class="aspect-square overflow-hidden">
                        <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-5.jpg">
                    </div>
                </div>

                <div class="w-1/2 pl-2">
                    <div class="aspect-square overflow-hidden">
                        <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-6.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
