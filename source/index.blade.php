@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl py-10 mx-auto px-6 text-base transition-fast md:py-16">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-20">
        <div class="mt-8">
            <h1>{{ $page->siteName }}</h1>

            <h2 class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg sm:w-3/4">Give your documentation a boost with Jigsaw. <br>Generate elegant, static docs quickly and easily.</p>

            <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue hover:bg-blue-dark py-2 px-6 text-white rounded mr-4">Get started</a>

                <a href="https://jigsaw.tighten.co" title="Jigsaw by Tighten" class="bg-grey-light hover:bg-grey py-2 px-6 text-grey-dark hover:text-grey-darker rounded">About Jigsaw</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="max-w-md mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="flex flex-col -mx-2 items-center justify-center md:items-start md:flex-row md:-mx-4 md:justify-between">
        <div class="flex flex-col w-full mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-8 w-8 mb-4" alt="window icon">
            <h3 class="text-xl font-normal text-blue-darkest mb-3">Blade <br>Templating</h3>
            <p>Blade is a powerful, simple, and beautiful templating language, but until now it wasn't an option if you were building a simple static site that didn't need a complex PHP backend</p>
        </div>

        <div class="flex flex-col w-full mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-8 w-8 mb-4" alt="terminal icon">
            <h3 class="text-xl font-normal text-blue-darkest mb-3">Use Markdown for <br> content-driven pages</h3>
            <p>Markdown is a fantastic writing format for things like articles, blog posts, or documentation pages. Jigsaw makes it painless to work with Markdown content.</p>
        </div>

        <div class="flex flex-col w-full mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-8 w-8 mb-4" alt="stack icon">
            <h3 class="text-xl font-normal text-blue-darkest mb-3">Compile your assets using <br> Laravel Mix </h3>
            <p>Jigsaw sites are configured with support for Laravel Mix out of the box. If you've ever used Mix in a Laravel project, you already know how to use Mix with Jigsaw.</p>
        </div>
    </div>
</section>
@endsection
