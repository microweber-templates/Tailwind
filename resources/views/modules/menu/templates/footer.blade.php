{{--
type: layout
name: Footer Menu
description: Footer menu template
--}}

@php
$menu_filter['ul_class'] = 'text-gray-500 dark:text-gray-400 font-medium';
$menu_filter['li_class'] = 'mb-4';
$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" href="{url}" class="hover:underline {active_class}">{title}</a>';
$mt = menu_tree($menu_filter);
@endphp

<div>
    @if($mt)
        {!! $mt !!}
    @else
        {!! lnotif("There are no items in the menu <b>" . $menu_name . '</b>') !!}
    @endif
</div>
