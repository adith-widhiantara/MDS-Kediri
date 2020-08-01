<aside class="single_sidebar_widget search_widget">
  <form action="#">
    <div class="form-group">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder='Cari Galeri'
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Cari Galeri'">
        <div class="input-group-append">
          <button class="btns" type="button">
            <i class="ti-search"></i>
          </button>
        </div>
      </div>
    </div>
    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">
      Cari Galeri
    </button>
    <div class="row">
      {{--
        @auth
        --}}
        @if(URL::current() != route('create.galeri'))
          <div class="col-6">
            <a href="{{ route('create.galeri') }}" class="genric-btn primary-border">
              Tambah Galeri
            </a>
          </div>
        @endif
        <div class="
        @if(URL::current() != route('create.galeri'))
        col-6
        @else
        col-12
        @endif
        ">
          <a href="" class="genric-btn primary-border">
            Galeri Saya
          </a>
        </div>
        {{--
          @endauth
          --}}
    </div>
  </form>
</aside>
