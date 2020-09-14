@foreach( $santri as $san )
  <article class="blog_item">
    <div  class="blog_item_img">
      <img class="card-img rounded-0" src="{{ asset('img/santri/'.$san -> sampul) }}" alt="">
      <a href="{{ route('detail.santri', $san -> judul) }}" class="blog_item_date">
        <h3 class="tanggalPost">{{ $san -> waktu }}</h3>
        <p class="bulanPost">{{ $san -> bulan }}</p>
      </a>
    </div>
    <div class="blog_details">
      <a class="d-inline-block" href="{{ route('detail.santri', $san -> id) }}">
        <h2 class="blog-head">
          {{ $san -> judul }}
        </h2>
      </a>
      <p class="caption">
        {{ $san -> caption }}
        <!-- 157 char -->
      </p>
      <ul class="blog-info-link">
        <li><a href="#"><i class="fa fa-user"></i> {{ $san -> user_nama }}</a></li>
        <!-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> -->
      </ul>
    </div>
  </article>
@endforeach
