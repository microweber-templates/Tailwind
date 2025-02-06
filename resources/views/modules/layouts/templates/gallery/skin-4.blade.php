{{--
type: layout
name: Gallery 4
position: 4
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
    <div class="container mx-auto px-4 edit" id="layout-container{{ $params['id'] }}" field="layout-gallery-skin-4-{{ $params['id'] }}" rel="module">
        <div class="flex flex-wrap justify-center text-center">
            <div class="w-full sm:w-10/12 md:w-4/12 px-4 mb-8 md:mb-20 py-2 md:py-0 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-2.jpg"/>
                </div>
                <div class="py-2 md:py-4 mt-0 md:mt-auto">
                    <h5 class="mb-2 text-xl font-medium">Image Title</h5>
                    <p class="text-gray-600">A short description of the image.</p>
                </div>
            </div>

            <div class="w-full sm:w-10/12 md:w-4/12 px-4 mb-8 md:mb-20 py-2 md:py-0 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-3.jpg"/>
                </div>
                <div class="py-2 md:py-4 mt-0 md:mt-auto">
                    <h5 class="mb-2 text-xl font-medium">Image Title</h5>
                    <p class="text-gray-600">A short description of the image.</p>
                </div>
            </div>

            <div class="w-full sm:w-10/12 md:w-4/12 px-4 mb-8 md:mb-20 py-2 md:py-0 cloneable">
                <div class="aspect-square overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-4.jpg"/>
                </div>
                <div class="py-2 md:py-4 mt-0 md:mt-auto">
                    <h5 class="mb-2 text-xl font-medium">Image Title</h5>
                    <p class="text-gray-600">A short description of the image.</p>
                </div>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
