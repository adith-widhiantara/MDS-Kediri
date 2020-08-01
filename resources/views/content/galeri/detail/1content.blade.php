<div class="single-post">
   <div class="feature-img">
      <img class="feature-img-img" src="{{ asset('img/galeri/'.$galeri -> sampul) }}" alt="">
   </div>
   <div class="blog_details">
      <h2 style="color: #2d2d2d;">
        {{ $galeri -> judul }}
      </h2>
      <ul class="blog-info-link mt-3 mb-4">
         <li><a href="#"><i class="fa fa-user"></i> {{ $galeri -> user_nama }}</a></li>
         <li><a href="#"><i class="fa fa-clock"></i> {{ $galeri -> waktu }}</a></li>
      </ul>
      @if( $galeri -> linkVideo )
        @include('content.galeri.detail.2modalYoutube')
      @endif
      <p class="excert">
         {{ $galeri -> caption }}
      </p>
   </div>
</div>

<div class="navigation-top">
   <div class="d-sm-flex justify-content-between text-center">
      <div class="col-sm-4 text-center my-2 my-sm-0">
      </div>
      <ul class="social-icons">
         <li>
           <a href="https://www.youtube.com/channel/UCBQwTq1Ftku1yuPZ06s45cQ" target="_blank" title="Kang Arief Channel"><i class="fab fa-youtube"></i></a>
         </li>
         <li>
           <a href="https://www.facebook.com/PowerOfDzikir" target="_blank" title="Power Of Dzikir"><i class="fab fa-facebook-f"></i></a>
         </li>
         <li>
           <a href="https://www.youtube.com/channel/UCDPy20cP3WpCt42qUF7Ut9w" target="_blank" title="Ahsana TV"><i class="fab fa-youtube"></i></a>
         </li>
      </ul>
   </div>
   <div class="navigation-area">
      <div class="row">
        @foreach ( $santriTerakhir as $san )
          <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
            <div class="thumb">
              <a href="{{ route('detail.santri',$san->judul) }}">
                <img src="{{ asset('img/santri/'.$san->sampul) }}" alt="">
              </a>
            </div>
            <div class="arrow">
              <a href="{{ route('detail.santri',$san->judul) }}">
                <span class="lnr text-white ti-arrow-left"></span>
              </a>
            </div>
            <div class="detials">
              <p>Testimoni Terbaru</p>
              <a href="{{ route('detail.santri',$san->judul) }}">
                <h4 style="color: #2d2d2d;">{{ $san -> judul }}</h4>
              </a>
            </div>
          </div>
        @endforeach
         @foreach( $postTerakhir as $post )
           <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
              <div class="detials">
                 <p>Berita Terbaru</p>
                 <a href="{{ route('detail.berita',$post -> judul) }}">
                    <h4 style="color: #2d2d2d;">{{ $post -> judul }}</h4>
                 </a>
              </div>
              <div class="arrow">
                 <a href="{{ route('detail.berita',$post -> judul) }}">
                    <span class="lnr text-white ti-arrow-right"></span>
                 </a>
              </div>
              <div class="thumb">
                 <a href="{{ route('detail.berita',$post -> judul) }}">
                    <img src="{{ asset('img/news/'.$post -> sampul) }}" alt="">
                 </a>
              </div>
           </div>
          @endforeach
      </div>
   </div>
</div>
