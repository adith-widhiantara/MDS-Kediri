<div class="row">
  @foreach( $berita as $ber )
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('img/news/'.$ber->sampul) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            {{ $ber->judul }}
          </h5>
          <p class="card-text">
            {{ $ber -> caption }}
          </p>
          <p class="status">
            Status :
            @if( $ber -> status == 1 )
              <span class="yellowText">belum dikonfirmasi</span>
            @elseif( $ber -> status == 2 )
              <span class="greenText">Diterima</span>
            @elseif( $ber -> status == 3 )
              <span class="redText">ditolak</span>
            @endif
          </p>
          <a href="{{ route('detail.berita', $ber->judul) }}" class="genric-btn kunjungiBtn">
            Kunjungi Berita
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
