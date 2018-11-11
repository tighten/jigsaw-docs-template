<li>
    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Menu item with URL--}}
        <a class="menu-item" href="{{ $page->url($url) }}">{{ $label }}</a>
    @else
        {{-- Menu item without URL--}}
        <a class="menu-item font-bold text-grey-darkest">{{ $label }}</a>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children])
    @endif
</li>
