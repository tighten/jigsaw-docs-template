<header class="px-4 border-b mb-8 flex justify-center shadow-md">
    <div class="">
        <a href="{{ $page->url('/') }}" class="inline-flex items-center pt-4 pb-2 sm:py-6 font-bold">
            @include('_partials.logo')

            <span class="pl-4">
                {{ $page->docsTitle }}
            </span>
        </a>
    </div>
    <div class="flex flex-1 align-right justify-end items-center">
        {{ $slot }}
    </div>
</header>
