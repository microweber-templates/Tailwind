{{-- 
type: layout
name: Gallery 12
position: 12
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
    <div class="container mx-auto px-4 edit" field="layout-gallery-skin-12-{{ $params['id'] }}" rel="module">
        <div class="flex flex-wrap justify-center text-center">
            <div class="w-full lg:w-8/12 mx-auto mb-8">
                <h3 class="text-3xl font-semibold">
                    An Awesome Title Related With This Great Images <br>
                    Ordered on Gallery
                </h3>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full md:w-3/12 lg:w-2/12 flex items-start lg:items-center order-3 lg:order-1 my-0 lg:my-24">
                <div class="aspect-square w-full overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-2.jpg"/>
                </div>
            </div>

            <div class="w-full lg:w-7/12 mx-auto order-1 lg:order-2">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-9/12 flex items-center">
                        <div class="w-full h-[300px] mb-6 overflow-hidden">
                            <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-7.jpg"/>
                        </div>
                    </div>
                    <div class="w-full md:w-3/12 flex items-end">
                        <div class="aspect-square w-full mb-6 overflow-hidden">
                            <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-6.jpg"/>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full md:w-3/12 flex items-start">
                        <div class="aspect-square w-full mb-6 overflow-hidden">
                            <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-3.jpg"/>
                        </div>
                    </div>
                    <div class="w-full md:w-9/12 flex items-center">
                        <div class="w-full h-[300px] mb-6 overflow-hidden">
                            <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-4.jpg"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-6/12 lg:w-3/12 flex items-center order-2 lg:order-3 ml-auto mb-6 lg:mb-0 my-0 lg:my-24">
                <div class="aspect-square w-full overflow-hidden">
                    <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery-1-5.jpg"/>
                </div>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
