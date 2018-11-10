@if (! $nodeData->has('children'))
    {{-- Single node, no children --}}
    @include('_nav.single-item', [
        'slug' => $nodeData,
        'title' => $nodeKey,
        'level' => $level,
    ])
@else
    {{-- Complex node, with children --}}

    {{-- Handle root --}}
    @if ($nodeData->has('url'))
        {{-- Root was specifically set --}}
        @include('_nav.linked-section-head', [
            'slug' => $nodeData->url,
            'title' => $nodeKey,
            'level' => $level,
        ])
    @else
        {{-- Root was not set; just show a header --}}
        @include('_nav.unlinked-section-head', [
            'title' => $nodeKey,
            'level' => $level,
        ])
    @endif

    {{-- Recursively handle children --}}
    @foreach ($nodeData->get('children') as $childKey => $childData)
        @include('_nav.node', [
            'nodeKey' => $childKey,
            'nodeData' => $childData,
            'level' => $level + 1,
        ])
    @endforeach
@endif
