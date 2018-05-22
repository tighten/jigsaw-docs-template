@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->docsTitle }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->docsDescription }}" />
@endpush

@section('body')
<div class="md:flex">
    <div class="mb-8 lg:mb-0 px-4 w-full">
        <div class="my-6 pb-6 border-b border-light-grey">
            <p>Welcome to the Jigsaw docs.</p>
        </div>
        <p>@todo set up this layout etc.</p>
    </div>
</div>
@endsection
