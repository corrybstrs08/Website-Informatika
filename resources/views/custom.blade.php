<nav class="text-text-black">
    <ul class="pagination justify-content-center">
      @if ($paginator->onFirstPage())
        <li class="page-item disabled">
          <a class="page-link text-black" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
      @else
        <li class="page-item">
          <a class="page-link text-black" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">Previous</a>
        </li>
      @endif
      @foreach ($elements as $element)
        @if (is_string($element))
          <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
        @endif
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
            @else
              <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @endif
          @endforeach
        @endif
      @endforeach
      @if ($paginator->hasMorePages())
        <li class="page-item">
          <a class="page-link text-black" href="{{ $paginator->nextPageUrl() }}">Next</a>
        </li>
      @else
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
        </li>
      @endif
    </ul>
  </nav>
  