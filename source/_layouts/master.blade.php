<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description or $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->siteName }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }} | {{ $page->title }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="{{ $page->url('favicon.ico') }}">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link rel="stylesheet" href="{{ $page->url(mix('css/main.css')) }}">
    </head>
    <body>
        <div id="vue-app">
            <header class="bg-white border-b mb-8 py-4 flex shadow-lg" role="banner">
                <div class="container max-w-2xl flex mx-auto px-6">
                    <div class="flex items-center">
                        <a href="{{ $page->url('/') }}" title="{{ $page->siteName }} home" class="inline-flex items-center mr-3 font-bold">
                            <img class="h-8 md:h-10" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />
                        </a>
                        <h3 class="font-normal">{{ $page->siteName }}</h3>
                    </div>

                    <div class="flex flex-1 align-right justify-end items-center">
                        <input id="docsearch" type="text" name="docsearch"
                            placeholder="Search"
                            class="w-2/3 bg-grey-lighter outline-none px-4 py-2 rounded-full text-grey-darker transition-sm docsearch md:w-1/3">

                        @yield('navigation')
                    </div>
                </div>
            </header>

            <main role="main">
                @yield('body')
            </main>
        </div>

        <script src="{{ $page->url(mix('js/main.js')) }}"></script>
        @yield('scripts')

        <footer class="bg-white text-center py-4 mt-12" role="contentinfo">
            <p class="text-sm">&copy; {{ $page->copyrightHolder}} {{ date('Y') }}. Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a> and <a href="https://tailwindcss.com" title="Tailwindcss a utility-first css framework">Tailwind CSS</a>.</p>
        </footer>
    </body>
</html>
