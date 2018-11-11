@extends('_layouts.master')

@section('navigation')
<navigation-toggle></navigation-toggle>
@endsection

@section('body')
<section class="container max-w-4xl mx-auto px-8 py-3">
    <div class="flex flex-col lg:flex-row">
        <nav class="w-full mt-1 lg:pr-8 lg:w-1/4">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div class="w-full pb-16 lg:w-3/4 lg:pl-4" v-pre>
            @yield('content')
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
