<div class="top-post-area">
  <div class="row justify-content-lg-between">
  <div class="col-12">
    @foreach( $galeriNotFound as $gal )
      <div class="single-job-items mb-30">
        <div class="job-items">
          <div class="company-img">
            <a href="#">
              <img src="{{ asset('img/galeri/'.$gal -> sampul) }}" alt="">
            </a>
          </div>
          <div class="job-tittle">
            <span>{{ $gal -> user_nama }}</span>
            <a href="{{ route('detail.galeri', $gal -> judul) }}">
              <h4>{{ $gal -> judul }}</h4>
            </a>
            <p class="caption3">{{ $gal -> caption }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</div>
