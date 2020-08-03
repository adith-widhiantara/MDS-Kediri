<aside class="single_sidebar_widget search_widget">
  <form action="#">
    <div class="form-group">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder='Cari Berita'
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Cari Berita'">
        <div class="input-group-append">
          <button class="btns" type="button">
            <i class="ti-search"></i>
          </button>
        </div>
      </div>
    </div>
    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">
      Cari Berita
    </button>
    <div class="row">
      @auth
        @if(URL::current() != route('create.berita'))
          <div class="
          @if(URL::current() != route('mine.berita'))
          col-6
          @else
          col-12
          @endif
          ">
            <a href="{{ route('create.berita') }}" class="genric-btn primary-border">
              Tambah Berita
            </a>
          </div>
        @endif
        @if(URL::current() != route('mine.berita'))
          <div class="
          @if(URL::current() != route('create.berita'))
          col-6
          @else
          col-12
          @endif
          ">
            <a href="{{ route('mine.berita') }}" class="genric-btn primary-border">
              Berita Saya
            </a>
          </div>
        @endif
      @endauth
    </div>
  </form>
</aside>
