<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="bg-grey-lightest text-grey-darkest leading-normal font-sans">
        <header class="bg-white border-b h-24 mb-8 py-4 flex items-center shadow" role="banner">
            <div class="container max-w-4xl flex mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-8 mr-3 md:h-10" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                        <h1 class="hidden md:block text-2xl text-blue-darker font-semibold my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div class="flex-1 text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        <input name="docsearch" type="text" id="docsearch" placeholder="Search"
                            class="docsearch transition-fast w-full sm:w-2/3 md:w-1/3 bg-grey-lighter outline-none rounded-full text-grey-darker border border-grey focus:border-blue-light px-4 py-2">
                    @endif
                </div>
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="min-h-screen">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <script type="text/javascript">
                docsearch({
                    apiKey: '{{ $page->docsearchApiKey }}',
                    indexName: '{{ $page->docsearchIndexName }}',
                    inputSelector: '#docsearch',
                    debug: false // Set debug to true if you want to inspect the dropdown
                });
            </script>
        @endif

        @stack('scripts')

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <nav>
                <ul class="flex flex-col md:flex-row justify-center list-reset">
                    <li class="md:mr-2">
                        &copy; <a href="https://tighten.co" title="Tighten website">Tighten</a> {{ date('Y') }}.
                    </li>
                    <li>
                        Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                        and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                    </li>
                </ul>
            </nav>
        </footer>
    </body>
</html>
