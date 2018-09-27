<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description or $page->description }}">

        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description }}" />

        <title>{{ $page->title ? "{$page->title} | " : "" }}{{ $page->title }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="{{ $page->url('favicon.ico') }}">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link rel="stylesheet" href="{{ $page->url(mix('css/main.css')) }}">
    </head>
    <body>
        <main id="vue-app" class="content">
            <header class="bg-white border-b mb-8 py-4 flex shadow">
                <section class="container max-w-2xl flex mx-auto px-4">
                    <div class="flex flex-1">
                        <a href="{{ $page->url('/') }}" title="{{ $page->title }} home" class="inline-flex items-center font-bold">
                            <img class="h-8 md:h-10" src="/assets/img/logo.svg" alt="{{ $page->title }} logo" />
                        </a>
                    </div>

                    <div class="flex flex-1 align-right justify-end items-center">
                        <input id="docsearch" class="bg-grey-lighter outline-none px-4r py-2 rounded-full text-grey-darker search-field" type="text" name="docsearch" value="">

                        <navigation-toggle></navigation-toggle>
                    </div>
                </section>
            </header>

            @yield('body')
        </main>

        <script src="{{ $page->url(mix('js/main.js')) }}"></script>
        @yield('scripts')

        <footer class="bg-white text-center py-4 mt-12" role="contentinfo">
            <p>&copy; {{ $page->copyrightHolder}}. Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a> and <a href="https://tailwindcss.com" title="Tailwindcss a utility-first css framework">Tailwind CSS</a>.</p>
        </footer>
    </body>
</html>
