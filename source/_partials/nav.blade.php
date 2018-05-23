<nav class="nav-list">
    @foreach ($page->navigation as $nodeKey => $nodeData)
        @include('_partials.nav.node', ['level' => 1])
    @endforeach
</nav>
