<div class="top-post-area">
  <div class="row justify-content-lg-between">
  <div class="col-12">
    @foreach( $santriNotFound as $san )
      <div class="single-job-items mb-30">
        <div class="job-items">
          <div class="company-img">
            <a href="#">
              <img src="{{ asset('img/santri/'.$san -> sampul) }}" alt="">
            </a>
          </div>
          <div class="job-tittle">
            <span>{{ $san -> user_nama }}</span>
            <a href="{{ route('detail.santri', $san -> judul) }}">
              <h4>{{ $san -> judul }}</h4>
            </a>
            <p class="caption3">{{ $san -> caption }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</div>
