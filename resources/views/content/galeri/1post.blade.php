<div class="row">
  @foreach( $galeri as $gal )
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('img/galeri/'.$gal->sampul) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            {{ $gal->judul }}
          </h5>
          <p class="card-text">
            {{ $gal -> caption }}
          </p>
          <a href="{{ route('detail.galeri', $gal->id) }}" class="genric-btn kunjungiBtn">
            Kunjungi Foto
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
