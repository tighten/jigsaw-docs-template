@extends('_layouts.master')

@section('navigation')
<navigation-toggle></navigation-toggle>
@endsection

@section('body')
<section class="container max-w-2xl mx-auto px-4">
    <div class="flex flex-col lg:flex-row">
        <navigation :links='@json($page->navigation)'></navigation>

        <div class="w-full text-blue-darker pb-16 markdown transition-sm lg:w-3/4 lg:pl-4">
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
