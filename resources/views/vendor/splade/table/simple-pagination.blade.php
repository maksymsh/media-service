<nav role="navigation" aria-label="Pagination Navigation" class="">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <span class="">
            {!! __('pagination.previous') !!}
        </span>
    @else
        <Link keep-modal dusk="pagination-simple-previous" href="{{ $paginator->previousPageUrl() }}" rel="prev" class="">
            {!! __('pagination.previous') !!}
        </Link>
    @endif

    @includeWhen($hasPerPageOptions ?? true, 'splade::table.per-page-selector')

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <Link keep-modal dusk="pagination-simple-next" href="{{ $paginator->nextPageUrl() }}" rel="next" class="">
            {!! __('pagination.next') !!}
        </Link>
    @else
        <span class="">
            {!! __('pagination.next') !!}
        </span>
    @endif
</nav>
