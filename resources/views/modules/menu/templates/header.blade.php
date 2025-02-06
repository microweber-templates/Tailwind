{{--
type: layout
name: Header Menu
description: Header menu template
--}}

@php
$menu_filter['ul_class'] = 'flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700';
$menu_filter['li_class'] = 'group';
$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 {active_class}" href="{url}">{title}</a>';
$mt = menu_tree($menu_filter);
@endphp

<div class="items-center justify-between font-medium w-full md:flex md:w-auto md:order-1">
    @if($mt)
        {!! $mt !!}
    @else
        {!! lnotif("There are no items in the menu <b>" . $menu_name . '</b>') !!}
    @endif
</div>
