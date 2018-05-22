@extends('_layouts.master')

@section('body')
<div class="border-b pb-8">
    <input id="docsearch" class="border" type="text" name="docsearch" value="">
</div>

<div class="flex py-8">
    <div class="w-1/4 pr-8">
        @include('_partials.nav')
    </div>
    <div class="markdown w-3/4">
        @yield('documentation_content')
    </div>
</div>
@endsection
