@if (is_string($nodeData))
    <a class="level-{{ $level }}" href="{{ $page->url("docs/{$nodeData}") }}">{{ $nodeKey }}</a>
@else
    {{-- complex node, with children --}}

    {{-- handle root --}}
    @if (array_key_exists('root', $nodeData))
        {{-- Root was specifically set --}}
        <a class="level-{{ $level }}" href="{{ $page->url('docs/' . $nodeData['root']) }}>{{ $nodeKey }}</a>
    @else
        <a class="level-{{ $level }}" data-node-data="{{ array_key_exists('root', $nodeData) ? 'true and should not be in this conditional' : 'false' }}">{{ $nodeKey }} - {{ $nodeData }}</a>
    @endif

    {{-- handle children --}}
    @foreach ($nodeData['children'] as $childKey => $childData)
        @include('_partials.nav-node', [
            'nodeKey' => $childKey,
            'nodeData' => $childData,
            'level' => $level + 1,
        ])
    @endforeach
@endif
