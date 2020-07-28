<div class="banner-news">
  <div class="container-fluid p-0">
    <div class="banner-slider-active no-gutters">
      @foreach($galeri as $gal)
        <div class="single-sliders">
          <div class="single-baner-nw mb-30 text-center">
            <div class="banner-img-cap">
              <div class="banner-img">
                <div class="banner-img-img">
                  <img src="{{ asset('img/galeri/'.$gal->sampul) }}" alt="img/galeri/{{ $gal->sampul }}">
                </div>
                <!--video iocn -->
                @if( $gal -> linkVideo != "" )
                  <div class="video-icon">
                    <a class="popup-video btn-icon" href="{{ $gal -> linkVideo }}" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                  </div>
                @endif
              </div>
              <div class="banner-cap">
                <p>{{ $gal -> user_nama }}</p>
                <h3><a href="#">{{$gal -> judul}}</a></h3>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
