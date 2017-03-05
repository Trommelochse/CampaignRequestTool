@if ($paginator->hasPages())
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
            <button class="button primary nextButton disabled float-right">Previous Page</button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="button primary nextButton float-right">Previous Page</a>
        @endif

        {{-- Pagination Elements --}}

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="button primary nextButton float-right">Next Page</a>
        @else
            <button class="button primary nextButton float-right disabled">Next Page</a>
        @endif
@endif
