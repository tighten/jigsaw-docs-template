@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->docsTitle }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->docsDescription }}" />
@endpush

@section('body')
@component('_partials.header', ['page' => $page])
    <input id="docsearch" class="rounded-full bg-grey-lighter py-2 px-4 focus:outline-none" type="text" name="docsearch" value="">

    <a href="#" class="lg:hidden ml-4 p-2 bg-grey-lighter rounded-full">
        <svg class="flex items-center fill-current text-grey-dark h-6 w-6" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
        </svg>
    </a>
@endcomponent
<div class="container mx-auto">
    <div class="sm:flex">
        <nav class="hidden lg:block sm:w-1/4 pr-8 nav-list" role="navigation">
            @foreach ($page->navigation as $nodeKey => $nodeData)
                @include('_partials.nav.node', ['level' => 1])
            @endforeach
        </nav>

        <div class="w-full lg:w-3/4 pl-4 markdown">
            @yield('documentation_content')
        </div>
    </div>
</div>
@endsection
