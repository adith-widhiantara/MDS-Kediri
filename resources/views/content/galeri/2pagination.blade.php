@if ($galeri->hasPages())
<nav class="blog-pagination justify-content-center d-flex">
  <ul class="pagination">

    @if ($galeri->onFirstPage())
      <li class="page-item">
        <a href="#" class="page-link" aria-label="Previous">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @else
      <li class="page-item">
        <a href="{{ $galeri->previousPageUrl() }}" class="page-link" aria-label="Previous">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @endif

    @if($galeri->currentPage() > 2)
      <li class="page-item">
        <a href="{{ $galeri->url(1) }}" class="page-link">1</a>
      </li>
    @endif
    @if($galeri->currentPage() > 3)
      <li class="page-item">
        <a class="page-link">...</a>
      </li>
    @endif

    @for ( $i = 1; $i <= $galeri->lastPage(); $i++ )
      @if($i >= $galeri->currentPage() - 1 && $i <= $galeri->currentPage() + 1)
        @if ($i == $galeri->currentPage())
          <li class="page-item active">
            <a href="#" class="page-link">{{ $i }}</a>
          </li>
        @else
          <li class="page-item">
            <a href="{{ $galeri->url($i) }}" class="page-link">{{ $i }}</a>
          </li>
        @endif
      @endif
    @endfor

    @if($galeri->currentPage() < $galeri->lastPage() - 2)
      <li class="page-item">
        <a class="page-link">...</a>
      </li>
    @endif
    @if($galeri->currentPage() < $galeri->lastPage() - 1)
      <li class="page-item">
        <a href="{{ $galeri->url($galeri->lastPage()) }}" class="page-link">{{ $galeri->lastPage() }}</a>
      </li>
    @endif

    @if ($galeri->hasMorePages())
      <li class="page-item">
        <a href="{{ $galeri->nextPageUrl() }}" class="page-link" aria-label="Next">
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
