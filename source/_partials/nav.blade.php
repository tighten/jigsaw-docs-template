<nav class="nav-list">
    {{-- temp classes for proof of concept --}}
    <style>
        .nav-list a {
            display: block;
            border-bottom: 1px solid #eee;
        }
        .level-1 {
            margin-left: 1em;
        }
        .level-2 {
            margin-left: 2em;
        }
        .level-3 {
            margin-left: 3em;
        }
    </style>
    @foreach ($page->navigation as $nodeKey => $nodeData)
        @include('_partials.nav-node', ['level' => 1])
    @endforeach
</nav>
