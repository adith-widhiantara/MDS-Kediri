@foreach( $galeri as $gal )
  <div class="col-xl-3 mb-10">
    <div class="card">
      <img src="{{ asset('img/galeri/'.$gal->sampul) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          {{ $gal->judul }}
        </h5>
        <p class="card-text">
          {{ $gal -> caption }}
        </p>
        <p class="statusText">
          @if( $gal -> status == 1 )
            <span class="yellowText">Belum Diverifikasi</span>
          @elseif( $gal -> status == 2 )
            <span class="greenText">Diterima</span>
          @elseif( $gal -> status == 3 )
            <span class="redText">Ditolak</span>
          @endif
        </p>
        <a href="{{ route('allNews.detail.galeri', $gal->judul) }}" class="genric-btn kunjungiBtn">
          Kunjungi Berita
        </a>
      </div>
    </div>
  </div>
@endforeach
