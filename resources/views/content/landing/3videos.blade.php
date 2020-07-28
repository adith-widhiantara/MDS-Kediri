<div class="video-area">
  <div class="container-fluid">
    <div class="video-wrapper">
      <div class="left-content">
        <div class="row">
          <div class="col-xl-12">
            <div class="section-tittle section-tittle2 mb-35">
              <h2 class="mb-10">Video</h2>
              <p>Yang terbaru dari kami</p>
              <p class="video-cap">
                @foreach( $captionVideo as $cap )
                  {{ $cap -> caption }}
                @endforeach
              </p>
              <small>Ahsana TV & Kang Arief Channel</small>
            </div>
          </div>
          <!--Left Single -->
          <div class="col-lg-6 col-md-6">
            <div class="single-baner-nw4 mb-30">
              @foreach( $video2 as $vid )
                <div class="banner-img-cap4">
                  <div class="banner-img4">
                    <div class="banner-img4-img">
                      <img src="{{ asset('img/video/'.$vid -> sampul) }}" alt="">
                    </div>
                    <!--video iocn -->
                    <div class="video-icon video-icon2">
                      <a class="popup-video btn-icon" href="{{ $vid -> linkVideo }}" data-animation="bounceIn" data-delay=".4s">
                        <i class="fas fa-play"></i>
                      </a>
                    </div>
                  </div>
                  <div class="banner-cap4">
                    <h3>
                      <a href="{{ $vid -> linkVideo }}" target="_blank">{{ $vid -> caption }}</a>
                    </h3>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single-baner-nw4 mb-30">
              @foreach( $video1 as $vid )
                <div class="banner-img-cap4">
                  <div class="banner-img4">
                    <div class="banner-img4-img">
                      <img src="{{ asset('img/video/'.$vid -> sampul) }}" alt="">
                    </div>
                    <!--video iocn -->
                    <div class="video-icon video-icon2">
                      <a class="popup-video btn-icon" href="{{ $vid -> linkVideo }}" data-animation="bounceIn" data-delay=".4s">
                        <i class="fas fa-play"></i>
                      </a>
                    </div>
                  </div>
                  <div class="banner-cap4">
                    <h3>
                      <a href="{{ $vid -> linkVideo }}" target="_blank">{{ $vid -> caption }}</a>
                    </h3>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="right-content">
        @foreach( $video0 as $vid )
          <div class="video-img">
            <img src="{{ asset('img/video/'.$vid -> sampul) }}" alt="">
            <!--video iocn -->
            <div class="video-icon video-icon2">
              <a class="popup-video btn-icon" href="{{ $vid -> linkVideo }}" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
