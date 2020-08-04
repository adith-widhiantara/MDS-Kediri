@if ($video->hasPages())
<nav class="blog-pagination justify-content-center d-flex">
  <ul class="pagination">

    @if ($video->onFirstPage())
      <li class="page-item">
        <a href="#" class="page-link" aria-label="Previous">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @else
      <li class="page-item">
        <a href="{{ $video->previousPageUrl() }}" class="page-link" aria-label="Previous">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @endif

    @if($video->currentPage() > 2)
      <li class="page-item">
        <a href="{{ $video->url(1) }}" class="page-link">1</a>
      </li>
    @endif
    @if($video->currentPage() > 3)
      <li class="page-item">
        <a class="page-link">...</a>
      </li>
    @endif

    @for ( $i = 1; $i <= $video->lastPage(); $i++ )
      @if($i >= $video->currentPage() - 1 && $i <= $video->currentPage() + 1)
        @if ($i == $video->currentPage())
          <li class="page-item active">
            <a href="#" class="page-link">{{ $i }}</a>
          </li>
        @else
          <li class="page-item">
            <a href="{{ $video->url($i) }}" class="page-link">{{ $i }}</a>
          </li>
        @endif
      @endif
    @endfor

    @if($video->currentPage() < $video->lastPage() - 2)
      <li class="page-item">
        <a class="page-link">...</a>
      </li>
    @endif
    @if($video->currentPage() < $video->lastPage() - 1)
      <li class="page-item">
        <a href="{{ $video->url($video->lastPage()) }}" class="page-link">{{ $video->lastPage() }}</a>
      </li>
    @endif

    @if ($video->hasMorePages())
      <li class="page-item">
        <a href="{{ $video->nextPageUrl() }}" class="page-link" aria-label="Next">
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
