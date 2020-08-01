<aside class="single_sidebar_widget post_category_widget">
  <h4 class="widget_title" style="color: #2d2d2d;">Konten</h4>
  <ul class="list cat-list">
    <li>
      <a href="{{ route('index.berita') }}" class="d-flex">
        <p class="fontP">
          Berita ({{ $countBerita }})
        </p>
      </a>
    </li>
    <li>
      <a href="{{ route('index.galeri') }}" class="d-flex">
        <p class="fontP">
          Galeri ({{ $countGaleri }})
        </p>
      </a>
    </li>
    <li>
      <a href="{{ route('index.santri') }}" class="d-flex">
        <p class="fontP">
          Cerita Santri ({{ $countSantri }})
        </p>
      </a>
    </li>
    <li>
      <a href="{{ route('index.video') }}" class="d-flex">
        <p class="fontP">
          Video ({{ $countVideo }})
        </p>
      </a>
    </li>
  </ul>
</aside>
