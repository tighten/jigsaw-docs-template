@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl py-10 mx-auto px-4 md:py-16">
    <div class="flex flex-col-reverse mb-8 lg:flex-row md:mb-16">
        <div class="mt-8">
            <h1 class="font-normal tracking-normal leading-normal">
                Welcome to {{ $page->title }} <br>
                Elegant docs powered by Jigsaw
            </h1>

            <p class="w-3/4 text-lg">{{ $page->description }}</p>

            <div class="flex mt-8">
                <a href="/docs/installation" title="{{ $page->title }} getting started" class="bg-blue py-1 px-6 text-white rounded mr-4">Get started</a>

                <a href="https://jigsaw.tighten.co" title="Jigsaw by Tighten" class="bg-grey-light py-1 px-6 text-blue rounded">Install</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->title }} large logo" class="max-w-md mb-4 mx-auto md:mb-0 ">
    </div>

    <div class="flex flex-col items-center justify-center md:items-start md:flex-row md:justify-between">
        <div class="flex flex-col w-full mb-6 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-8 w-8 mb-4" alt="window icon">
            <h3 class="font-normal tracking-normal leading-normal mb-2">Blade <br> Templating </h3>
            <p class="text-sm leading-normal">Blade is a powerful, simple, and beautiful templating language, but until now it wasn't an option if you were building a simple static site that didn't need a complex PHP backend</p>
        </div>

        <div class="flex flex-col px-0 md:px-2 w-full mb-6 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-8 w-8 mb-4" alt="terminal icon">
            <h3 class="font-normal tracking-normal leading-normal mb-2">Use Markdown for <br> content-driven pages</h3>
            <p class="text-sm leading-normal">Markdown is a fantastic writing format for things like articles, blog posts, or documentation pages. Jigsaw makes it painless to work with Markdown content.</p>
        </div>

        <div class="flex flex-col w-full md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-8 w-8 mb-4" alt="stack icon">
            <h3 class="font-normal tracking-normal leading-normal mb-2">Compile your assets using <br> Laravel Mix </h3>
            <p class="text-sm leading-normal">Jigsaw sites are configured with support for Laravel Mix out of the box. If you've ever used Mix in a Laravel project, you already know how to use Mix with Jigsaw.</p>
        </div>
    </div>
</section>
@endsection
