{{--
type: layout
name: Gallery 25
position: 25
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
    <div class="w-full px-4 edit" field="layout-gallery-skin-25-{{ $params['id'] }}" rel="module">
        <div class="w-full md:w-10/12 mx-auto mb-20 cloneable">
            <div class="mx-auto mb-20 lg:flex lg:justify-between">
                <div class="w-full lg:w-6/12">
                    <h1 class="mb-3 text-6xl">My Best Captured</h1>
                </div>

                <div class="w-full lg:w-4/12 lg:pt-4">
                    <p>I wanted to tell a story on the street. And while often in magazines the act of walking is portrayed in a stereotyped and frankly boring way, this is where looking to the future is for me.</p>
                </div>
            </div>

            <module type="pictures" template="skin-15"/>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--{{ $params['id'] }}-bottom" />
</section>
