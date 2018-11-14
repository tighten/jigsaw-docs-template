@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-4xl mx-auto px-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div class="docSearch-content w-full pb-16 lg:w-3/4 lg:pl-4" v-pre>
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
