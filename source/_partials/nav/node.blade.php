@if (is_string($nodeData))
    {{-- Single node, no children --}}
    @include('_partials.nav.single-item', [
        'slug' => $nodeData,
        'title' => $nodeKey,
        'level' => $level,
    ])

@else
    {{-- Complex node, with children --}}

    {{-- Handle root --}}
    @if ($nodeData->has('root'))
        {{-- Root was specifically set --}}
        @include('_partials.nav.linked-section-head', [
            'slug' => $nodeData->root,
            'title' => $nodeKey,
            'level' => $level,
        ])
    @else
        {{-- Root was not set; just show a header --}}
        @include('_partials.nav.unlinked-section-head', [
            'title' => $nodeKey,
            'level' => $level,
        ])
    @endif

    {{-- Recursively handle children --}}
    @foreach ($nodeData['children'] as $childKey => $childData)
        @include('_partials.nav.node', [
            'nodeKey' => $childKey,
            'nodeData' => $childData,
            'level' => $level + 1,
        ])
    @endforeach
@endif
