@if ($paginator->hasPages())
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="button primary nextButton float-right">Next Page</a>
        @else
            <button class="button primary nextButton float-right disabled">Next Page</button>
        @endif

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="button primary nextButton disabled float-right">Previous Page</button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="button primary nextButton float-right">Previous Page</a>
        @endif

        
        
@endif
