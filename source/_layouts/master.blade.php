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

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/github.min.css">
        <link rel="stylesheet" href="{{ $page->url(mix('css/main.css')) }}">
    </head>
    <body class="border-t-8">
        <div id="vue-app" class="pb-8 content">
            @yield('body')
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>
        <script src="{{ $page->url(mix('js/main.js')) }}"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        @yield('scripts')
        @include('_partials.footer')
    </body>
</html>
