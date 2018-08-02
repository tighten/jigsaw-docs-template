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
@endcomponent
<section class="container mx-auto">
    <div class="sm:flex">
        <div class="sm:w-1/4 pr-8">
            @include('_partials.nav')
        </div>

        <div class="markdown sm:w-3/4 pl-4">
            @yield('documentation_content')
        </div>
    </div>
</section>
@endsection
