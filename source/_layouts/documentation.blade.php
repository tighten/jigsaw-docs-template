@extends('_layouts.master')

@section('body')

@component('_partials.header', ['page' => $page])
    <input id="docsearch" class="border" type="text" name="docsearch" value="">
@endcomponent

<div class="sm:flex">
    <div class="sm:w-1/4 pr-8">
        @include('_partials.nav')
    </div>
    <div class="markdown sm:w-3/4">
        @yield('documentation_content')
    </div>
</div>
@endsection
