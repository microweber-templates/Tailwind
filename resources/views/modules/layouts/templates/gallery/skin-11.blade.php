{{--
type: layout
name: Gallery 11
position: 11
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
    <div class="container mx-auto px-4 edit" field="layout-gallery-skin-11-{{ $params['id'] }}" rel="module">
        <div class="flex justify-center">
            <div class="w-full lg:w-10/12">
                <div class="flex flex-wrap text-center md:text-left">
                    <div class="w-full sm:w-10/12 md:w-6/12 mx-auto mb-20 cloneable">
                        <div class="h-full flex flex-col">
                            <div class="aspect-square overflow-hidden">
                                <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery/gallery-1-1.jpg"/>
                            </div>
                            <div class="py-4">
                                <p class="text-gray-600">For most of us, it's a curiosity, an amusement to see what they say our day will be like based.</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-10/12 md:w-6/12 mx-auto mt-0 md:mt-36 mb-20 cloneable">
                        <div class="h-full flex flex-col">
                            <div class="aspect-square overflow-hidden">
                                <img class="w-full h-full object-cover" loading="lazy" src="{{ template_url() }}img/layouts/gallery/gallery-1-2.jpg"/>
                            </div>
                            <div class="py-4">
                                <p class="text-gray-600">Having used discount toner cartridges for twenty years, there have been a lot of changes in the toner.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
