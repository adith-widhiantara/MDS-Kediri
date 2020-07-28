<div class="top-post-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-tittle mb-35">
          <h2>cerita santri</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-lg-between">
      <div class="col-lg-8 col-md-8">
        <!-- single-job-content -->
        @foreach( $santri as $san )
          <div class="single-job-items mb-30">
            <div class="job-items">
              <div class="company-img">
                <a href="#">
                  <img src="{{ asset('img/santri/'.$san -> sampul) }}" alt="">
                </a>
              </div>
              <div class="job-tittle">
                <span>{{ $san -> user_nama }}</span>
                <a href="post_details.html">
                  <h4>{{ $san -> judul }}</h4>
                </a>
                <p class="caption3">{{ $san -> caption }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="google-add mb-40">
          @foreach( $iklanTopPost as $top )
            @if($top -> caption != "")
              <img src="{{ asset('img/testimoni/ad/'.$top -> caption) }}" alt="">
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
