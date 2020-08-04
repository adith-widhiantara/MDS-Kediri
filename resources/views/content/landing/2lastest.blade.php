<div class="latest-posts pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-tittle mb-35">
          <h2>Berita Terbaru</h2>
        </div>
      </div>
    </div>
    <!-- Slider -->
    <div class="row">
      <div class="col-lg-6">
        <div class="latest-slider">
          <div class="slider-active">
            <!-- Single slider -->
            @foreach( $berita0 as $ber )
              <div class="single-slider">
                <div class="trending-top mb-30">
                  <div class="trend-top-img text-center">
                    <div class="trend-top-img-img">
                      <img src="{{ asset('img/news/'.$ber -> sampul) }}" alt="">
                    </div>
                    <div class="trend-top-cap">
                        <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">{{ $ber -> user_nama }}</span>
                        <h2>
                          <a href="{{ route('detail.berita',$ber -> judul) }}" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{ $ber -> judul }}</a>
                        </h2>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            <!-- Single slider -->
            @foreach( $berita0 as $ber )
              <div class="single-slider">
                <div class="trending-top mb-30">
                  <div class="trend-top-img text-center">
                    <div class="trend-top-img-img">
                      <img src="{{ asset('img/news/'.$ber -> sampul) }}" alt="">
                    </div>
                    <div class="trend-top-cap">
                      <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">{{ $ber -> user_nama }}</span>
                      <h2>
                        <a href="{{ route('detail.berita',$ber -> judul) }}"  data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{ $ber -> judul }}</a>
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- smoll items -->
        <div class="row">
          @foreach( $berita1 as $ber )
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="single-baner-nw2 mb-30 ">
                <div class="banner-img-cap2">
                  <div class="banner-img">
                    <img src="{{ asset('img/news/'.$ber -> sampul) }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="single-baner-nw2 mb-30">
                <div class="banner-img-cap2">
                  <div class="banner-cap2 banner-cap3">
                    <p>{{ $ber -> user_nama }}</p>
                    <h3>
                      <a href="{{ route('detail.berita',$ber -> judul) }}">{{ $ber -> judul }}</a>
                    </h3>
                    <p class="normal" id="caption1">{{ $ber -> caption }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          @foreach( $berita2 as $ber )
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="single-baner-nw2 mb-30">
                <div class="banner-img-cap2">
                  <div class="banner-cap2 banner-cap3">
                    <p>{{ $ber -> user_nama }}</p>
                    <h3>
                      <a href="{{ route('detail.berita',$ber -> judul) }}">{{ $ber -> judul }}</a>
                    </h3>
                    <p class="normal" id="caption2">{{ $ber -> caption }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="single-baner-nw2 mb-30 ">
                <div class="banner-img-cap2">
                  <div class="banner-img">
                    <img src="{{ asset('img/news/'.$ber -> sampul) }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-lg-6">
        @foreach( $berita3 as $ber )
          <div class="single-baner-nw2 mb-30 text-center">
            <div class="banner-img-cap2">
              <div class="banner-img">
                <img src="{{ asset('img/news/'.$ber -> sampul) }}" alt="">
              </div>
              <div class="banner-cap2">
                <p>{{ $ber -> user_nama }}</p>
                <h3>
                  <a href="{{ route('detail.berita',$ber -> judul) }}">{{ $ber -> judul }}</a>
                </h3>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col-lg-6">
        @foreach( $berita4 as $ber )
          <div class="single-baner-nw2 mb-30 text-center">
            <div class="banner-img-cap2">
              <div class="banner-img">
                <img src="{{ asset('img/news/'.$ber -> sampul) }}" alt="">
              </div>
              <div class="banner-cap2">
                <p>{{ $ber -> user_nama }}</p>
                <h3>
                  <a href="{{ route('detail.berita',$ber -> judul) }}">{{ $ber -> judul }}</a>
                </h3>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
