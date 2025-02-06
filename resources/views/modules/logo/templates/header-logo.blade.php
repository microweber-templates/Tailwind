{{--
type: layout
name: Header Logo
description: Header logo template
--}}

<a href="{{ site_url() }}" class="flex items-center space-x-3 rtl:space-x-reverse">
    @if($logo_image)
        <img src="{{ $logo_image }}" class="h-8" alt="{{ $logo_text }}" />
    @endif
    @if($logo_text)
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ $logo_text }}</span>
    @elseif(!$logo_image)
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Site Logo</span>
    @endif
</a>
