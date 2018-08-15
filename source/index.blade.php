@extends('_layouts.master')

@section('documentation_content')
    <div class="md:flex">
        <div class="mb-8 lg:mb-0 px-4 w-full">
            <div class="my-6 pb-6 border-b border-light-grey">
                <p>Welcome to the Jigsaw docs.</p>
            </div>
            <p><a href="{{ $page->url('docs/installation') }}">Get started!</a></p>
        </div>
    </div>
@endsection
