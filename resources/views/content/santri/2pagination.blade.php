@if ($santri->hasPages())
<nav class="blog-pagination justify-content-center d-flex">
  <ul class="pagination">

    @if ($santri->onFirstPage())
      <li class="page-item">
        <a href="#" class="page-link" aria-label="Previous">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @else
      <li class="page-item">
        <a href="{{ $santri->previousPageUrl() }}" class="page-link" aria-label="Previous">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @endif

    @if($santri->currentPage() > 2)
      <li class="page-item">
        <a href="{{ $santri->url(1) }}" class="page-link">1</a>
      </li>
    @endif
    @if($santri->currentPage() > 3)
      <li class="page-item">
        <a class="page-link">...</a>
      </li>
    @endif

    @for ( $i = 1; $i <= $santri->lastPage(); $i++ )
      @if($i >= $santri->currentPage() - 1 && $i <= $santri->currentPage() + 1)
        @if ($i == $santri->currentPage())
          <li class="page-item active">
            <a href="#" class="page-link">{{ $i }}</a>
          </li>
        @else
          <li class="page-item">
            <a href="{{ $santri->url($i) }}" class="page-link">{{ $i }}</a>
          </li>
        @endif
      @endif
    @endfor

    @if($santri->currentPage() < $santri->lastPage() - 2)
      <li class="page-item">
        <a class="page-link">...</a>
      </li>
    @endif
    @if($santri->currentPage() < $santri->lastPage() - 1)
      <li class="page-item">
        <a href="{{ $santri->url($santri->lastPage()) }}" class="page-link">{{ $santri->lastPage() }}</a>
      </li>
    @endif

    @if ($santri->hasMorePages())
      <li class="page-item">
        <a href="{{ $santri->nextPageUrl() }}" class="page-link" aria-label="Next">
          <i class="ti-angle-right"></i>
        </a>
      </li>
    @else
      <li class="page-item">
        <a href="#" class="page-link" aria-label="Next">
          <i class="ti-angle-right"></i>
        </a>
      </li>
    @endif
  </ul>
</nav>
@endif
