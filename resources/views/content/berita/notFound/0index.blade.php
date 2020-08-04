@extends('base.base')

@section('title', 'Berita Tidak Ditemukan | MDS Kediri')

@section('js')
  <script src="{{ asset('js/berita/notFound.js') }}"></script>
@endsection

@section('content')
<section class="indexBerita section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          @include('content.berita.notFound.1text')
          @include('content.berita.notFound.2post')
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
