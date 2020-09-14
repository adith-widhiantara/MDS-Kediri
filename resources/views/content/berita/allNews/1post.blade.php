@foreach( $berita as $ber )
  <div class="col-xl-3 mb-10">
    <div class="card">
      <img src="{{ asset('img/news/'.$ber->sampul) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          {{ $ber->judul }}
        </h5>
        <p class="card-text">
          {{ $ber -> caption }}
        </p>
        <p class="statusText">
          @if( $ber -> status == 1 )
            <span class="yellowText">Belum Diverifikasi</span>
          @elseif( $ber -> status == 2 )
            <span class="greenText">Diterima</span>
          @elseif( $ber -> status == 3 )
            <span class="redText">Ditolak</span>
          @endif
        </p>
        <a href="{{ route('allNews.detail.berita', $ber->id) }}" class="genric-btn kunjungiBtn">
          Kunjungi Berita
        </a>
      </div>
    </div>
  </div>
@endforeach
