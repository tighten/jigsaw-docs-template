<header class="px-4 bg-white border-b mb-8 flex shadow-md">
    <section class="container flex mx-auto px-4">
        <div class="flex flex-1">
            <a href="{{ $page->url('/') }}" class="inline-flex items-center pt-4 pb-2 sm:py-6 font-bold">
                @include('_partials.logo')
            </a>
        </div>
        <div class="flex flex-1 align-right justify-end items-center">
            {{ $slot }}

        </div>
    </section>
</header>
