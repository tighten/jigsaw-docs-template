<div class="docsearch-wrapper">
    <input
        id="docsearch"
        class="docsearch h-10 transition-fast w-full lg:w-1/2 xl:w-1/3 bg-grey-lighter outline-none rounded-full text-grey-darker border border-grey focus:border-blue-light ml-auto px-4 py-2"
        name="docsearch"
        type="text"
        placeholder="Search"
    >
</div>

@push('scripts')
    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <script type="text/javascript">
            docsearch({
                apiKey: '{{ $page->docsearchApiKey }}',
                indexName: '{{ $page->docsearchIndexName }}',
                inputSelector: '#docsearch',
                debug: true // Set debug to true if you want to inspect the dropdown
            });
        </script>
    @endif
@endpush
