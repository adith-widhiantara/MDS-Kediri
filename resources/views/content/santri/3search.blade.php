<aside class="single_sidebar_widget search_widget">
  <form action="#">
    <div class="form-group">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder='Cari Testimoni'
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Cari Testimoni'">
        <div class="input-group-append">
          <button class="btns" type="button">
            <i class="ti-search"></i>
          </button>
        </div>
      </div>
    </div>
    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">
      Cari Testimoni
    </button>
    <div class="row">
      @auth
        @if(URL::current() != route('create.santri'))
          <div class="
          @if(URL::current() != route('mine.santri'))
          col-6
          @else
          col-12
          @endif
          ">
            <a href="{{ route('create.santri') }}" class="genric-btn primary-border">
              Buat Testimoni
            </a>
          </div>
        @endif
        @if(URL::current() != route('mine.santri'))
          <div class="
          @if(URL::current() != route('create.santri'))
          col-6
          @else
          col-12
          @endif
          ">
            <a href="{{ route('mine.santri') }}" class="genric-btn primary-border">
              Testimoni Saya
            </a>
          </div>
        @endif
        @if( Auth::user()->hakAkses > 1 )
          <div class="col-12">
            <a class="genric-btn primary-border" href="{{ route('all.santri') }}">
              Lihat Semua Testimoni
            </a>
          </div>
        @endif
      @endauth
    </div>
  </form>
</aside>
