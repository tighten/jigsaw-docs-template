<div class="mb-8">
    <header class="container mx-auto px-4">
        <div class="sm:flex">
            <a href="{{ $page->url('/') }}" class="inline-flex items-center w-full pt-4 pb-2 sm:py-6 w-full font-bold">
                @include('_partials.logo')

                <span class="pl-4">
                    {{ $page->docsTitle }}
                </span>
            </a>
        </div>
    </header>
</div>
