@extends('_layouts.master')

@section('body')
@component('_partials.header', ['page' => $page])
    <input id="docsearch" class="bg-grey-lighter outline-none px-4r py-2 rounded-full text-grey-darker search-field" type="text" name="docsearch" value="">

    <responsive-navigation-toggle></responsive-navigation-toggle>
@endcomponent

<section class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row">
        <responsive-navigation navigation-links="{{ $page->navigation }}">
            @include('_partials.nav')
        </responsive-navigation>

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
