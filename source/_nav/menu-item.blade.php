<li class="pl-4">
    <span class="block mb-3 mt-0 {{-- text-sm --}} no-underline">
        @if ($url = is_string($item) ? $item : $item->url)
            {{-- Menu item with URL--}}
            <a href="{{ $page->url($url) }}"
                class="{{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }} {{ $page->isActive($url) ? 'active font-semibold text-blue-500' : 'text-gray-800' }} hover:text-blue-500"
            >
                {{ $label }}
            </a>
        @else
            {{-- Menu item without URL--}}
            <p class="text-gray-600">{{ $label }}</p>
        @endif
    </span>

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif
</li>
