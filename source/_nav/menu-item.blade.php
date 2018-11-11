<li class="list-reset pl-4">
    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Menu item with URL--}}
        <a href="{{ $page->url($url) }}"
            class="nav-menu__item hover:text-blue {{ $page->isActive($url) ? 'text-blue' : '' }}"
        >
            {{ $label }}
        </a>
    @else
        {{-- Menu item without URL--}}
        <p class="nav-menu__item font-bold text-grey-darkest">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children])
    @endif
</li>
