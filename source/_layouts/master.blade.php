<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description or $page->docsDescription }}">

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

        <link rel="stylesheet" href="{{ $page->url(mix('css/main.css')) }}">
    </head>
    <body class="border-t-8">
        <div id="vue-app" class="pb-8 content">
            @component('_partials.header', ['page' => $page])
                <input id="docsearch" class="bg-grey-lighter outline-none px-4r py-2 rounded-full text-grey-darker search-field" type="text" name="docsearch" value="">

                <a href="#" class="bg-grey-lighter flex justify-center lg:hidden ml-4 px-4 py-2 rounded-full" @click="showMobileNav = !showMobileNav;">
                    <svg class="fill-current flex h-6 items-center text-grey-dark" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
                    </svg>
                </a>
            @endcomponent

            <section class="container mx-auto px-4">
                <div class="flex flex-col lg:flex-row">
                    <responsive-navigation :show-mobile="showMobileNav">
                        @include('_partials.nav')
                    </responsive-navigation>

                    <div class="markdown w-full lg:w-3/4 lg:pl-4">
                        @yield('documentation_content')
                    </div>
                </div>
            </section>
        </div>

        @include('_partials.footer')

        <script src="{{ $page->url(mix('js/main.js')) }}"></script>
        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <script type="text/javascript">
                docsearch({
                    apiKey: '{{ $page->docsearchApiKey }}',
                    indexName: '{{ $page->docsearchIndexName }}',
                    inputSelector: '#docsearch'
                });
            </script>
        @endif
    </body>
</html>
