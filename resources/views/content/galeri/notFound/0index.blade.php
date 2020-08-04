@extends('base.base')

@section('title', 'Testimoni Tidak Ditemukan | MDS Kediri')

@section('js')
  <script src="{{ asset('js/berita/notFound.js') }}"></script>
@endsection

@section('content')
<section class="indexBerita section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          @include('content.galeri.notFound.1text')
          @include('content.galeri.notFound.2post')
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
