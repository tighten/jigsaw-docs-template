<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta property="og:title" content="{{ $page->docsTitle }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->docsDescription }}" />

        <title>{{ $page->title ? "{$page->title} | " : "" }}{{ $page->docsTitle }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="{{ $page->url('favicon.ico') }}">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    </head>
    <body class="border-t-8">
        <div class="pb-8 content">
            @component('_partials.header', ['page' => $page])
                <input id="docsearch" class="rounded-full bg-grey-lighter py-2 px-4 focus:outline-none search-field" type="text" name="docsearch" value="">

                <a href="#" class="flex lg:hidden ml-4 py-2 px-4 bg-grey-lighter rounded-full justify-center">
                    <svg class="flex items-center fill-current text-grey-dark h-6" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
                    </svg>
                </a>
            @endcomponent

            <section class="container mx-auto">
                <div class="sm:flex">
                    <div class="sm:w-1/4 pr-8">
                        @include('_partials.nav')
                    </div>

                    <div class="markdown sm:w-3/4 pl-4">
                        @yield('documentation_content')
                    </div>
                </div>
            </section>
        </div>

        @include('_partials.footer')

        <script src="{{ $page->url(mix('js/main.js')) }}"></script>
        <script type="text/javascript">
            docsearch({
                apiKey: '{{ $page->docsearchApiKey }}',
                indexName: '{{ $page->docsearchIndexName }}',
                inputSelector: '#docsearch'
            });
        </script>
    </body>
</html>
