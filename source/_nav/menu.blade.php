<nav class="nav-list">
    @foreach ($page->navigation as $nodeKey => $nodeData)
        @include('_nav.node', ['level' => 1])
    @endforeach
</nav>
