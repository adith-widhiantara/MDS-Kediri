@extends('base.base')

@section('title')
{{ $berita -> judul }} || MDS Kediri
@endsection

@section('content')
<div class="container allNews">
  <div class="single-post">
     <div class="feature-img">
        <img class="feature-img-img" src="{{ asset('img/news/'.$berita -> sampul) }}" alt="">
     </div>
     <div class="blog_details">
        <h2 style="color: #2d2d2d;">
          {{ $berita -> judul }}
        </h2>
        <ul class="blog-info-link mt-3 mb-4">
           <li><a href="#"><i class="fa fa-user"></i> {{ $berita -> user_nama }}</a></li>
           <li><a href="#"><i class="fa fa-clock"></i> {{ $berita -> waktu }}</a></li>
        </ul>
        <p class="statusText">
          @if( $berita -> status == 1 )
            <span class="yellowText">Belum Diverifikasi</span>
          @elseif( $berita -> status == 2 )
            <span class="greenText">Diterima</span>
          @elseif( $berita -> status == 3 )
            <span class="redText">Ditolak</span>
          @endif
        </p>
        <p class="excert">
           {{ $berita -> caption }}
        </p>
        <div class="row">
          <div class="col-lg-6">
            <a class="genric-btn setuju" onclick="event.preventDefault(); document.getElementById('layakDitayangkan').submit();">
              Layak ditayangkan
            </a>
            <form id="layakDitayangkan" action="{{ route('allNews.store.detail.berita',$berita -> judul) }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
          <div class="col-lg-6">
            <a class="genric-btn tidakSetuju" onclick="event.preventDefault(); document.getElementById('tidakLayakDitayangkan').submit();">
              tidak Layak ditayangkan
            </a>
            <form id="tidakLayakDitayangkan" action="{{ route('allNews.store.tidakSetuju.detail.berita',$berita -> judul) }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>
     </div>
  </div>
</div>
@endsection
