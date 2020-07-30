@if ($berita->hasPages())
<nav class="blog-pagination justify-content-center d-flex">
  <ul class="pagination">

    @if ($berita->onFirstPage())
      <li class="page-item">
        <a href="#" class="page-link" aria-label="Previous">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @else
      <li class="page-item">
        <a href="{{ $berita->previousPageUrl() }}" class="page-link" aria-label="Previous">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @endif

    @if($berita->currentPage() > 2)
      <li class="page-item">
        <a href="{{ $berita->url(1) }}" class="page-link">1</a>
      </li>
    @endif
    @if($berita->currentPage() > 3)
      <li class="page-item">
        <a class="page-link">...</a>
      </li>
    @endif

    @for ( $i = 1; $i <= $berita->lastPage(); $i++ )
      @if($i >= $berita->currentPage() - 1 && $i <= $berita->currentPage() + 1)
        @if ($i == $berita->currentPage())
          <li class="page-item active">
            <a href="#" class="page-link">{{ $i }}</a>
          </li>
        @else
          <li class="page-item">
            <a href="{{ $berita->url($i) }}" class="page-link">{{ $i }}</a>
          </li>
        @endif
      @endif
    @endfor

    @if($berita->currentPage() < $berita->lastPage() - 2)
      <li class="page-item">
        <a class="page-link">...</a>
      </li>
    @endif
    @if($berita->currentPage() < $berita->lastPage() - 1)
      <li class="page-item">
        <a href="{{ $berita->url($berita->lastPage()) }}" class="page-link">{{ $berita->lastPage() }}</a>
      </li>
    @endif

    @if ($berita->hasMorePages())
      <li class="page-item">
        <a href="{{ $berita->nextPageUrl() }}" class="page-link" aria-label="Next">
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
