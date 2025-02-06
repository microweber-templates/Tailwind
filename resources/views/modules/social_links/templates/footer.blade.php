{{--
type: layout
name: Footer Social Links
description: Footer social links template
--}}

<div class="flex mt-4 sm:justify-center sm:mt-0">
    @if($facebook_enabled)
        <a href="{{ $facebook_url }}" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            @svg('modules.social_links-facebook')
            <span class="sr-only">Facebook page</span>
        </a>
    @endif

    @if($x_enabled)
        <a href="{{ $x_url }}" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
            @svg('modules.social_links-x')
            <span class="sr-only">X (Twitter) page</span>
        </a>
    @endif

    @if($instagram_enabled)
        <a href="{{ $instagram_url }}" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
            @svg('modules.social_links-instagram')
            <span class="sr-only">Instagram page</span>
        </a>
    @endif

    @if($linkedin_enabled)
        <a href="{{ $linkedin_url }}" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
            @svg('modules.social_links-linkedin')
            <span class="sr-only">LinkedIn page</span>
        </a>
    @endif

    @if($youtube_enabled)
        <a href="{{ $youtube_url }}" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
            @svg('modules.social_links-youtube')
            <span class="sr-only">YouTube page</span>
        </a>
    @endif
</div>
