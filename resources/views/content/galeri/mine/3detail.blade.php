@extends('base.base')

@section('title')
  {{ $galeri -> judul }} | MDS Kediri
@endsection

@section('content')
<section class="detailMineBerita blog_area single-post-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        <div class="single-post">
           <div class="feature-img">
              <img class="feature-img-img" src="{{ asset('img/galeri/'.$galeri -> sampul) }}" alt="">
           </div>
           <div class="blog_details">
              <h2 style="color: #2d2d2d;">
                {{ $galeri -> judul }}
              </h2>
              <h2 class="statusText">
                @if( $galeri -> status == 1 )
                  <span class="yellowText">belum dikonfirmasi</span>
                @elseif( $galeri -> status == 2 )
                  <span class="greenText">Diterima</span>
                @elseif( $galeri -> status == 3 )
                  <span class="redText">ditolak</span>
                @endif
              </h2>
              <ul class="blog-info-link mt-3 mb-4">
                 <li><a href="#"><i class="fa fa-user"></i> {{ $galeri -> user_nama }}</a></li>
                 <li><a href="#"><i class="fa fa-clock"></i> {{ $galeri -> waktu }}</a></li>
              </ul>
              <p class="excert">
                 {{ $galeri -> caption }}
              </p>
           </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          @include('content.galeri.3search')
          @include('base.countKonten')
          @include('content.galeri.6widget')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
