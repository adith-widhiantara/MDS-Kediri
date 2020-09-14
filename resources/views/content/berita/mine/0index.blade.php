@extends('base.base')

@section('title', 'Berita Saya | MDS Kediri')

@section('js')
  <script src="{{ asset('js/galeri/index.js') }}"></script>
@endsection

@section('content')
<section class="indexBerita section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          <div class="text">
            <h1>
              berita saya
            </h1>
          </div>
          @if (session('successBerita'))
            <div class="alert alert-success" role="alert">
              {{ session('successBerita') }}
            </div>
          @endif
          @include('content.berita.mine.1post')
          @include('content.berita.mine.2pagination')
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          @include('content.berita.3search')
          @include('base.countKonten')
          @include('content.berita.5recentTestimoni')
          @include('content.berita.6widget')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
