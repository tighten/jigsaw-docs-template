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
                <input id="docsearch" class="rounded-full bg-grey-lighter py-2 px-4 focus:outline-none" type="text" name="docsearch" value="">
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

        <script type="text/javascript" src="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.js"></script>
        <script type="text/javascript">
            docsearch({
                apiKey: '{{ $page->docsearchApiKey }}',
                indexName: '{{ $page->docsearchIndexName }}',
                inputSelector: '#docsearch'
            });
        </script>
    </body>
</html>
