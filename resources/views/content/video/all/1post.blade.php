@foreach( $video as $vid )
  <div class="col-xl-3 mb-10">
    <div class="card">
      <img src="{{ asset('img/video/'.$vid->sampul) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          {{ $vid->judul }}
          {{ $vid -> caption }}
        </h5>
        <p class="card-text">
        </p>
        <p class="statusText">
          @if( $vid -> status == 1 )
            <span class="yellowText">Belum Diverifikasi</span>
          @elseif( $vid -> status == 2 )
            <span class="greenText">Diterima</span>
          @elseif( $vid -> status == 3 )
            <span class="redText">Ditolak</span>
          @endif
        </p>
        <a href="{{ route('all.detail.video', $vid->caption) }}" class="genric-btn kunjungiBtn">
          Kunjungi Video
        </a>
      </div>
    </div>
  </div>
@endforeach
