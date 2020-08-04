<aside class="single_sidebar_widget search_widget">
  <form action="#">
    <div class="form-group">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder='Cari Video'
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Cari Video'">
        <div class="input-group-append">
          <button class="btns" type="button">
            <i class="ti-search"></i>
          </button>
        </div>
      </div>
    </div>
    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">
      Cari Video
    </button>
    <div class="row">
      @auth
        @if(URL::current() != route('create.video'))
          <div class="col-6">
            <a href="{{ route('create.video') }}" class="genric-btn primary-border">
              Buat Video
            </a>
          </div>
        @endif
        <div class="
        @if(URL::current() != route('create.video'))
        col-6
        @else
        col-12
        @endif
        ">
          <a href="{{ route('mine.video') }}" class="genric-btn primary-border">
            Video Saya
          </a>
        </div>
        @if( Auth::user()->hakAkses > 1 )
          <div class="col-12">
            <a class="genric-btn primary-border" href="{{ route('all.video') }}">
              Lihat Semua Video
            </a>
          </div>
        @endif
      @endauth
    </div>
  </form>
</aside>
