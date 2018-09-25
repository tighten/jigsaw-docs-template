@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl py-16 mx-auto px-4">
    <div class="flex flex-col lg:flex-row mb-6 md:mb-16">
        <div>
            <h1 class="font-normal tracking-normal leading-normal">
                Welcome to Jigsaw Docs <br>
                Static sites for modern developers
            </h1>
            <p class="w-3/4 text-lg">
                Jigsaw is a framework for rapidly building static sites using the same modern tooling that powers your web applications.
            </p>

            <div class="flex mt-8">
                <a href="/docs/installation" title="Get started in the docs" class="bg-blue py-1 px-6 text-white rounded mr-4">Get started</a>

                <a href="/docs" title="Download Jigsaw" class="bg-grey-light py-1 px-6 text-blue rounded">Download</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->docsTitle }}" class="w-full w-1/2">
    </div>

    <div class="flex justify-between">
        <div class="flex flex-col w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-8 w-8 mb-4">
            <h3 class="font-normal tracking-normal leading-normal mb-2">Blade <br> Templating </h3>
            <p class="text-sm leading-normal">Blade is a powerful, simple, and beautiful templating language, but until now it wasn't an option if you were building a simple static site that didn't need a complex PHP backend</p>
        </div>

        <div class="flex flex-col w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-8 w-8 mb-4">
            <h3 class="font-normal tracking-normal leading-normal mb-2">Use Markdown for <br> content-driven pages</h3>
            <p class="text-sm leading-normal">Markdown is a fantastic writing format for things like articles, blog posts, or documentation pages. Jigsaw makes it painless to create a layout in Blade, and fill it with content written in Markdown.</p>
        </div>

        <div class="flex flex-col w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-8 w-8 mb-4">
            <h3 class="font-normal tracking-normal leading-normal mb-2">Compile your assets using <br> Laravel Mix </h3>
            <p class="text-sm leading-normal">Jigsaw sites are configured with support for Laravel Mix out of the box. If you've ever used Mix in a Laravel project, you already know how to use Mix with Jigsaw.</p>
        </div>
    </div>
</section>
@endsection
