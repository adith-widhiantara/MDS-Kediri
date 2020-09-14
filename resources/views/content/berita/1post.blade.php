@foreach( $berita as $ber )
  <article class="blog_item">
    <div  class="blog_item_img">
      <img class="card-img rounded-0" src="{{ asset('img/news/'.$ber -> sampul) }}" alt="">
      <a href="{{ route('detail.berita', $ber -> judul) }}" class="blog_item_date">
        <h3 class="tanggalPost">{{ $ber -> waktu }}</h3>
        <p class="bulanPost">{{ $ber -> bulan }}</p>
      </a>
    </div>
    <div class="blog_details">
      <a class="d-inline-block" href="{{ route('detail.berita', $ber -> id) }}">
        <h2 class="blog-head">
          {{ $ber -> judul }}
        </h2>
      </a>
      <p class="caption">
        {{ $ber -> caption }}
      </p>
      <ul class="blog-info-link">
        <li><a href="#"><i class="fa fa-user"></i> {{ $ber -> user_nama }}</a></li>
        <!-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> -->
      </ul>
    </div>
  </article>
@endforeach
