@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-8xl mx-auto px-6 md:px-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="hidden lg:hidden w-auto -mt-12 -mx-8 mb-8 p-4 pt-8 bg-gray-200 border-b shadow">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>
        <nav class="hidden lg:block w-1/4 mt-1 -mx-4 pr-4">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div class="DocSearch-content w-full lg:w-3/5 pb-16 lg:pl-4 break-words">
            @yield('content')
        </div>
    </div>
</section>
@endsection
