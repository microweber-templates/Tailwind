<?php

/*

type: layout

name: Default

description: Default Menu Item skin

*/
?>
<div id="mega-menu-full-dropdown" class="  group-hover:block bg-gray-50 md:bg-white left-0 w-full absolute mt-4 border-gray-200 shadow-xs  border-y dark:bg-gray-800 dark:border-gray-600">
    <div  rel="{{$menu_item_id}}" field="mega_menu_item" class="edit grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">

        <div>
            <module type="menu" template="mega_menu_item_default" name="mega_menu_item_{{$menu_item_id}}" />
        </div>

        <div>
            <module type="maps" />
        </div>

    </div>
</div>
