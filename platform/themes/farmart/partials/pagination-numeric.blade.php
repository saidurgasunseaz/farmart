<style>
    .pagination-numeric-short {
    display: flex;
    align-items: center;
    gap: 12px;
    font-family: sans-serif;
    margin-top: 20px;
}

.page-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border: 1px solid #ddd;
    border-radius: 6px;
    background: #fff;
    color: #555;
    cursor: pointer;
    transition: all 0.2s ease;
}

.page-btn svg {
    stroke: currentColor;
}

.page-btn:hover {
    background: #f5f5f5;
    border-color: #ccc;
}

.page-btn.disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.page-input-form {
    display: flex;
    align-items: center;
    gap: 4px;
}

.page-number {
    width: 50px;
    padding: 4px 6px;
    border: 1px solid #ddd;
    border-radius: 4px;
    text-align: center;
}

.total-pages {
    font-weight: 500;
    color: #333;
}

</style>
@if ($paginator->hasPages())
<div class="pagination-numeric-short">

    {{-- Previous Page --}}
    @if ($paginator->onFirstPage())
        <span class="page-btn disabled">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="page-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </a>
    @endif

    {{-- Page Number Input --}}
    <form class="page-input-form" action="{{ $paginator->path() }}" method="GET">
        @foreach (request()->input() as $key => $item)
            @if ($key != $paginator->getPageName() && is_string($item))
                <input name="{{ $key }}" type="hidden" value="{{ $item }}">
            @endif
        @endforeach
        <input class="page-number" name="{{ $paginator->getPageName() }}" type="text" value="{{ $paginator->currentPage() }}" min="1" max="{{ $paginator->lastPage() }}">
        <span class="total-pages">/ {{ $paginator->lastPage() }}</span>
    </form>

    {{-- Next Page --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="page-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </a>
    @else
        <span class="page-btn disabled">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </span>
    @endif

</div>
@endif
