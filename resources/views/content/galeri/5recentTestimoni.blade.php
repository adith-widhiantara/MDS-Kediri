<aside class="single_sidebar_widget popular_post_widget">
  <h3 class="widget_title" style="color: #2d2d2d;">Berita Terbaru</h3>
  @foreach( $recentBerita as $ber )
    <div class="media post_item">
      <img src="{{ asset('img/news/'.$ber -> sampul) }}" alt="post">
      <div class="media-body">
        <a href="">
          <h3 class="recentSantri" style="color: #2d2d2d;">{{ $ber -> judul }}</h3>
        </a>
        <p>{{ $ber -> waktu }}</p>
      </div>
    </div>
  @endforeach
</aside>
