{{--
type: layout
name: Gallery 7
position: 7
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
    <div class="container mx-auto edit" field="layout-gallery-skin-7-{{ $params['id'] }}" rel="module">
        <div class="flex flex-wrap justify-center text-center">
            <div class="w-full sm:w-5/12 md:w-3/12 mb-5 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-2.jpg"/>
                </div>
                <div class="py-4 mt-auto">
                    <h5 class="mb-2 text-xl font-medium">Pictures In The Sky</h5>
                    <p class="text-gray-600">History of modern astronomy, there is probably no one.</p>
                </div>
            </div>

            <div class="w-full sm:w-5/12 md:w-3/12 mb-5 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-3.jpg"/>
                </div>
                <div class="py-4 mt-auto">
                    <h5 class="mb-2 text-xl font-medium">Radio Astronomy</h5>
                    <p class="text-gray-600">History of modern astronomy, there is probably no one.</p>
                </div>
            </div>

            <div class="w-full sm:w-5/12 md:w-3/12 mb-5 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-4.jpg"/>
                </div>
                <div class="py-4 mt-auto">
                    <h5 class="mb-2 text-xl font-medium">The Amazing Hubble</h5>
                    <p class="text-gray-600">History of modern astronomy, there is probably no one.</p>
                </div>
            </div>

            <div class="w-full sm:w-5/12 md:w-3/12 mb-5 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-5.jpg"/>
                </div>
                <div class="py-4 mt-auto">
                    <h5 class="mb-2 text-xl font-medium">Look Up In The Sky</h5>
                    <p class="text-gray-600">History of modern astronomy, there is probably no one.</p>
                </div>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
