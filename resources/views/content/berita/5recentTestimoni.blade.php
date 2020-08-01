<aside class="single_sidebar_widget popular_post_widget">
  <h3 class="widget_title" style="color: #2d2d2d;">Cerita Santri</h3>
  @foreach( $recentSantri as $san )
    <div class="media post_item">
      <img src="{{ asset('img/santri/'.$san -> sampul) }}" alt="post">
      <div class="media-body">
        <a href="">
          <h3 class="recentSantri" style="color: #2d2d2d;">{{ $san -> judul }}</h3>
        </a>
        <p>{{ $san -> waktu }}</p>
      </div>
    </div>
  @endforeach
</aside>
