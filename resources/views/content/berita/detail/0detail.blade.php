@extends('base.base')

@section('title')
{{ $berita -> judul }} | MDS Kediri
@endsection

@section('content')
<section class="blog_area single-post-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        @include('content.berita.detail.1content')
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
