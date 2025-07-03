<div id="docsearch"></div>

@push('scripts')
    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <script type="module">
            docsearch({
                container: '#docsearch',
                appId: '{{ $page->docsearchAppId }}',
                indexName: '{{ $page->docsearchIndexName }}',
                apiKey: '{{ $page->docsearchApiKey }}',
            });
        </script>
    @endif
@endpush
