@extends('_layouts.master')

@section('navigation')
<header class="p-4 bg-white border-b mb-8 flex shadow">
    <section class="container flex mx-auto px-4">
        <div class="flex flex-1">
            <a href="{{ $page->url('/') }}" class="inline-flex items-center font-bold">
                <img src="/assets/img/logo.svg" alt="Logo" />
            </a>
        </div>

        <div class="flex flex-1 align-right justify-end items-center">
            <input id="docsearch" class="bg-grey-lighter outline-none px-4r py-2 rounded-full text-grey-darker search-field" type="text" name="docsearch" value="">

            <navigation-toggle></navigation-toggle>
        </div>
    </section>
</header>
@endsection

@section('body')
<section class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row">
        <navigation navigation-links="{{ $page->navigation }}"></navigation>

        <div class="markdown w-full lg:w-3/4 lg:pl-4">
            @yield('documentation_content')
        </div>
    </div>
</section>
@endsection

@section('scripts')
@if ($page->docsearchApiKey && $page->docsearchIndexName)
    <script type="text/javascript">
        docsearch({
            apiKey: '{{ $page->docsearchApiKey }}',
            indexName: '{{ $page->docsearchIndexName }}',
            inputSelector: '#docsearch'
        });
    </script>
@endif
@endsection
