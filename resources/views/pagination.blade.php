<div class="shop-bottombar">
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li class="disabled"><a href="#prev">←</a></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}">←</a></li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><a href="#">{{ $element }}</a></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="active" href="{{ $url }}">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}">→</a></li>
        @else
            <li class="disabled"><a href="#next">→</a></li>
        @endif
    </ul>
</div>