@foreach( $santri as $san )
  <div class="col-xl-3 mb-10">
    <div class="card">
      <img src="{{ asset('img/santri/'.$san->sampul) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          {{ $san->judul }}
        </h5>
        <p class="card-text">
          {{ $san -> caption }}
        </p>
        <p class="statusText">
          @if( $san -> status == 1 )
            <span class="yellowText">Belum Diverifikasi</span>
          @elseif( $san -> status == 2 )
            <span class="greenText">Diterima</span>
          @elseif( $san -> status == 3 )
            <span class="redText">Ditolak</span>
          @endif
        </p>
        <a href="{{ route('all.detail.santri', $san->judul) }}" class="genric-btn kunjungiBtn">
          Kunjungi Berita
        </a>
      </div>
    </div>
  </div>
@endforeach
