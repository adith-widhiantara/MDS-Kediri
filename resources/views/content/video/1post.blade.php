<div class="row banner">
  @foreach( $video as $vid )
    <div class="col-xl-3">
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
    </div>
  @endforeach
</div>
