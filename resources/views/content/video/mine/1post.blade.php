<div class="row banner">
  @foreach( $video as $vid )
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
      <div class="banner-vid-img">
        <img src="{{ asset('img/video/'.$vid->sampul) }}" alt="">
        @if( $vid -> sampul != "" )
          <div class="video-icon">
            <a class="popup-video" href="{{$vid->linkVideo}}" data-animation="bounceIn" data-delay=".4s">
              <i class="fas fa-play"></i>
            </a>
          </div>
        @endif
      </div>
      <div class="statusText">
        <p>
          @if( $vid -> status == 1 )
            <span class="yellowText">belum dikonfirmasi</span>
          @elseif( $vid -> status == 2 )
            <span class="greenText">Diterima</span>
          @elseif( $vid -> status == 3 )
            <span class="redText">ditolak</span>
          @endif
        </p>
      </div>
    </div>
  @endforeach
</div>
