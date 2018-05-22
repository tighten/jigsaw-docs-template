@extends('_layouts.master')

@section('body')
<div class="border">
    <input id="docsearch" class="docsearch__input" type="text" name="docsearch" value=""/>
    <span class="docsearch__icon"></span>
</div>

<div class="">
    <div class="">
        @include('_partials.nav')
    </div>
    <div class="markdown">
        @yield('documentation_content')
    </div>
</div>
@endsection
