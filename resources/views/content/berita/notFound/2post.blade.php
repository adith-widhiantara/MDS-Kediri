<div class="top-post-area">
  <div class="row justify-content-lg-between">
  <div class="col-12">
    @foreach( $beritaNotFound as $ber )
      <div class="single-job-items mb-30">
        <div class="job-items">
          <div class="company-img">
            <a href="#">
              <img src="{{ asset('img/news/'.$ber -> sampul) }}" alt="">
            </a>
          </div>
          <div class="job-tittle">
            <span>{{ $ber -> user_nama }}</span>
            <a href="{{ route('detail.berita', $ber -> judul) }}">
              <h4>{{ $ber -> judul }}</h4>
            </a>
            <p class="caption3">{{ $ber -> caption }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</div>
