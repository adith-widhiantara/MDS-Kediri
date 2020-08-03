@extends('base.base')

@section('title', 'Galeri Saya | MDS Kediri')

@section('js')
  <script src="{{ asset('js/galeri/index.js') }}"></script>
@endsection

@section('content')
<section class="indexGaleri section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          <div class="text">
            <h1>
              galeri saya
            </h1>
          </div>
          @include('content.galeri.mine.1post')
          @include('content.galeri.mine.2pagination')
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          @include('content.galeri.3search')
          @include('base.countKonten')
          @include('content.galeri.5recentTestimoni')
          @include('content.galeri.6widget')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
