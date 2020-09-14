<div class="row">
  @foreach( $santri as $san )
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('img/santri/'.$san->sampul) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            {{ $san->judul }}
          </h5>
          <p class="card-text">
            {{ $san -> caption }}
          </p>
          <p class="status">
            Status :
            @if( $san -> status == 1 )
              <span class="yellowText">belum dikonfirmasi</span>
            @elseif( $san -> status == 2 )
              <span class="greenText">Diterima</span>
            @elseif( $san -> status == 3 )
              <span class="redText">ditolak</span>
            @endif
          </p>
          <a href="
          @if( $san -> status == 1 || $san -> status == 3 )
            {{ route('mine.detail.santri', $san->id) }}
          @elseif( $san -> status == 2 )
            {{ route('detail.santri', $san->id) }}
          @endif
          " class="genric-btn kunjungiBtn">
            Kunjungi Testimoni
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
